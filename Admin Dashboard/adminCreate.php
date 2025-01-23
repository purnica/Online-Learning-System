<?php
$servername = "localhost";
$username = "root";
$password = "Mysql@123";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn)
{
   die ("connection failed" . mysqli_connect_error());
}

// Handle Create Operation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $credithour = $_POST['credithour'];

    $sql = "INSERT INTO courses (CourseTitle, description, CreditHour) VALUES ('$title', '$description',$credithour)";

    if ($conn->query($sql) === TRUE) {
         echo '<script type="text/javascript">';
         echo 'alert("New course created successfully!");';
         echo 'window.location.href = "CRUD.php"';
         echo '</script>';
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['name'])) {
   header("Location: admindasboard.php");
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
   <title>Create Course</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css\style.css">
   <style>
      #description {
         width: 100%;
         height: 100%;
         padding: 10px;
         font-size: 16px;
         border: 1px solid #ccc;
         border-radius: 5px;
         margin: 10px 0;
      }

      #credithour {
         width: 100%;
         height: 100%;
         padding: 10px;
         font-size: 16px;
         border: 1px solid #ccc;
         border-radius: 5px;
         margin: 10px 0;
      }

      #title {
         width: 100%;
         height: 100%;
         padding: 10px;
         font-size: 16px;
         border: 1px solid #ccc;
         border-radius: 5px;
         margin: 10px 0;
      }
   </style>

</head>

<body>

   <header class="header">

      <section class="flex">

         <a href="home.php"><img src="images/logo1.png" class="logo"></img></a>

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
            <!-- <a href="profile.php" class="btn">view profile</a> -->
            <div class="flex-btn">
               <a href="adminLogin.php" class="option-btn">logout</a>
               <!-- <a href="register.php" class="option-btn">register</a> -->
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
         <!-- <a href="profile.php" class="btn">view profile</a> -->
      </div>

      <nav class="navbar">
         <a href="admindashboard.php"><i class="fas fa-home"></i><span>Dashboard</span></a>
         <a href="CRUD.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
         <a href="learner-info.php"><i class="fas fa-chalkboard-user"></i><span>Learner-Info</span></a>
      </nav>
   </div>

   <form method="POST">
      <section class="playlist-details">

         <h1 class="heading">Course Title</h1>
         <div class="row">
            <input type="text" id="title" name="title" placeholder="Enter Course Title">
         </div>
      </section>

      <section class="playlist-videos">
         <h1 class="heading">Course Description </h1>
         <div class="box-container">
            <div class="box">
               <textarea id="description" name="description" placeholder="Enter Course Details..." rows="10" required></textarea><br><br>

               <input type="number" id="credithour" name="credithour" placeholder="Enter Credit Hour" required><br><br>

               <button type="submit" name="create" class="inline-btn">Create Course</button>
            </div>
         </div>
      </section>
   </form>

   <footer class="footer">

      &copy; copyright @ 2024 ALL RIGHTS RESERVED. <span>EduGhar </span>For SKILLS!

   </footer>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>


</body>

</html>