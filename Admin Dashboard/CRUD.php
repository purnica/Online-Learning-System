<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Mysql@123";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch courses from the database
$sql = "SELECT CourseID, CourseTitle, CreditHour FROM courses";
$result = $conn->query($sql);

?>

<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['name'])) {
   header("Location: admindashboard.php");
   exit;
}
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="admindashboard.php"><img src="images/logo1.png" class="logo"></img></a>

      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images\pic-5.jpg" class="image" alt="">
         <h3 class="name"><?php echo htmlspecialchars($name); ?></h3>
         <p class="role">Admin</p>
         <!-- <a href="profile.html" class="btn">view profile</a> -->
         <div class="flex-btn">
            <!-- <a href="login.html" class="option-btn">login</a> -->
            <a href="adminLogin.php" class="option-btn">Logout</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images\pic-5.jpg" class="image" alt="">
      <h3 class="name"><?php echo htmlspecialchars($name); ?></h3>
      <p class="role">Admin</p>
      <!-- <a href="profile.html" class="btn">view profile</a> -->
   </div>

   <nav class="navbar">
      <a href="admindashboard.php"><i class="fas fa-home"></i><span>Dashboard</span></a>
      <a href="CRUD.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="learner-info.php"><i class="fas fa-chalkboard-user"></i><span>Learner-Info</span></a>
   </nav>

</div>

<section class="courses">

   <h1 class="heading">our courses</h1>
   <a href="adminCreate.php" class="inline-btn">Add Course</a>
   <br><br>

   <div class="box-container">
   <?php
        if ($result->num_rows > 0) {
            // Output each course
            while($row = $result->fetch_assoc()) {
                echo '<div class="box">';
                echo '<h3 class="title">' . $row["CourseTitle"] . '</h3>';
                echo '<h2>' . $row["CreditHour"] . ' credit hour</h2>';
                echo '<a href="adminRead.php?CourseID=' . $row["CourseID"] . '" class="inline-btn">Read</a> &nbsp;&nbsp;'; 
                echo '<a href="adminUpdate.php?CourseID=' . $row["CourseID"] . '" class="inline-btn">Edit</a> &nbsp;&nbsp;';
                echo '<a href="#" data-id="' . $row["CourseID"] . '" class="inline-btn button-del">Delete</a>';
                echo '</div>';
            }
        } else {
            echo "No courses found.";
        }
        ?>

      <!-- <div class="box">
         <h3 class="title">CSS tutorial</h3>
         <a href="" class="inline-btn">Edit</a>
      </div> -->
   </div>
</section>


<footer class="footer">

   &copy; copyright @ 2024 ALL RIGHTS RESERVED. <span>EduGhar </span>For SKILLS!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- AJAX code -->
<script src="jquery.js"></script>
<script>
   $(document).ready(function () {
      $('.button-del').click(function () {
         const courseId = $(this).data('id'); // Get the course ID
         const courseBox = $(this).closest('.box'); // Get the parent box to remove
            $.ajax({
               url: 'adminDelete.php', // PHP script to handle deletion
               type: 'POST',
               data: { CourseID: courseId },
               success: function (response) {
                     alert('Course deleted successfully');
                     courseBox.remove(); // Remove the course box from the DOM
               },
            });
      });
   });
</script>

</body>
</html>

<?php
$conn->close();
?>