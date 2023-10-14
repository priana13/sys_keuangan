<div class="px-6 py-6 lg:px-8 md:w-3/4">
    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
      Import Nota Bon
    </h3>
    <form wire:submit="import" class="space-y-6 card bg-white rounded shadow p-5" action="#">
       

        <div class="my-3">
            <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File Excel</label>
            <input wire:model="file" type="file" name="file" id="file" class=""> 
           
        </div>   

        @error('file') <span class="text-red-500">{{ $message }}</span> @enderror
       
        
      <div class="flex">

            <div class="mx-2">
                <a type="submit" href="{{ route('nota-bon') }}" wire:navigate class="w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Kembali</a>
            </div>

            <div class="mx-2">
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Import</button>
            </div>


        
        </div>  
        
        <p>Contoh File Import : <a href="{{ asset('format/import-nota-bon.xlsx') }}" class="text-blue-300">Lihat contoh file</a></p>

    </form>
</div>