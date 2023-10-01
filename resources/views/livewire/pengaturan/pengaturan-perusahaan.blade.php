<div>
   
    <div class="py-3">
        <h2 class="text-2xl font-extrabold dark:text-white">Informasi Perusahaan</h2>
    </div>  

    <div class="flex">
        {{-- logo --}}
        <div class="mr-5">
            <img src="" alt="">
            <button>Upload</button>
        </div>

        <div class="ms-5">

            <div class="my-2">
                <input wire:model="nama_perusahaan" type="text" name="nama_perusahaan" id="nama_perusahaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Perusahaan">
                @error('nama_perusahaan') <span class="text-red-500">{{ $message }}</span> @enderror
            </div> 

            <div class="my-2">
                <input wire:model="alamat" type="text" name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Alamat">
                @error('alamat') <span class="text-red-500">{{ $message }}</span> @enderror
            </div> 

            
                  
                <div class="col-span-3 flex justify-end">
                    <div>
                        <button type="submit" class="text-gray-800 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-md text-sm px-3 py-1 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" data-modal-hide="modal-ubah-pengeluaran">Submit</button>
                    </div>
                    
                </div>
                
             


        </div>

    </div>

</div>
