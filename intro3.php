<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

interface UserInterface {
    public function getFormattedSalutation();
    public function getName();
    public function setName($name);
    public function getTitle();
    public function setTitle($title);
}

class User implements UserInterface {

    protected $name;
    protected $title;
    public $phone;
    public $email;

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

    public function getPhone() {
        return preg_replace('/(\d\d\d)(\d{3})(\d*)/','($1) $2-$3',$this->phone);
    }

    public function setPhone($phone) {
        $this->phone = preg_replace("/[^0-9]/", "", $phone);
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

    public function setExperience($company, $title, array $tasks, $start_date, $end_date = null) {
        $this->experience[] = new Experience($company, $title, $tasks, $start_date, $end_date);
    }

    public function getExperience($display_number = 10)
    {
        $string = "";
        $count = 0;

        foreach ($this->experience as $exp) {
            $count++;
            if ($count > $display_number){
                break;
            }
            $string .= $this->name . $exp->showExperience().'<br />';
        }
        return $string;
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

class Experience {
    public $company;
    public $title;
    public $tasks = array();
    public $start_date;
    public $end_date;

    public function showExperience() {
        $string = ' worked at ' . $this->company;
        $string .= ' as ' . $this->title;
        $string .= ' from ' . formatDate($this->start_date) . ' to ' . formatDate($this->end_date);
        return $string;
    }

    public function __construct($company, $title, array $tasks, $start_date, $end_date = null) {
        $this->addItem($company, $title, $tasks, $start_date, $end_date);
    }

    public function addItem($company, $title, array $tasks, $start_date, $end_date = null) {
        $this->company = $company;
        $this->title = $title;
        $this->tasks = $tasks;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }
}


function formatDate($date) {
    if (empty($date)) {
        return 'Present';
    }
    return date('m/d/Y', strtotime($date));
}

class Resume {
    public $template;
    public $user;

    public function __construct(User $user, $template = "default") {
        $this->user = $user;
        $this->template = $template;
    }

    public function formatHTML() {
        $string = "<table style='width:800px'><tr><td>".$this->user->getName()."</td>";
        $string .= "<td style='text-align: right;'>".$this->user->getPhone()."</td></tr>";
        foreach ($this->user->experience as $experience) {
            $string .= "<tr><td><strong>" . $experience->company . "</strong><br />".$experience->title."</td>";
            $string .= "<td style='text-align: right;'>" . $this->formatDate($experience->start_date);
            $string .= " - " . $this->formatDate($experience->end_date) . "</td></tr>";
            $string .= "<tr><td colspan='2'><ul><li>";
            $string .= implode("</li><li>",$experience->tasks);
            $string .= "</li></ul></td></tr>";
        }
        $string .= "</table>";
        return $string;
    }

    public function formatDate($date) {
        if (empty($date)) {
            return 'Present';
        }
        return date('d F Y', strtotime($date));
    }
}

$user = new User("Jane Smith","Ms");
echo $user;
echo "<br />";

$developer = new Developer("Jane Smith", "Ms");
$developer->setPhone('928-486-5172');
echo $developer;
echo "<br />";
$developer->skills = array("JavasScript", "HTML", "CSS");
$developer->skills[] = "PHP";
$developer->getSkillsString();
echo "<br />";

$tasks[0][] = "Implemented a continuing program of research in the laboratory and in the field";
$tasks[0][] = "";

$tasks[1][] = "";
$tasks[1][] = "Multi-tasking in a high pressure environment";


$tasks[2][] = "Working for my Masters with 3 credits";
$tasks[2][] = "Managed the dismantling of one facility and transporting and reassembly of all equipment to new location";

$developer->setExperience('Child Development and Human Relations', 'Research Associate', $tasks[0], '2011-06-16','2012-12-13');
$developer->setExperience('Child Development and Human Relations', 'SR Research Associate', $tasks[1], '2012-12-13', '2014-02-12');
$developer->setExperience('Child Development and Human Relations', 'SR Research Associate', $tasks[2], '2014-02-12');
echo $developer->getExperience(1);

$resume = new Resume($developer);
echo $resume->formatHTML();

//$experience = new Experience();
//var_dump($experience);