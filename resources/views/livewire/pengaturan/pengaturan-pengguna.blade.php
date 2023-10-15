<div>
   
    <div class="py-3 flex">
        <h2 class="text-2xl font-extrabold dark:text-white">Manajemen Pengguna</h2>        

        <div class="mx-3">
            <a href="{{ route('user') }}" wire:navigate class="text-white bg-gray-500 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-md text-sm px-3 py-1 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" data-modal-hide="modal-ubah-pengeluaran">
                Atur Pengguna
            </a>
        </div>

       
    </div>  
    
    <h2 class="text-xl dark:text-white">Administrator ({{ $administrator }})</h2>

    <h2 class="text-xl dark:text-white">Manajer ({{ $manajer }})</h2>

    <h2 class="text-xl dark:text-white">Kasir ({{ $kasir }})</h2>

</div>
