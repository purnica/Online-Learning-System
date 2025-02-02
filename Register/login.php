<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
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
            <h2>Log in</h2>
            <form onsubmit="return validate()" action="logindb.php" method="post" >
                <label class="signup">Don't have account? <a href="signup.php">Sign up</a></label>
                <input type="email" id="e" name="e" placeholder="Email" required>
                <input type="password" id="p" name="pass" placeholder="Password" required>
                <!-- <label class="forgetpsd"><a href="#">Forget Password?</a></label> -->
                <button type="submit" value="submit" class="login-btn">Login</button>
                <label><a href=""><u>Admin Login ?</u></a></label>
            </form>
            <script src="login.js"></script>
        </div>
    </div>
</body>
</html>
