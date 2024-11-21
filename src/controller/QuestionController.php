<?php

namespace Gri\Baloongame\Controller;

use Gri\Baloongame\Repository\QuestionRepository;

class QuestionController
{
    public function showQuestions()
    {
      $questionRepository = new QuestionRepository();
      $questions = $questionRepository->getQuestions();

      echo json_encode($questions); 
    }
}

