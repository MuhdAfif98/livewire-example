<div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-4">Shopping Cart</h2>
    <ul class="space-y-4">
        @foreach ($cart as $item)
            <li class="bg-gray-100 rounded-lg p-4 flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-semibold">{{ $item['name'] }}</h3>
                    <p class="text-gray-700">${{ $item['price'] }}</p>
                </div>
                <button wire:click="removeFromCart({{ $item['id'] }})"
                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Remove</button>
            </li>
        @endforeach
    </ul>
    <div class="mt-6 flex justify-between items-center">
        <p class="text-xl font-bold">Total: ${{ $total }}</p>
        <form class="flex space-x-4 ms-24">
            <div>
                <label for="item-name" class="block text-sm font-medium text-gray-700">Item Name:</label>
                <input type="text" id="item-name" wire:model="itemName" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label for="item-price" class="block text-sm font-medium text-gray-700">Item Price:</label>
                <input type="number" id="item-price" wire:model="itemPrice" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button wire:click="addToCart" type="button"
                class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
        </form>
    </div>
</div>
