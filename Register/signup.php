
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container">
        <div class="left-container">
            <img src="logo1.png" width="30px" height="30px" class="logo">
            <h1>Become </h1>
            <h1 class="lower">a Learner <span class="heart">♥</span></h1>
            <p>Free to use, Easy to love</p>
            <ul>
                <li><span>✔</span> Self paced Learning</li>
                <li><span>✔</span> Quick delivery</li>
                <li><span>✔</span> Affordable</li>
                <li><span>✔</span> Scalable</li>
                <li><span>✔</span> Consistent</li>
            </ul>
        </div>
        <div class="right-container">
            <h2>Sign up</h2>
            <form onsubmit="return validate()" action="database.php" method="post">
                <!-- <label class="signup">Don't have account? <a href="#">Sign up</a></label> -->
                <input type="first name" placeholder="First Name" id="fn" name="fn" required>
                <input type="last name" placeholder="Last Name" id="ln" name="ln" required>
                <input type="email" placeholder="Email" id="e" name="e" required>
                <input type="password" placeholder="Password" id="pass" name="pass" required>
                <!-- <label class="forgetpsd"><a href="#">Forget Password?</a></label> -->
                <button type="submit" value="submit" class="login-btn">Sign Up</button>
                 <!-- <input type="submit" value="submit"> -->
                <center>
                <label class="signup">Already have an account? <a href="login.html">Log In</a></label>
            </center>
            </form>
            <script src="signup.js"></script>
        </div>
    </div>
</body>
</html>