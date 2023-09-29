<?php

namespace App\Livewire\Pajak;

use App\Models\Pajak;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ListPajak extends Component
{
    use LivewireAlert;
    
    public function render()
    {
        $data['list_pajak'] = Pajak::paginate(10);

        return view('livewire.pajak.list-pajak', $data);
    }

    public function delete($id){

        $pajak = Pajak::find($id);
        
        $pajak->delete();

        $this->alert('success', "Data Berhasil dihapus");
    }
}
