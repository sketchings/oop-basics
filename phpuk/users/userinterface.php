<?php

interface UserInterface {
    public function getFormattedSalutation();
    public function getName();
    public function setName($name);
    public function getTitle();
    public function setTitle($title);
}