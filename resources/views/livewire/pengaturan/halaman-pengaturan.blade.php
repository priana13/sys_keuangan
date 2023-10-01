<div class="pb-4">
    <div class="max-w-full">

        <div class="border-b-2 border-gray-400 py-3">
            <h2 class="text-4xl font-extrabold dark:text-white">Pengaturan</h2>
        </div>       
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" >
            {{-- pengaturan perusahaan --}}
            <livewire:pengaturan.pengaturan-perusahaan />

            {{-- pengaturan pengguna --}}
            <livewire:pengaturan.pengaturan-pengguna />

        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-10" >

            {{-- kategori pemasukan --}}
            <livewire:pengaturan.kategori-pemasukan />

            {{-- kategori pengeluaran --}}
            <livewire:pengaturan.kategori-pengeluaran />

        </div>

    </div>
</div>