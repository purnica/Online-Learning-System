<?php

session_start();

// Check if user is logged in
if (!isset($_SESSION['firstname'])) {
   header("Location: login.php");
   exit;
}

$name = $_SESSION['firstname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>video playlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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
            <img src="images/pic-1.jpg" class="image" alt="">
            <h3 class="name"><?php echo htmlspecialchars($name); ?></h3>
            <p class="role">Student</p>
            <a href="profile.php" class="btn">view profile</a>
            <div class="flex-btn">
               <a href="login.php" class="option-btn">logout</a>
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
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name"><?php echo htmlspecialchars($name); ?></h3>
         <p class="role">student</p>
         <a href="profile.php" class="btn">view profile</a>
      </div>
   
      <nav class="navbar">
         <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
         <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
         <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
         <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
      </nav>
   
   </div>

<section class="playlist-details">

   <h1 class="heading">Course details</h1>

   <div class="row">

      <div class="column">
         <!-- <form action="" method="post" class="save-playlist">
            <button type="submit"><i class="far fa-bookmark"></i> <span>save playlist</span></button>
         </form> -->
   
          <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <!-- <span>10 videos</span> -->
         </div>
      </div>
      <div class="column">
         <!-- <div class="tutor">
            <img src="images/pic-2.jpg" alt=""> -->
            <!-- <div>
               <h3>john deo</h3>
               <span>21-10-2022</span>
            </div>
         </div> -->
   
         <div class="details">
            <h3>complete HTML Course</h3>
            <p>The language for building web pages.</p>
            <!-- <a href="teacher_profile.php" class="inline-btn">view profile</a> -->
         </div>
      </div>
   </div>

</section>

<section class="playlist-videos">

   <h1 class="heading">Contents</h1>

   <div class="box-container">

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-1.png" alt="">
         <h3>complete HTML tutorial (part 01)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-2.png" alt="">
         <h3>complete HTML tutorial (part 02)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-3.png" alt="">
         <h3>complete HTML tutorial (part 03)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-4.png" alt="">
         <h3>complete HTML tutorial (part 04)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-5.png" alt="">
         <h3>complete HTML tutorial (part 05)</h3>
      </a>

      <a class="box" href="watch-video.php">
         <i class="fas fa-play"></i>
         <img src="images/post-1-6.png" alt="">
         <h3>complete HTML tutorial (part 06)</h3>
      </a>

   </div>

</section>



<footer class="footer">

   &copy; copyright @ 2024 ALL RIGHTS RESERVED. <span>EduGhar </span>For SKILLS!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>