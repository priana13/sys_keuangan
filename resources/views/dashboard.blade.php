<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Welcome Admin
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-full">

            <div class="my-3 flex justify-end">

                <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                      
                    Tambah
                </button>

            </div>
          

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               
                <livewire:admin.simple-table />

            </div>
        </div>
    </div>
</x-app-layout>
