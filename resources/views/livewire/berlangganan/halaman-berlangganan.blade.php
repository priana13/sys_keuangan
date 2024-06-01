<div class="sm:px-12 sm:py-6"

 x-data="{

    snap_token : $wire.entangle('snap_token').live,

 }"

 x-init="

     $wire.on('snapTokenReady', (event) => {

        snap_token = event[0].snap_token

        snap.pay(snap_token, {
          // Optional
          onSuccess: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onPending: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onError: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });

           

    });
   
    
 "

>

    <div class="inline-flex rounded-md shadow-sm mb-3" role="group">
        <button  wire:click="pilihType('product')" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium {{ ($type === 'All') ? 'text-dark bg-blue-700' : 'text-gray-900 bg-white' }} hover:text-gray-50 text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700  dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white active"
        
        >
        {{-- <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
        </svg> --}}
        Opsi Berlangganan
        </button>
        <button wire:click="pilihType('history')" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium {{ ($type == 'Pemasukan') ? 'text-white bg-blue-800' : 'text-gray-900 bg-white' }} hover:text-gray-50 border-t border-b border-gray-200 hover:bg-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700  dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
        </svg>
        History Order ({{ $my_order }})
        </button>
        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium {{ ($type == 'Pengeluaran') ? 'text-white bg-blue-800' : 'text-gray-900 bg-white' }} hover:text-gray-50 border border-gray-200 rounded-e-lg hover:bg-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700  dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
        </svg>
        Konfirmasi
        </button>
    </div>   
    

    @if($type == 'product')


        <div class="mb-6 text-xl font-bold text-gray-600">
            <h2>Pilih Opsi berlangganan:</h2>
        </div>    

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach($list_product as $product)

                <div class="bg-white shadow rounded-lg text-center p-5 relative" id="month12">   
                    <span class="text-xs bg-red-500 text-white rounded-full p-1 shadow-md absolute -top-2 -right-1" >{{ $product->disc }}%</span> 

                    <div class="text-xs line-through">Rp {{ number( $product->harga ) }},-</div>
                    <div class="text-xl font-bold">Rp {{ number( $this->getHargaDiscount( $product->harga, $product->disc ) )  }},-</div>
                    <div class="my-3">
                        <span>{{ $product->nama_produk }}</span>
                    </div>
                
                    <div class="mt-5" > 
                        <button wire:click='BeliSekarang({{ $product->id }})' class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" class="button">
                        Beli
                        </button>
                    </div>            
                        
                </div>
            @endforeach

        </div>  



       
        

    @elseif($type == 'history')
    
    <livewire:berlangganan.table-history-order />

    @endif     


</div>
