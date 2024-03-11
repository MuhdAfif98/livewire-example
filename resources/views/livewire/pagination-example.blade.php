<div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-4">Pagination</h2>
    <ul class="space-y-4">
        @foreach($items as $item)
            <li class="bg-gray-100 rounded-lg p-4">
                <h3 class="text-lg font-semibold">{{ $item['API'] }}</h3>
                <p class="text-gray-700">{{ $item['Description'] }}</p>
            </li>
        @endforeach
    </ul>

    <div class="mt-6">
        {{ $items->links('livewire::tailwind') }}
    </div>
</div>