<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Mysql@123";
$dbname = "project";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
    die ("connection failed".mysqli_connect_error());
}

// echo "Connection success"."<br>";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['e'];
    $pass = $_POST['pass'];

$sql="select * from admin where email='$email' AND password='$pass'";

$result= mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
if($num>0)
{
    $user = mysqli_fetch_assoc($result);
    if($num == 1 or $num == 2)
    {
        $_SESSION['name'] = $user['name'];
        header("Location:admindashboard.php");
        exit;
    }
    else{
    echo "invalid username and password";
    }
}
}
else {
    echo "No user found with this username!";
}

mysqli_close($conn);
?>