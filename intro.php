<?php
class User {
	
    protected $name;
    protected $title;
    
    public function __construct($name, $title) {
        $this->name = $name;
        $this->title = $title;
    }

    public function __toString() {
        return $this->getFormattedSalutation();
    }
    
    public function getFormattedSalutation() {
        return $this->getSalutation();
    }
    
    protected function getSalutation() {
        return $this->title . " " . $this->name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
}

class Developer extends User {
    public $skills = array();
    
    public function getSalutation() {
        return $this->title . " " . $this->name.", Developer";
    }
    
    public function getSkillsString() {
        echo implode(", ",$this->skills);
    }
}

$user = new User("Jane Doe","Ms");
echo $user;
echo "<br />";

$developer = new Developer("Jane Doe", "Ms");
echo $developer;
echo "<br />";
$developer->skills = array("JavasScript", "HTML", "CSS");
$developer->skills[] = "PHP";
$developer->getSkillsString();