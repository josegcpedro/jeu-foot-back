<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Access-Control-Allow-Origin: *'); 

use Gri\Baloongame\Controller\QuestionController;
use Gri\Baloongame\Controller\AnswerController;


$controller = new QuestionController();
$controller->showQuestions();

$controller = new AnswerController();
$controller->showAnswer();

?>
