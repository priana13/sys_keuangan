<div class="px-6 py-6 lg:px-8 md:w-3/4">
    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
      Tambah User Baru
    </h3>
    <form wire:submit="save" class="space-y-6 card bg-white rounded shadow p-5" action="#">
        <div class="my-3">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input wire:model="name" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama" required>
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="my-3">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
          <input wire:model="email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email">

          @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
      </div>

      <div class="my-3">
          <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peran</label>
          <select wire:model="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>Pilih Peran</option>
              <option value="Administrator">Administrator</option>
              <option value="Manajer">Manajer</option>
              <option value="Kasir">Kasir</option>           
             
          </select>

          @error('type') <span class="text-red-500">{{ $message }}</span> @enderror

      </div>


      <div class="my-3">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
          <input wire:model="password" id="password" type="password" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password...">

          @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
      </div>
        
        
      <div class="flex">

        <div class="mx-2">
            <a type="submit" href="{{ route('user') }}" wire:navigate class="w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Kembali</a>
        </div>

        <div class="mx-2">
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
        </div>
        
        </div>       
    </form>
</div>