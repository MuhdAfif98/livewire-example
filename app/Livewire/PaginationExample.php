<?php

namespace App\Livewire;

// Livewire Component (PaginationExample.php)

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class PaginationExample extends Component
{
    public function render()
    {
        // Fetch paginated data from the specified API endpoint
        $response = Http::get('https://api.publicapis.org/entries');
        $data = json_decode($response->body(), true);

        // Assuming you have a key in the API response that contains the paginated items
        $perPage = 10;
        $currentPage = request()->input('page', 1);
        $items = collect($data['entries']);

        // Manually slice the data based on the current page and items per page
        $pagedData = $items->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Create a LengthAwarePaginator instance
        $paginator = new LengthAwarePaginator($pagedData, $items->count(), $perPage, $currentPage);

        return view('livewire.pagination-example', ['items' => $paginator]);
    }
}
