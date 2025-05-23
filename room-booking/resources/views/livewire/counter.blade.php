<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Counter</h1>
    <div class="flex items-center space-x-4">
        <button wire:click="increment" class="bg-blue-500 text-white px-4 py-2 rounded">Increment</button>
        <button wire:click="decrement" class="bg-red-500 text-white px-4 py-2 rounded">Decrement</button>
        <span class="text-xl">{{ $count }}</span>
    </div>
</div>
