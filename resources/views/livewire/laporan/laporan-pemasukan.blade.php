<div class="">  
        
    <h2 class="my-2 text-gray-700 font-bold">1. Pemasukan</h2>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody> 
                
                <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                    <td scope="row" class="py-2"> Saldo Awal </td>
                    <td class="text-end"></td>
                    <td scope="row" class="text-end">{{ number($saldo_awal) }}</td>
                </tr>

                @foreach($list_pemasukan as $pemasukan)
                <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                    <td scope="row" class="py-2"> {{ $pemasukan->nama }} </td>
                    <td class="text-end">{{ number( $pemasukan->transaksi()->periode($this->start_date, $this->end_date)->sum('nominal')) }}</td>
                    <td scope="row"></td>
                </tr>             

                @endforeach
            
                <tr></tr>
                <tr class="py-2">
                    <th class="py-2">Total Pemasukan</th>
                    <th></th>
                    <th class="text-end underline">{{ number( $total_pemasukan) }}</th>
                </tr>
                

            </tbody>
        </table>
    </div> 
   

</div>