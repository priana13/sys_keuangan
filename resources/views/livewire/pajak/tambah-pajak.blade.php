
 <!-- drawer component -->
 <div id="tambah-pajak" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
     <h5 id="drawer-right-label" class="mb-4 text-xl font-medium text-gray-900 dark:text-white">        
        Input Pajak
     </h5>
    <button type="button" data-drawer-hide="tambah-pajak" aria-controls="tambah-pajak" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
       </svg>
       <span class="sr-only">Close menu</span>
    </button>

    {{-- body --}}
    <form wire:submit="save" >

        <div class="my-3">
            <label for="bulan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan</label>
            <input wire:model="bulan" type="month" name="bulan" id="bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            @error('bulan') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="my-3">
            <label for="Jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
            <input wire:model="jumlah" type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            @error('jumlah') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>


        <div class="grid grid-cols-2 gap-4">
            <button href="#" class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            data-drawer-hide="tambah-pajak"
            >
             Tutup
         </button>
         <button type="submit" class="px-4 py-2 text-sm font-medium text-center text-white bg-gray-800 border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-900 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
          Simpan
         </button>    


    </form>
    {{-- end body --}}    


    </div>
 </div>
 