<?php

namespace App\Infrastructure\Storage\User;

class RedisAdapter implements UserRepoPort {
    protected $redis;

    public function __construct() {
        $this->redis = new \Redis();
    }

    public function Read($id) {

    } 

    public function Remove($id) {

    }

    public function Write($user) {

    }
}
