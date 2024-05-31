<div>
    <div class="my-6 text-xl font-bold text-gray-600">
        <h2>History Order</h2>
    </div>  


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Berlangganan
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Nominal
                    </th>    
                    
                    
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th> 

                    <th></th>
                </tr>
            </thead>
            <tbody>

               @foreach($orders as $row)                 
               
                <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ date('d M Y', strtotime($row->tanggal)) }}
                    </th>

                    <td class="px-6 py-4">
                        {{ $row->paket_berlangganan->nama_produk }}  
                     </td>  

                     <td class="px-6 py-4">
                        {{ $row->nominal }}  
                     </td>    

                     <td class="px-6 py-4">
                        {{ $row->status_transaksi }}  
                     </td> 

                    <td>

                        <div class="flex items-center space-x-3.5">

                            @if($row->status_transaksi == 'Pending')
                            
                            <button wire:click="Bayar({{ $row->id }})" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" class="button">
                                Bayar
                            </button>                             
                            
                            @endif
                        </div>
                        
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    <div class="my-3">
        {{ $orders->links() }}
    </div>


</div>
