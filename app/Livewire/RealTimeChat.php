<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class RealTimeChat extends Component
{
    use \Livewire\WithPagination;

    public $messages = [];
    public $newMessage = '';

    public function sendMessage()
    {
        $this->messages[] = $this->newMessage;
        $this->newMessage = '';

        $this->dispatch('new-message', ['message' => $this->newMessage]);
    }

    public function render()
    {
        return view('livewire.real-time-chat');
    }
}