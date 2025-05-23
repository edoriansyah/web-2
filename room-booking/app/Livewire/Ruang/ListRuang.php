<?php

namespace App\Livewire\Ruang;

use App\Models\Ruang;
use Livewire\Component;

class ListRuang extends Component
{
    public function delete($id)
    {
        $ruang = Ruang::find($id);
        if ($ruang) {
            $ruang->delete();
            session()->flash('message', 'Ruang berhasil dihapus.');
        }
    }

    public function render()
    {
        return view('livewire.ruang.list-ruang', [
            'ruangs' => Ruang::all(),
        ]);
    }
}
