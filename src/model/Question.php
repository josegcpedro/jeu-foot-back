<?php

namespace Gri\BaloonGame\Model;

class Question {
    private $id;

    private $question;

    public function __construct()
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function setId($id): Question
    {
        $this->id = $id;

        return $this;
    }

    public function setQuestion($question): Question
    {
        $this->question = $question;

        return $this;
    }
}
