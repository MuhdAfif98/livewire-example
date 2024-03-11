<div class="flex flex-col max-w-md mx-auto bg-white shadow-xl rounded-lg h-full">
    <div class="flex-grow overflow-y-auto p-4" id="chat-window">
        <div class="flex flex-col space-y-3">
            @foreach ($messages as $message)
                <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg ml-auto max-w-xs">
                    <p class="text-sm">{{ $message }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-4 bg-gray-300 p-4 flex items-center">
        <input class="flex-grow h-10 rounded-l px-3 text-sm" type="text" placeholder="Type your message…" wire:model="newMessage">
        <button wire:click="sendMessage" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded-r flex items-center">
            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
            </svg>
            <span class="ml-2">Send</span>
        </button>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('new-message', event => {
            const chatWindow = document.getElementById('chat-window');
            chatWindow.scrollTop = chatWindow.scrollHeight;
        });
    </script>
@endpush