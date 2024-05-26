<div class="card bg-gray-50 shadow p-3 rounded-md w-full"
 x-data="{
    open:false,
 }"
>  

    <div class="col-span-3 flex justify-between mb-4">

        <h2 class="text-2xl font-extrabold dark:text-white">Pengaturan Kas</h2>

        <div>
            <button @click="open = ! open" type="submit" class="text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-md text-sm px-3 py-1 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">+</button>
        </div>
        
    </div>

    {{-- form tambah --}}
    <div x-show="open">

        <form wire:submit="{{ $action_type }}" class="flex justify-between card shadow-sm bg-gray-100 p-3 border-2 border-gray-300">
        
            <div class="grid grid-cols-2 gap-2 w-full">

                <div class="my-2">                
                    <select wire:model="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        <option value="">Jenis Kas</option> 
                        <option value="Bank">Bank</option>   
                        <option value="Cash">Cash</option>                  
                       
                    </select>
          
                    @error('type') <span class="text-red-500">{{ $message }}</span> @enderror
          
                </div>
    
                <div class="my-2 w-full">
                    <input wire:model="nama" type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Kas">
                    @error('nama') <span class="text-red-500">{{ $message }}</span> @enderror
                </div> 
                
        
                <div class="my-2 w-full">
                    <input wire:model="no_rek" type="text" name="no_rek" id="no_rek" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nomor Rekening">
                    @error('no_rek') <span class="text-red-500">{{ $message }}</span> @enderror
                </div> 
    
    
                <div class="my-2 w-full">
                    <input wire:model="atas_nama" type="text" name="atas_nama" id="atas_nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Atas Nama">
                    @error('atas_nama') <span class="text-red-500">{{ $message }}</span> @enderror
                </div> 

                <div class="my-2 w-full">
                    <input wire:model="saldo_awal" type="number" name="saldo_awal" id="saldo_awal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Saldo Awal">
                    @error('saldo_awal') <span class="text-red-500">{{ $message }}</span> @enderror
                </div> 
    
                
    
            </div>
    
            <div class="">
    
                <div class="py-2 ms-2">
                    <button type="submit" class="text-gray-800 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-md text-sm px-3 py-1 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Simpan</button>
                </div>    
        
                <div class="py-2 mx-2">
                    <button @click="open = false" type="botton" class="text-white bg-gray-500 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-md text-sm px-3 py-1 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Tutup</button>
                </div>    
        
    
            </div>
   
            
        </form>      



    </div>
    {{-- end form tambah --}}
  
    {{-- table --}}
    <div>  
        
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>                          
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>     
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>                        
                        <th scope="col" class="px-6 py-3">
                            Nomor Rekening
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            Atas Nama
                        </th>  

                        <th scope="col" class="px-6 py-3">
                            Saldo Awal
                        </th>  
                                        
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>  
                    
                    @foreach($kas as $row)
                 
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">                            

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">   
                            {{ $row->nama }}                     
                        </th>   
                        
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $row->type }}
                        </td>
                        
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $row->no_rek }}
                        </td>

                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $row->atas_nama }}
                        </td>

                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ number($row->saldo_awal) }}
                        </td>
                                                    
                        <td scope="row">        
                            <div class="flex items-center space-x-3.5">
                                <button  
                                @click="open = true"
                                wire:click="edit({{ $row->id }})"     
                                class="hover:text-primary"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </button>

                               
                                @if($row->transaksi->count() == 0)
                                <button wire:click="hapus({{ $row->id }})" class="hover:text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                                    
                                </button>
                                @endif
                               

                            </div>
                            
                        </td>
                    </tr>
    
                    @endforeach       
                    
    
                </tbody>
            </table>
        </div>

        {{-- Paginate --}}
        <div class="my-3 ">
            
        </div>

    </div>
    {{-- end table --}}



</div>
