<?php

namespace App\Livewire\Ruang;

use App\Models\Ruang;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateRuang extends Component
{
    #[Validate('required|string|max:10')]
    public string $kode = '';

    #[Validate('required|string|max:100')]
    public $nama = '';

    #[Validate('required|string|max:50')]
    public $status = '';

    public function save()
    {
        $this->validate();

        Ruang::create([
            'kode' => $this->kode,
            'nama' => $this->nama,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Ruang berhasil ditambahkan.');

        // Reset the form fields
        $this->redirectRoute('ruang.index');
    }

    public function render()
    {
        return view('livewire.ruang.create-ruang');
    }
}
