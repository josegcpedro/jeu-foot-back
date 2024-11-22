<?php

namespace Gri\Baloongame\Repository;

use Gri\Baloongame\Config\DataBase;
use PDO;

class QuestionRepository
{
    public function getQuestions()
    {
        
        $pdo = DataBase::getInstance();
       
        $sql = "SELECT * FROM question";

        $result = $pdo->prepare($sql);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC); 

    }
}
