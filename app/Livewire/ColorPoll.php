<?php

namespace App\Livewire;

use Livewire\Component;

class ColorPoll extends Component
{
    public $colors = [
        ['id' => 1, 'name' => 'Red', 'votes' => 0],
        ['id' => 2, 'name' => 'Blue', 'votes' => 0],
        ['id' => 3, 'name' => 'Green', 'votes' => 0],
    ];

    public $results = [];

    public function vote($colorId)
    {
        // Simulate voting logic
        foreach ($this->colors as &$color) { // Use &$color to update the original array
            if ($color['id'] == $colorId) {
                $color['votes']++;
            }
        }

        // Sort results by votes
        $this->results = collect($this->colors)->sortByDesc('votes')->toArray();
    }

    public function render()
    {
        return view('livewire.color-poll');
    }
}