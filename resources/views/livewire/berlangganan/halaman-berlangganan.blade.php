<div class="sm:p-12">
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        @foreach($list_product as $product)

            <div class="bg-white shadow rounded-lg text-center p-5 relative" id="month12">   
                <span class="text-xs bg-red-500 text-white rounded-full p-1 shadow-md absolute -top-2 -right-1" >{{ $product->disc }}%</span> 

                <div class="text-xs line-through">Rp {{ number( $product->harga ) }},-</div>
                <div class="text-xl font-bold">Rp {{ number( $this->getDiscount( $product->harga, $product->disc ) )  }},-</div>
                <div>
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

</div>
