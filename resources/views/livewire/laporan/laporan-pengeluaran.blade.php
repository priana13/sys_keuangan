<div class="mt-8">  
        
    <h2 class="my-2 text-gray-700 font-bold">2. Pegeluaran</h2>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody> 
                

                @foreach($list_pengeluaran as $pengeluaran)

                <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                    <td scope="row" class="py-2"> {{ $pengeluaran->nama }} </td>
                    <td class="text-end">{{ number_format( $pengeluaran->transaksi->sum('nominal') , 0) }}</td>
                    <td scope="row"></td>
                </tr>

                @php
                    $total_pengeluaran += $pengeluaran->transaksi->sum('nominal');
                @endphp

                @endforeach

                <tr></tr>
                <tr class="py-2">
                    <th class="py-2">Total Pengeluaran</th>
                    <th></th>
                    <th class="text-end underline">{{ $total_pengeluaran }}</th>
                </tr>
                

            </tbody>
        </table>
    </div> 
   

</div>