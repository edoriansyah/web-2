<div class="container mx-auto">
    @if (session('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold mb-4">List Ruang</h1>

    <div class="flex justify-between mb-4">
        <flux:button :href="route('ruang.create')" variant="primary">New Ruang</flux:button>
    </div>

    <table class="min-w-full border-collapse border border-gray-400 mt-4">
        <thead>
            <tr class="text-left bg-gray-100">
                <th class="py-2 px-4 border border-gray-300">ID</th>
                <th class="py-2 px-4 border border-gray-300">Kode</th>
                <th class="py-2 px-4 border border-gray-300">Nama</th>
                <th class="py-2 px-4 border border-gray-300">Status</th>
                <th class="py-2 px-4 border border-gray-300">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangs as $ruang)
                <tr>
                    <td class="py-2 px-4 border border-gray-300">{{ $ruang->id }}</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $ruang->kode }}</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $ruang->nama }}</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $ruang->status }}</td>
                    <td class="py-2 px-4 border border-gray-300">
                        <!-- Add your action buttons here -->
                        <flux:button :href="route('ruang.edit', $ruang)">Edit</flux:button>
                        <flux:button variant="danger" wire:click="delete({{ $ruang->id }})" wire:confirm="Are you sure?">Delete</flux:button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
