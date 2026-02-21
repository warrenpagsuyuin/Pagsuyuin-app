<?php

namespace App\Services;

class UserService
{
    protected array $users = [
        [
            'name' => 'John Doe',
            'gender' => 'Male',
        ],
        [
            'name' => 'Jane Doe',
            'gender' => 'Female',
        ],
    ];

    public function listUser(): array
    {
        return $this->users;
    }
}
