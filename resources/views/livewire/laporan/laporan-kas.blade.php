<div class="w-full sm:w-3/4">  
        
    <h2 class="my-2 text-gray-700 font-bold">3. Kas</h2>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody> 
                
                @foreach($list_kas as $kas)
                <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                    <td scope="row" class="py-2"> {{ $kas->nama }} </td>
                    <td class="text-end">{{ $kas->saldo_akhir }}</td>
                    <td scope="row"></td>
                </tr>

                @php 
                    $saldo_kas += $kas->saldo_akhir;
                @endphp

                @endforeach

               
                <tr></tr>
                <tr class="py-2">
                    <th class="py-2">Total Saldo</th>
                    <th></th>
                    <th class="text-end underline">{{ number($saldo_kas) }}</th>
                </tr>
                

            </tbody>
        </table>
    </div> 
   

</div>