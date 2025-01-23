<?php
$servername = "localhost";
$username = "root";
$password = "Mysql@123";
$dbname = "project";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
   die("connection failed: " . mysqli_connect_error());
}

// echo "Connected Successfully <br>";

//fetch all users
$sql = "select * from signup";
$result = mysqli_query($conn, $sql);
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
   <title>Learner Information</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      table {
         width: 100%;
         border-collapse: collapse;
      }

      th,
      td {
         border: 1px solid #000;
         /* Add solid borders */
         padding: 8px;
         text-align: left;
      }

      th {
         background-color: #f2f2f2;
         /* Optional: Adds a background to table headers */
         font-size: 14px;
      }

      /* tr:nth-child(even) {
        background-color: #f9f9f9; 
    } */
      /* Modal styles */
      .modal {
         display: none;
         position: fixed;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         background-color: white;
         padding: 20px;
         border: 1px solid #ccc;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .modal.active {
         display: block;
      }
   </style>

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

   <section class="teachers">

      <h1 class="heading">Learner's Information</h1>

      <div class="box-container">

         <div class="box">
            <!-- <button id="btn" style="color:#43B7E5">Get Data</button> -->
            <!-- <br><br> -->
            <table border="1">
               <tr>
                  <th>ID</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Action</th>
               </tr>
               <!-- <td id="table-data"></td> -->
               <?php
               if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                     echo "<tr>
                     <td>" . $row['id'] . "</td>
                     <td>" . $row['firstname'] . "</td>
                     <td>" . $row['lastname'] . "</td>
                     <td>" . $row['email'] . "</td>
                     <td>" . $row['password'] . "</td>
                     <td>
                        <button class='delete_btn' data-id='" . $row['id'] . "'>Delete</button></td>
                     </tr>";
                  }
               } else {
                  echo "<tr><td colspan='6'>No users found</td></tr>";
               }

               mysqli_close($conn);
               ?>
            </table>

         </div>

      </div>

   </section>

   <footer class="footer">

      &copy; copyright @ 2024 ALL RIGHTS RESERVED. <span>EduGhar </span>For SKILLS!

   </footer>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <!-- ajax code -->
   <script src="jquery.js"></script>
   <script>
      $(document).ready(function() {
         //handle delete
         $('.delete_btn').click(function() {
            var id = $(this).data('id');
            var row = $(this).closest('tr');

            $.ajax({
               url: 'learner-info-db.php', // replace with the name of your PHP script
               type: 'POST',
               data: {
                  delete_id: id
               },
               success: function(response) {
                  alert("Record deleted successfully");
                  row.remove();
               }
            });
         });
      });
   </script>


</body>

</html>