<?php

namespace App\Infrastructure\Storage\User;

use App\Domain\User;

interface UserRepoPort {
    public function Read($id); 
    public function Remove($id);
    public function Write($user);
}
