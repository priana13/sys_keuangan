<div class="px-6 py-6 lg:px-8">
    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
      Edit Pengeluaran 
    </h3>
    <form class="space-y-6" action="#">
        <div class="my-3">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
            <input wire:model="tanggal" type="text" name="tanggal" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Keterangan" required>
        </div>

        <div class="my-3">
          <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
          <input wire:model="nominal" type="number" name="nominal" id="nominal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Keterangan" required>
      </div>

      <div class="my-3">
          <label for="kategori_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
          <select wire:model="kategori_id" id="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Pilih Kategori</option>
              @foreach($kategori as $row)
              <option value="{{ $row->id }}">{{ $row->nama }}</option>
              @endforeach
             
          </select>

      </div>

      <div class="my-3">
          <label for="kas_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kas</label>
          <select wire:model="kas_id" id="kas_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Pilih Kas</option>
              @foreach($kas as $ks)

              <option value="{{ $ks->id }}">{{ $ks->nama }}</option>

              @endforeach
             
          </select>

      </div>
   


      <div class="my-3">
          <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
          <textarea wire:model="keterangan" id="keterangan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Keterangan..."></textarea>

         
      </div>
        
        <div class="flex">
            <div class="mx-2">
                <a type="submit" href="{{ route('pengeluaran') }}" wire:navigate class="w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" data-modal-hide="modal-ubah-pengeluaran">Kembali</a>
            </div>

            <div class="mx-2">
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-modal-hide="modal-ubah-pengeluaran">Update</button>
            </div>  
            
        </div>
       
    </form>
</div>