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
   <title>about us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css\style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php"><img src="images/logo1.png" class="logo"></img></a>

      <form action="search.html" method="post" class="search-form">
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
         <!-- <a href="profile.php" class="btn">view profile</a> -->
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
      <!-- <a href="profile.php" class="btn">view profile</a> -->
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-us.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>EduGhar offers flexible online learning, empowering learners of all ages with innovative tools, personalized learning paths, and a vibrant community, education focuses on growth, discovery, and success. EduGhar offers various online courses that leads to teaching and learning. We are committed to being your trusted partner in achieving academic excellence and reaching your goals.</p>
         <a href="courses.php" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+10k</h3>
            <p>online courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+40k</h3>
            <p>brilliant students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>24/7 </h3>
            <p>learning access</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>+5k</h3>
            <p>interactive modules</p>
         </div>
      </div>

   </div>

</section> 

<section class="reviews">

   <h1 class="heading">Your Feedback</h1>

   <div class="box-container">

      <div class="box">
         <p>Nice Learning Platform</p>
         <div class="student">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>My name</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

</section>



<footer class="footer">

   &copy; copyright @ 2024 ALL RIGHTS RESERVED. <span>EduGhar </span>For SKILLS!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>