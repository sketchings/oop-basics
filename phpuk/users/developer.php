<?php

class Developer extends User
{
    public $skills = array();

    public function getSkills()
    {
        return $this->skills;
    }

    public function getSkillsString()
    {
        return implode(', ', $this->skills);
    }

    public function setSkills(Array $skills)
    {
        $this->skills = $skills;
        return $this;
    }

    public function addSkill(String $skill)
    {
        $this->skills[] = $skill;
        return $this;
    }
}