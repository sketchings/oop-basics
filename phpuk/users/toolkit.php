<?php

trait Toolkit
{
    private $tools = array();

    public function setTools($task)
    {
        switch ($task) {
            case "eat":
                $this->tools[] = "Spoon";
                $this->tools[] = "Fork";
                $this->tools[] = "Knife";
                break;
        }
        return $this;
    }

    public function getTools()
    {
        return $this->tools;
    }

    public function showTools()
    {
        return implode(", ", $this->tools);
    }
}