<div>
    {{-- In work, do what you enjoy. --}}
    

    <div class="mb-3 flex justify-between mt-8">

        <div class="flex items-center">
            {{-- tambah dengan single page --}}  
            
            
            <div class="mx-1">
                <a href="{{ route('pemasukan.import') }}" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-900">
                                    
                    Import
                </a>
            </div>
            
            <div class="mx-1">
                <button wire:click="export" type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-900">                                    
                    Export CSV
                </button>   

            </div>


            @livewire('table.filter-table-pemasukan')

        </div>
     

        <div class="flex">

            <div class="relative mr-4">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input wire:model.live="search" type="search" id="default-search" class="block ms-2 w-full px-7 pl-10 sm:text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
                
            </div>

            <a x-show="false" href="{{ route('pemasukan.tambah') }}" wire:navigate class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Tambah
            </a> 

            <div class="mx-1">

                <button           
                wire:click="tambah()"
                class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-900"
                >
                 Tambah
                </button>

            </div>

           

        </div>

    </div>
    

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md border-1 border-gray-20 sm:rounded-lg p-4">
        
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cash
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Debit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
    
                   @foreach($transaksi as $row)
                   
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ date('d M Y', strtotime($row->tanggal)) }}
                        </th>
                        <td class="px-6 py-4">

                           {{ ($row->kas->type == 'Cash')? number_format($row->nominal ,0,',','.'):0 }} 

                        </td>
                        <td class="px-6 py-4">
                            {{ ($row->kas->type != 'Cash')?number_format($row->nominal ,0,',','.'):0 }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $row->kategori->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($row->nominal ,0,',','.') }}
                        </td>
                        <td>
    
                            <div class="flex items-center space-x-3.5">
                                <button                           
                                {{-- href="{{ route('pemasukan.edit', $row->id) }}"--}}
                                wire:click="edit({{ $row->id }})"
                                type = "button"
                                class="hover:text-primary"
                                id="edit{{ $row->id }}"                               
                                >
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                  </svg>
                                  
                                </button>
                                <button wire:click="delete({{ $row->id }})" wire:key="delete-{{ $row->id }}" class="hover:text-primary">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>
                                  
                                </button>
                                
                            </div>
                            
                        </td>
                    </tr>
    
                    @endforeach
    
                </tbody>
            </table>
        </div>
    
        <div class="my-3">
            {{ $transaksi->links() }}
        </div>

    </div>
    
    <x-modal.modal-form>
        <div>
             <h2 class="text-2xl font-semibold mb-4">Formulir Input</h2>           
 
             <form wire:submit.prevent="{{ $modalType }}" class="space-y-6 card bg-white rounded shadow p-5" action="#">
                 <div class="my-3">
                     <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                     <input wire:model="tanggal" type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                     @error('tanggal') <span class="text-red-500">{{ $message }}</span> @enderror
                 </div>
         
                 <div class="my-3">
                   <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                   <input wire:model="nominal" type="number" name="nominal" id="nominal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nominal">
         
                   @error('nominal') <span class="text-red-500">{{ $message }}</span> @enderror
               </div>
         
               <div class="my-3">
                   <label for="kategori_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                   <select wire:model="kategori_id" id="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                       <option selected>Pilih Kategori</option>
                       @foreach($kategori as $row)
                       <option value="{{ $row->id }}">{{ $row->nama }}</option>
                       @endforeach
                      
                   </select>
         
                   @error('kategori_id') <span class="text-red-500">{{ $message }}</span> @enderror
         
               </div>
         
               <div class="my-3">
                   <label for="kas_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kas</label>
                   <select wire:model="kas_id" id="kas_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                       <option selected>Pilih Kas</option>
                       @foreach($kas as $ks)
         
                       <option value="{{ $ks->id }}">{{ $ks->nama }}</option>
         
                       @endforeach
                      
                   </select>
         
                   @error('kas_id') <span class="text-red-500">{{ $message }}</span> @enderror
         
               </div>
            
         
         
               <div class="my-3">
                   <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                   <textarea wire:model="keterangan" id="keterangan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Keterangan..."></textarea>
         
                   @error('keterangan') <span class="text-red-500">{{ $message }}</span> @enderror
               </div>
                 
                 
               <div class="flex">
         
                 <div class="mx-2">
                     <button @click="$wire.modalForm = false" type="button" id="tutupPopup" class="w-full text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" data-modal-hide="modal-ubah-pengeluaran">Tutup</button>
                 </div>
         
                 <div class="mx-2">
                     <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                 </div>
                 
                 </div>       
             </form>
 
 
         </div>    
    </x-modal.modal-form >

</div>
