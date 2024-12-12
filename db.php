<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ballongame";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    http_response_code(500); // Internal Server Error
    echo "Connection failed: " . $conn->connect_error;
} else {
    http_response_code(200); // OK
    echo "Connection successful";
}
?>
