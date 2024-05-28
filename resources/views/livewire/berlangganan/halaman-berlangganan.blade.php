<div class="sm:p-12">
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
        @foreach($list_product as $product)
            <div class="bg-white shadow rounded-lg text-center p-5" id="month12">            
                <div class="text-xs line-through">Rp {{ number($product['price_1']) }},-</div>
                <div class="text-xl font-bold">Rp {{ number($product['price_2'])  }},-</div>
                <div>
                    <span>{{ $product['nama'] }}</span>
                </div>
            
                <div class="mt-5" > 
                    <button wire:click='BeliSekarang({{ $product['id'] }})' class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" class="button">
                    Beli
                    </button>
                </div>            
                    
            </div>
        @endforeach

    </div>    

</div>
