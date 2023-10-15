<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){

    return redirect()->route('login');

});

Route::middleware(['auth', 'verified'])->group(function(){

    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('pengeluaran', \App\Livewire\Pengeluaran\ListPengeluaran::class)->name('pengeluaran'); 
    Route::get('pengeluaran/tambah', \App\Livewire\Pengeluaran\TambahPengeluaran::class)->name('pengeluaran.tambah'); 
    Route::get('pengeluaran/{pengeluaran}/edit', \App\Livewire\Pengeluaran\EditPengeluaran::class)->name('pengeluaran.edit'); 
    Route::get('pengeluaran/import', \App\Livewire\Pengeluaran\ImportPengeluaran::class)->name('pengeluaran.import'); 

    Route::get('pemasukan', \App\Livewire\Pemasukan\ListPemasukan::class)->name('pemasukan');
    Route::get('pemasukan/tambah', \App\Livewire\Pemasukan\TambahPemasukan::class)->name('pemasukan.tambah'); 
    Route::get('pemasukan/{pemasukan}/edit', \App\Livewire\Pemasukan\EditPemasukan::class)->name('pemasukan.edit'); 
    Route::get('pemasukan/import', \App\Livewire\Pemasukan\HalamanImportPemasukan::class)->name('pemasukan.import'); 

    Route::get('nota-bon', \App\Livewire\NotaBon\ListNotaBon::class)->name('nota-bon')->lazy(enabled: true); 
    Route::get('nota-bon/tambah', \App\Livewire\NotaBon\TambahNotaBon::class)->name('nota-bon.tambah');   
    Route::get('nota-bon/{record}/edit', \App\Livewire\NotaBon\EditNotaBon::class)->name('nota-bon.edit');    
    Route::get('nota-bon/import', \App\Livewire\NotaBon\HalamanImportNotaBon::class)->name('nota-bon.import');    

    Route::get('laporan', \App\Livewire\Laporan\SemuaLaporan::class)->name('laporan');  
    Route::get('pajak', \App\Livewire\Pajak\ListPajak::class)->name('pajak');  
    Route::get('pajak/import', \App\Livewire\Pajak\HalamanImportPajak::class)->name('pajak.import');    

    Route::get('pengaturan', \App\Livewire\Pengaturan\HalamanPengaturan::class)->name('pengaturan')->lazy(enabled: true);   
    Route::get('closing-toko', \App\Livewire\Laporan\ClosingToko::class)->name('closing-toko');
    
    Route::get('user', \App\Livewire\User\ListUser::class)->name('user');  
    Route::get('user/tambah', \App\Livewire\User\TambahUser::class)->name('user.tambah');
    Route::get('user/{record}/edit', \App\Livewire\User\EditUser::class)->name('user.edit');  
   


});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
