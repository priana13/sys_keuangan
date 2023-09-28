<div>
    {{-- In work, do what you enjoy. --}}
    
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nominal
                    </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

               @foreach($transaksi as $row)
               
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $row->tanggal }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $row->keterangan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->kategori->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->nominal }}
                    </td>
                    <td>
                        
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    <div class="my-3">
        {{ $transaksi->links() }}
    </div>

    


</div>
