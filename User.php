<?php
require 'Preference.php';

class User{
    public $username;
    public $preferences;

    public function __construct($username) {
        $this -> username = $username;
        $this -> preferences = array();
    }

    public function addPreference($pref){
        array_push($this -> preferences,$pref);
    }

    public function getPreference($key){
        foreach ($this -> preferences as $index => $value) {
            if($value -> key === $key){
                return $value;
            }
        }

        return null;
    }
}