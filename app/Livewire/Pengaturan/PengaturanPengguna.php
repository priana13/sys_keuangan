<?php

namespace App\Livewire\Pengaturan;

use App\Models\User;
use Livewire\Component;

class PengaturanPengguna extends Component
{
    public function render()
    {
        $data['administrator'] = User::administrator()->count();
        $data['manajer'] = User::manajer()->count();
        $data['kasir'] = User::kasir()->count();

        return view('livewire.pengaturan.pengaturan-pengguna', $data);
    }
}
