<?php

namespace Gri\Baloongame\Repository;

use Gri\Baloongame\Config\DataBase;
use PDO;

class AnswerRepository
{
    public function getAnswer()
    {
        $pdo = DataBase::getInstance();
       
        $sql = "SELECT Response FROM answer";

        $result = $pdo->prepare($sql);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC); 
    }
}
