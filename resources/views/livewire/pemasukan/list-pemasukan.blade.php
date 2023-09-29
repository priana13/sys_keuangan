<div class="pb-4">
    <div class="max-w-full">

        <div class="border-b-2 border-gray-400 py-3">
            <h2 class="text-4xl font-extrabold dark:text-white">Pemasukan</h2>
        </div>            

        <livewire:admin.card-over-view />

        <div class="mb-3 flex justify-between mt-8">

            <div>
                <a href="{{ route('pemasukan.tambah') }}" wire:navigate class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Tambah
                </a> 
            </div>
         

            <div class="flex">

                <div class="relative mr-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input wire:model="search" type="search" id="default-search" class="block ms-2 w-full px-7 pl-10 sm:text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
                    
                </div>


                <div class="mx-1">
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-900">
                                        
                        Import
                    </button>
                </div>
                
                <div class="mx-1">
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-900">                                    
                        Export CSV
                    </button>   

                </div>

            </div>

        </div>
        

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md border-1 border-gray-20 sm:rounded-lg p-4">
            
            <livewire:pemasukan.table-pemasukan />

        </div>
    </div>
</div>


