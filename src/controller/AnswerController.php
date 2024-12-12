<?php

namespace Gri\Baloongame\Controller;

use Gri\Baloongame\Repository\AnswerRepository;

class AnswerController
{
    public function showAnswer()
    {
      $answerRepository = new AnswerRepository();
      $answers = $answerRepository->getAnswer();

      echo json_encode($answers); 
    }
}

