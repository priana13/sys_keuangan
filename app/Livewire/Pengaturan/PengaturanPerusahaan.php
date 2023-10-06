<?php

namespace App\Livewire\Pengaturan;

use App\Models\Setting;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PengaturanPerusahaan extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $logo;

    public $old_logo;
    
    public $nama_perusahaan;

    public $alamat;

    public function mount(){

        $this->nama_perusahaan = Setting::getData('nama_perusahaan')->value;
        $this->alamat = Setting::getData('alamat')->value;

        $this->old_logo = Setting::getData('logo')->value;

    }

    public function render()
    {
        return view('livewire.pengaturan.pengaturan-perusahaan');
    }

    public function simpan(){

        Setting::setData('nama_perusahaan', $this->nama_perusahaan);
        Setting::setData('alamat', $this->alamat);

        if($this->logo){

            $store_data = $this->logo->store('public');
            $path = explode('public/', $store_data);

            Setting::setData('logo', $path[1]);
            
        }


        // Notification
        $this->alert('success', "Data Berhasil Disimpan");
    }
}
