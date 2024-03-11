<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">My To-Do List</h2>
    <ul class="space-y-2">
        @foreach ($tasks as $task)
            <li class="bg-gray-200 p-2 rounded">{{ $task }}</li>
        @endforeach
    </ul>
    <div class="mt-4 flex">
        <input wire:model="newTask" type="text" placeholder="Add a new task"
            class="flex-grow border rounded-l px-3 py-2">
        <button wire:click="addTask"
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r">Add Task</button>
    </div>
</div>