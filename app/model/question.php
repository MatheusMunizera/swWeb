<?php
class Question
{
    private $id_question;
    private $title;
    private $theme;
    private $id_user;
    private $text;


    function __construct($id_question, $title, $theme, $id_user, $text)
    {
        $this->id_question = $id_question;
        $this->title = $title;
        $this->theme = $theme;
        $this->id_user = $id_user;
        $this->text = $text;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function getIdQuestion()
    {
        return $this->id_question;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTheme()
    {
        return $this->theme;
    }

    public function setTheme($theme)
    {
        $this->theme = $theme;
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