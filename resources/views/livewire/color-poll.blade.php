<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Favorite Color Poll</h2>

    <!-- Show color options -->
    <ul class="space-y-2">
        @foreach($colors as $color)
        <li class="flex items-center justify-between">
            <span>{{ $color['name'] }}</span>
            <button wire:click="vote('{{ $color['id'] }}')"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Vote</button>
        </li>
        @endforeach
    </ul>

    <!-- Show results -->
    <h3 class="text-xl font-bold mt-6 mb-2">Results:</h3>
    <ul class="space-y-2">
        @foreach($results as $result)
        <li class="bg-gray-200 p-2 rounded">
            <div class="flex items-center justify-between">
                <span>{{ $result['name'] }}</span>
                <span class="font-bold">{{ $result['votes'] }} votes</span>
            </div>
        </li>
        @endforeach
    </ul>
</div>