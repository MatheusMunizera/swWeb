<?php
class Answer
{
    private $id;
    private $id_question;
    private $text;


    function __construct($id, $id_question, $text)
    {
        $this->id = $id;
        $this->id_question = $id_question;
        $this->text = $text;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIdQuestion()
    {
        return $this->id_question;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}