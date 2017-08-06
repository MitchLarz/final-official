<?php

namespace App\Domain;

class Message {
    protected $body;
    protected $userEmail;

    public function __construct($user, $body) {
        if (!filter_var($user, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("invalid email");
        }
        $this->userEmail = $user;
        $this->body = $body;
    }

    public function GetBody() {
        return $this->body;
    }

    public function GetUser() {
        return $this->userEmail;
    }
}
