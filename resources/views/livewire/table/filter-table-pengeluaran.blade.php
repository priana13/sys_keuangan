<div class="mx-3 relative bg-gray-200"
x-data="{
    open:false,
}"
>
    <button type="button" class="flex" @click="open = ! open">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
        </svg>   
        <span class="mx-1">Filter</span> 
    </button>
           

    <div class="bg-gray-300 p-3 absolute w-[400px] z-10 shadow-md rounded-md" x-show="open">

        <form wire:submit="filter" class="" id="form-filter">

            <div class="my-3">
                <label for="kategori_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategory</label>
                <select wire:model="kategori_id" id="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Kategori</option>
                    @foreach($kategori as $row)
                    <option value="{{ $row->id }}">{{ $row->nama }}</option>
                    @endforeach
                    
                </select>

                @error('kategori_id') <span class="text-red-500">{{ $message }}</span> @enderror

            </div>


            <div class="mb-6">
                <label for="tanggal_awal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dari Tanggal</label>
                <input wire:model="tanggal_awal" type="date" id="tanggal_awal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <div class="mb-6">
                <label for="tanggal_akhir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sampai Tanggal</label>
                <input wire:model="tanggal_akhir" type="date" id="tanggal_akhir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            
            <div class="flex justify-end">

                <button @click="open = false" type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800 mr-2">Tutup</button>
                
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Filter</button>

            </div>

        </form>  
    

    </div>
    

</div>
