<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


    function User($name, $title) {
        $user['name'] = $name;
        $user['title'] = $title;
        return $user;
    }

    function Developer ($name, $title, $skills) {
        $user = User($name, $title);
        if (!is_array($skills)) {
            $skills = array($skills);
        }
        $user['skills'] = $skills;
        return $user;
        return $user;
    }
    
    function getSalutation($user) {
        $salutation = $user['title'] . " " . $user['name'];
        if (isset($user['skills'])) {
            $salutation .= ", Developer";
        }
        return $salutation;
    }
    
    function getSkillsString($user) {
        return implode(", ",$user['skills']);
    }

$user = User("Jane Smith","Ms");
//we can't set anything to know how to display default
echo $user;
//we CAN var_dump, access directly or use another function
var_dump($user);
$user['name'] = 'Sue';
echo getSalutation($user);
echo "<br />";

$developer1 = Developer("Jane Smith", "Ms","PHP");
echo getSalutation($developer1);
echo "<br />";
echo getSkillsString($developer1);
echo "<br />";

$developer2 = Developer("Jane Smith", "Ms", array("JavasScript", "HTML", "CSS"));
$developer2['skills'][] = "PHP";
echo getSalutation($developer2);
echo "<br />";
echo getSkillsString($developer2);