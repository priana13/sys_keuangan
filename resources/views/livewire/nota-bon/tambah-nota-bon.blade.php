<div class="px-6 py-6 lg:px-8 md:w-3/4">
    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
      Tambah Nota Bon
    </h3>
    <form wire:submit="save" class="space-y-6 card bg-white rounded shadow p-5" action="#">
        <div class="my-3">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
            <input wire:model="tanggal" type="date" name="tanggal" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            @error('tanggal') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="my-3">
          <label for="total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">total</label>
          <input wire:model="total" type="number" name="total" id="total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="total">

          @error('total') <span class="text-red-500">{{ $message }}</span> @enderror
      </div>   

      <div class="my-3">
          <label for="kas_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Suplier</label>
          <input wire:model="nama_suplier" type="text" name="nama_suplier" id="nama_suplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="nama_suplier">

          @error('kas_id') <span class="text-red-500">{{ $message }}</span> @enderror

      </div>   
      
      <div class="my-3">
            <label for="kas_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Pembayaran</label>

            <div class="flex items-center mb-4">
                <input wire:model="status" value="Sudah Bayar" id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sudah Bayar</label>
            </div>
            <div class="flex items-center">
                <input wire:model="status" value="Belum Bayar" checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Belum Bayar</label>
            </div>
      </div>
        
        
      <div class="flex">

        <div class="mx-2">
            <a type="submit" href="{{ route('nota-bon') }}" wire:navigate class="w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Kembali</a>
        </div>

        <div class="mx-2">
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
        </div>
        
        </div>       
    </form>
</div>