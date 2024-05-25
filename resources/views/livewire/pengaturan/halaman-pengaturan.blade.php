<div class="pb-4" 
    x-data="{
        advance: false
    }"
>
    <div class="max-w-full">

        <div class="border-b-2 border-gray-400 py-3">
            <h2 class="text-4xl font-extrabold dark:text-white">Pengaturan</h2>
        </div>       
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" >
            {{-- pengaturan perusahaan --}}
            <livewire:pengaturan.pengaturan-perusahaan lazy />

            {{-- pengaturan pengguna --}}
            {{-- <livewire:pengaturan.pengaturan-pengguna lazy /> --}}

        </div>


        <div class="grid grid-cols-1 gap-4 mt-10" >

            {{-- kategori pemasukan --}}
            <livewire:pengaturan.kategori-pemasukan lazy />

            {{-- kategori pengeluaran --}}
            <livewire:pengaturan.kategori-pengeluaran lazy />

        </div>        

        <div class="mt-10 flex justify-center">

            {{-- kategori pengaturan kas --}}
            <livewire:pengaturan.pengaturan-kas lazy />           

        </div>

    </div>
</div>