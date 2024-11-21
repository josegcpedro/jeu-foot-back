<?php
/*include 'db.php';

$sql = "SELECT * FROM question";
$result = $conn->query($sql); // query() est une méthode de cet objet qui permet d'exécuter une requête SQL

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { // tant que fetch_assoc() retourne une ligne de résultat, on boucle
        $data[] = $row; // On stocke chaque ligne de résultat dans un tableau
    }
    echo json_encode($data);
} else {
    echo "hello";
}*/

require_once("vendor/autoload.php");

use Gri\Baloongame\Controller\QuestionController;

$controller = new QuestionController();

echo $controller->showQuestions();


?>