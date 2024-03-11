<?php

namespace App\Livewire;

use Livewire\Component;

class ToDoList extends Component
{
    public $tasks = ['Task 1', 'Task 2', 'Task 3'];
    public $newTask;

    public function addTask()
    {
        // Add the new task
        $this->tasks[] = $this->newTask;

        // Clear the input field
        $this->newTask = '';
    }

    public function render()
    {
        return view('livewire.to-do-list');
    }
}
