<?php
 $servername = "localhost";
 $username = "root";
 $password = "Mysql@123";
 $dbname = "project";

 //create connection
 $conn = mysqli_connect ($servername, $username, $password, $dbname);

    //check connection
    if(!$conn){
        die ("connection failed: " .mysqli_connect_error());
    }

    // echo "Connected Successfully <br>";

//for delete
if (isset($_POST['delete_id'])) {
   $id = $_POST['delete_id'];
   $sql = "DELETE FROM signup WHERE id=$id";
   if ($conn->query($sql) === TRUE) {
       echo "Record deleted successfully";
   } else {
       echo "Error occured: " . $conn->error;
   }
}
?>