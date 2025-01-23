<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Mysql@123";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if CourseID is provided via POST
if (isset($_POST['CourseID'])) {
    $courseId = $_POST['CourseID'];

    // SQL query to delete the course
    $sql = "DELETE FROM courses WHERE CourseID = $courseId";

    if ($conn->query($sql) === TRUE) {
        echo "Course deleted successfully"; // Respond with success
    } else {
        echo "Error: " . $conn->error; // Respond with the error message
    }
}
?>