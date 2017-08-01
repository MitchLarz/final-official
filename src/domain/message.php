<?php

namespace App\Domain;

class Message {
    protected $body;

    public function GetBody() {
        return $this->body;
    }

    public function SetBody($body) {
        $this->body = $body;
        return $this;
    }
}
