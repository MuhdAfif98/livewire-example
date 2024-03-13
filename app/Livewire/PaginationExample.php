<?php

namespace App\Livewire;

// Livewire Component (PaginationExample.php)

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class PaginationExample extends Component
{
    public $events;

    public function render()
    {
        $items = Event::paginate(10);

        return view('livewire.pagination-example', ['items' => $items]);
    }
}
