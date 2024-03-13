<div class="max-w-3xl p-6 mx-auto bg-white rounded-lg shadow-md">
    <h2 class="mb-4 text-2xl font-bold">Pagination</h2>
    <ul class="space-y-4">
        @foreach($items as $item)
            <li class="p-4 bg-gray-100 rounded-lg">
                <h3 class="text-lg font-semibold">{{ $item['name'] }}</h3>
                <p class="text-gray-700">{{ $item['description'] }}</p>
            </li>
        @endforeach
    </ul>

    <div class="mt-6">
        {{ $items->links('livewire::tailwind') }}
    </div>
</div>