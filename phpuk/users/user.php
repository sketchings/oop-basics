<?php
require 'userinterface.php';
require 'abstractuser.php';
require 'toolkit.php';

class User extends AbstractUser implements UserInterface
{
    use Toolkit;
    public $name;
    private $title;
    private $dob;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function getSalutation()
    {
        return $this->title. " " . $this->name;
    }

    public function getFormattedSalutation()
    {
        return $this->getSalutation();
    }

    public function getName()
    {
        return $this->name;
    }
}
