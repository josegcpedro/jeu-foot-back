<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ballongame";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->error){
    echo "ça marche pas";
} else {
    echo "ça marche";
}
?>
