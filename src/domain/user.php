<?php

namespace App\Domain;

class User {
    protected $alias;
    protected $email;

    public function GetAlias() {
        return $this->alias;
    }

    public function GetEmail() {
        return $this->email;
    }

    public function SetAlias($alias) {
        $this->alias = $alias;
        return $this;  // fluent setter
    }

    public function SetEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("invalid email address " . $email);
        }   
        $this->email = $email;
        return $this;
    }
}
