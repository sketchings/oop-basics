<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//include 'classes/user.php';
include 'classes/abstractUser.php';

class Developer extends \myAbstractUser\User {
    public $skills = array();
    
    public function getSalutation() {
        return $this->title . " " . $this->name.", Developer";
    }
    
    public function getSkillsString() {
        echo implode(", ",$this->skills);
    }
}

$developer = new Developer("Jane Smith", "Ms");
echo $developer;
echo "<br />";
$developer->skills = array("JavasScript", "HTML", "CSS");
$developer->skills[] = "PHP";
$developer->getSkillsString();