<?php

abstract class AbstractUser
{
    public $name;

    public function getName()
    {
        return $this->name;
    }

    public function getTitle()
    {
        return $this->title;
    }

    abstract public function setName($name);
    abstract protected function setTitle($title);
}