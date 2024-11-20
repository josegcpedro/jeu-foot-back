<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ballongame";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo("Erreur a la connexion: " . $conn->connect_error);
} else {
    echo "La connexion a été faite avec succès";
}
?>
