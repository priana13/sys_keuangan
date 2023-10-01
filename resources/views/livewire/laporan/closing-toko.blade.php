<div class="pb-4">
    <div class="max-w-full">

        <div class="border-b-2 border-gray-400 py-3">
            <h2 class="text-4xl font-extrabold dark:text-white">Closing Toko</h2>
        </div>   
        
        
        <div class="px-6 py-6 lg:px-8 w-full sm:w-3/4 mx-auto">
            
            <form wire:submit="save" class="space-y-6" action="#">
                <div class="my-3 grid grid-cols-4 gap-2">
                    <label for="email" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white my-auto">Tanggal</label>
                    <input wire:model="tanggal" type="date" name="tanggal" id="email" class="col-span-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Tanggal">
                    @error('tanggal') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                @foreach($list_cash as $cash)
        
                <div class="my-3 grid grid-cols-4 gap-2"">
                  <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-auto">Penjulan {{ $cash->nama }}</label>
                  <input wire:model="data_cash.{{ $cash->id }}"  wire:key="kas{{ $cash->id }}" type="number" name="nominal" id="nominal" class="col-span-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nominal">
                  @error('nominal') <span class="text-red-500">{{ $message }}</span> @enderror
                </div
                >  
                @endforeach

                @foreach($list_bank as $bank)

                <div class="my-3 grid grid-cols-4 gap-2">
                    <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-auto">{{ $bank->nama }}</label>
                    <input wire:model="data_bank.{{ $bank->id }}" type="number" name="nominal" id="nominal" class="col-span-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nominal">
                    @error('nominal') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>   

                @endforeach

                <br>

                <div class="grid grid-cols-4 gap-2 mt-5">
                    <label for="komisi_supir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-auto">Komisi Supir</label>
                    <input wire:model="komisi_supir" type="number" name="komisi_supir" id="komisi_supir" class="col-span-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Komisi Supir">
                    @error('komisi_supir') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>   

                <div class="grid grid-cols-4 gap-2">
                    <label for="band" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-auto">Band</label>
                    <input wire:model="band" type="number" name="band" id="band" class="col-span-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Band">
                    @error('band') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>          
        
             
                <div class="grid grid-cols-4 gap-2">
                  
                    <div class="col-span-3 flex justify-end">
                        <div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-modal-hide="modal-ubah-pengeluaran">Submit</button>
                        </div>
                        
                    </div>
                    
                </div>       
                
                  
            </form>
        </div>



    </div>
</div>