<?php

namespace App\Services;

class UserService
{
    protected array $users = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'gender' => 'Male',
        ],
        [
            'id' => 2,
            'name' => 'Jane Doe',
            'gender' => 'Female',
        ],
    ];

    public function listUser(): array
    {
        return $this->users;
    }
}
