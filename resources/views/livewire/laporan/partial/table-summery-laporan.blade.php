    {{-- table --}}
    <div class="w-1/2">  
        
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody> 
                    
                    <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                        <th scope="row" class="py-1"> Total pemasukan </th>
                        <td scope="row"> {{ rupiah($total_pemasukan) }}</td>
                    </tr>
                    <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                        <th scope="row" class="py-1"> Operasional </th>
                        <td scope="row"> {{ rupiah($operasional) }}</td>
                    </tr>
                    <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                        <th scope="row" class="py-1"> Bahan Baku </th>
                        <td scope="row"> {{ rupiah($bahan_baku) }}</td>
                    </tr>
                    <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                        <th scope="row" class="py-1"> Asset </th>
                        <td scope="row"> {{ rupiah($asset) }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    
    
                </tbody>
            </table>
        </div>


        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-3"> 
            <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                <th scope="row" class="py-1"> Laba Rugi Kotor </th>
                <th scope="row"> {{ rupiah($total_pemasukan - $operasional - $bahan_baku - $asset) }}</th>
            </tr>
        </table>
       

    </div>
    {{-- end table --}}
