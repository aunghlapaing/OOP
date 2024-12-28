<?php

class user{
    public $name, $address;

    public function _construct($name, $address){
        $this->name = $name;
        $this->address = $address;
    }
}
$newuser = new user('Aung Hla', 'Bangkok');

print_r($newuser);