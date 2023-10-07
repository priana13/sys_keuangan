<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListUser extends Component
{
    use LivewireAlert;

    public $search;

    public $selected_id;

    protected $listeners = [
        'confirmed'
    ];

    public function mount(){

        // if(auth()->user()->type != 'Administrator'){
        //     abort(403);
        // }

    }

    public function render()
    {
        if(auth()->user()->type == 'Administrator'){

            $users = User::latest();

        }else{

            $users = User::where('type', '!=', 'Administrator')->latest();

        }        


        if($this->search){          

            $users->where('name', 'like' , '%' . $this->search . '%');
        }

        $data['users'] = $users->paginate(10);       

        return view('livewire.user.list-user', $data);
    }

    public function delete($id){

        $this->selected_id = $id;  

        $this->alert('warning', 'Yakin ingin dihapus?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Hapus',
            'showCancelButton' => true,
            'confirmButtonColor' => '#ed4e73',
            'cancelButtonText' => 'Cancel',
            'toast' => false,
            'position' => 'center',
            'onConfirmed' => 'confirmed',
            'timer' => null
        ]); 

    }

    public function confirmed()
    {
        $record = User::findOrFail($this->selected_id);

        $record->delete();

        $this->alert('success', "Data Berhasil Dihapus");
    }

}
