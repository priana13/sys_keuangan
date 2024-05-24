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


        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-10" >

            {{-- kategori pemasukan --}}
            <livewire:pengaturan.kategori-pemasukan lazy />

            {{-- kategori pengeluaran --}}
            <livewire:pengaturan.kategori-pengeluaran lazy />

        </div>        

        <div class="mt-10 flex justify-center" x-show="advance">

            {{-- kategori pengaturan kas --}}
            <livewire:pengaturan.pengaturan-kas lazy />           

        </div>

        <div class="flex justify-center my-3">

            <button @click="advance = ! advance" type="button" class="py-2.5 px-5 mx-auto mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Advance
            </button>

        </div>

    </div>
</div>