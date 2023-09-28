<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function(){

    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('pengeluaran', \App\Livewire\Pengeluaran\ListPengeluaran::class)->name('pengeluaran'); 
    Route::get('pengeluaran/{id}/edit', \App\Livewire\Pengeluaran\EditPengeluaran::class)->name('pengeluaran.edit'); 

    

    Route::get('pemasukan', \App\Livewire\Pemasukan\ListPemasukan::class)->name('pemasukan');
    Route::get('nota-bon', \App\Livewire\NotaBon\ListNotaBon::class)->name('nota-bon');    
    Route::get('laporan', \App\Livewire\Laporan\SemuaLaporan::class)->name('laporan');  
    Route::get('pajak', \App\Livewire\Pajak\ListPajak::class)->name('pajak');  
    Route::get('pengaturan', \App\Livewire\Pengaturan::class)->name('pengaturan');   
    Route::get('closing-toko', \App\Livewire\Laporan\ClosingToko::class)->name('closing-toko');    
 
  
  


});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
