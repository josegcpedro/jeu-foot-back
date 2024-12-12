<?php


require_once("vendor/autoload.php");
header('Access-Control-Allow-Origin: *'); 

use Gri\Baloongame\Controller\QuestionController;
use Gri\Baloongame\Controller\AnswerController;

$controller = new QuestionController();
$controller->showQuestions();
$controller = new AnswerController();
$controller->showAnswer();

?>