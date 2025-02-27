<?php

namespace App\Interfaces;

interface TaskRepositoriesInterface
{
    public function getAllTasks($search, $perPage);
    public function createTask(array $data);
    public function updateTask(array $data, $taskId);
    public function deleteTask($taskId);
}
