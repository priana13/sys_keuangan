<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditUser extends Component
{   
    use LivewireAlert;

    public $record;

    public $name;
    public $email;
    public $type;
    public $password;
    
    public function mount(User $record){

        if(auth()->user()->type != 'Administrator' && $record->type == 'Administrator'){
            abort(403);
        }

        $this->record = $record;

        $this->name = $record->name;
        $this->email = $record->email;
        $this->type = $record->type;       

    }
    public function render()
    {
        return view('livewire.user.edit-user');
    }

    public function save(){

        $this->validate([
            'name' => 'required|string', 
            'email' => 'required|email',
            'type' => 'required|string',           
        ]);

        $this->record->name = $this->name;
        $this->record->type = $this->type;

        if($this->password){

            $this->record->password = Hash::make($this->password);
        }

        $this->record->save();

        $this->alert('success', "Data Berhasil Diedit");
    }
}
