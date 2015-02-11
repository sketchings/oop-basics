<?php

class Developer extends User {
	public $skills = array();
    
    public function __construct($name, $title, $skills = array()) {
        $this->name = $name;
        $this->title = $title;
        $this->skills = $skills;
    }
    
    public function getSalutation() {
        return $this->title . " " . $this->name. ", Developer";
    }
	
	public function getSkillsList() {
		$this->skills = array_unique($this->skills);
		echo "<ul><li>";
        echo implode("</li><li>",$this->skills);
        echo "</li></ul>";
    }
	
	public function getSkillsString() {
		$this->skills = array_unique($this->skills);
		echo implode(", ",$this->skills);
    }
    
    public function setSkill($skill) {
    	$this->skills[] = $skill;
    }
    
    public function setSkills(array $skills) {
    	$this->skills = array_merge($this->skills, $skills);
    }
    
    public function setSkillSet($type) {
    	if ($type === "sysadmin") {
	    	$add = array("Linus","shell scripting", "AWS", "Rackspace", "Nagios", "Gearman", "Redis", "Elasticsearch", "Varnish", "Memcached", "APC / OpCache");
	    	$this->skills = array_merge($this->skills, $add);
    		$this->skills = array_merge($this->skills, $add);
    	} else if ($type === "webdev") {
    		$add = array("Git", "Mercurial", "SVN", "VirtualBox", "Vagrant", "Docker");
    		$this->skills = array_merge($this->skills, $add);
    	} else if ($type === "backend") {
			$add = array("Apache", "Nginx", "PHP", "NodeJS", "Ruby", "MySQL", "MongoDB", "Cassandra", "Redis", "SQL / JSON in general");
    		$this->skills = array_merge($this->skills, $add);
    	} else if ($type === "frontend") {
			$add = array("HTML5", "LESS", "SASS", "Media Queries", "jQuery", "AngularJS", "Knockout", "Responsive design", "AJAX", "JSON", "XML", "WebSocket");
			$this->skills = array_merge($this->skills, $add);
    	} else if ($type === "design") {
			$add = array("UI", "UX");
    		$this->skills = array_merge($this->skills, $add);
    	} else if ($type === "mobile") {
			$add = array("iOS", "Android", "PhoneGap", "Appcelerator");
    		$this->skills = array_merge($this->skills, $add);
    	} else if ($type === "fullstack") {
    		$this->setSkillSet("sysadmin");
    		$this->setSkillSet("webdev");
    		$this->setSkillSet("backend");
    		$this->setSkillSet("frontend");
    		$this->setSkillSet("design");
    		$this->setSkillSet("mobile");
    	}
			
    }
}