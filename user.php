<?php

class User {
    protected  $name;
    protected  $surname;
    protected  $email;
    protected  $password;

    public function getName() {
        return $this->name;
    }
    public function getSurname() {
        return $this->surname;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
}

class PremiumUser extends Product{
    protected $discount = 49;
}
