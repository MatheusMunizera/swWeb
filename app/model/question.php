<?php
class Question
{
    private $id;
    private $title;
    private $theme;
    private $text;


    function __construct($id, $title, $theme, $text)
    {
        $this->id = $id;
        $this->title = $title;
        $this->theme = $theme;
        $this->text = $text;
    }

    public function getId()
    {
        return $this->id;
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