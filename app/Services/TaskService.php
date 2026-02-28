<?php

namespace App\Services;

class TaskService
{
    private array $tasks = [];

    public function add(string $name)
    {
        $this->tasks[] = $name;
        return $this->tasks;
    }

    public function getAllTasks(): array
    {
        return $this->tasks;
    }
}