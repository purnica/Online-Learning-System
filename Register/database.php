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

// echo "Connected Successfully <br>";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$firstname = $_POST['fn'];
$lastname = $_POST['ln'];
$email = $_POST['e'];
$pass = $_POST['pass'];

$sql= "INSERT INTO signup(firstname,lastname,email,password) values('$firstname','$lastname','$email','$pass')";

$result= mysqli_query($conn,$sql);
if($result){
    header("Location:login.php");
    exit;
}
else{
    echo mysqli_error($conn);
}

}


mysqli_close($conn);

?>