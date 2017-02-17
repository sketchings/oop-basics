<?php
require 'pretty.php';
require 'users/user.php';
require 'users/developer.php';

$user = new User();
$user->name = 'Jane Smith';
//$user->title = 'mr';
$user->setTitle('ms');
$user->setDob('January 2, 2018');
echo $user->getSalutation();
echo "<br />\n";
echo $user->getDob();
echo "<br />\n";

$james = new Developer();
$james->name = 'James Titcomb';
echo $james->getSalutation();
echo "<br />\n";
$james->setSkills(['Beard Growing', 'Zend Framework', 'PHP']);
echo $james->getSkillsString();
$james->setTools('eat');
echo $james->showTools();
