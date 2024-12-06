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

$sql="select * from signup where email='$email' AND password='$pass'";

$result= mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
if($num>0)
{
header("Location:webPage.php");
exit;
}
else{
echo "invalid username and password";
}
}

mysqli_close($conn);
?>