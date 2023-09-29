<div class="pb-4">
    <div class="max-w-full">

        <div class="border-b-2 border-gray-400 py-3">
            <h2 class="text-4xl font-extrabold dark:text-white">Pemasukan</h2>
        </div>            

        <livewire:admin.card-over-view />

        <div class="mb-3 flex justify-between mt-8">

            <a href="{{ route('pemasukan.tambah') }}" wire:navigate class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    
                Tambah
            </a>

            <div>
                <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-900">
                                    
                    Import
                </button>
                
                <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-900">
                                    
                    Export CSV
                </button>

            </div>

        </div>
        

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md border-1 border-gray-20 sm:rounded-lg p-4">
            
            <livewire:pemasukan.table-pemasukan />

        </div>
    </div>
</div>


