<?php

namespace App\Domain;

class ChatRoom {
    protected $members;
    protected $messages;
    protected $name;
    protected $topic;

    public function Name() {
        return $this->name;
    }

    public function SetName($name) {
        $this->name = $name;
        return $this;
    }

    public function GetTopic() {
        return $this->topic;
    }

    public function SetTopic($topic) {
        $this->topic = $topic;
        return $this;  // for fluent setters
    }

    public function Join($mem) {
        $this->members[] = $mem;
        return $this; // for fluent setters
    }

    public function Leave($mem) {
        foreach ($this->members as $member) {
            if ($mem->GetEmail() === $member->GetEmail()) {
                unset($member); // may not work in PHP 7.1, unit-test will tell us
                return true;
            }
        }
        return false;
    }

    public function Members() {
        return $this->members;
    }
}
