<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Ruang</h1>

    <form wire:submit.prevent="save" class="space-y-4">
       <flux:input
            type="text"
            id="kode"
            wire:model.defer="kode"
            label="Kode Ruang"
            placeholder="Masukkan Kode Ruang"
            required
            />

        <flux:input
            type="text"
            id="nama"
            wire:model.defer="nama"
            label="Nama Ruang"
            placeholder="Masukkan Nama Ruang"
            required
            />

        <flux:select
            id="status"
            wire:model.defer="status"
            label="Status Ruang"
            placeholder="Pilih Status Ruang"
            required
            >
            <flux:select.option value="Tersedia">Tersedia</flux:select.option>
            <flux:select.option value="Tidak Tersedia">Tidak Tersedia</flux:select.option>
            <flux:select.option value="Dibooking">Dibooking</flux:select.option>
            <flux:select.option value="Maintenance">Maintenance</flux:select.option>
        </flux:select>

        <flux:button
            type="submit"
            variant="primary"
            >
            Save
        </flux:button>
    </form>
</div>