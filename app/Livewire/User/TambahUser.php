<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class TambahUser extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $type;
    public $password;

    public function render()
    {
        return view('livewire.user.tambah-user');
    }

    public function save(){

        $this->validate([
            'name' => 'required|string', 
            'email' => 'required|email|unique:users',
            'type' => 'required|string',
            'password' => 'required'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'type' => $this->type
        ]);

        $this->alert("success","User Berhasil dibuat");

        $this->reset();
    }
}
