<div>
    {{-- top --}}
    <div class="mb-10">


        <div date-rangepicker class="flex items-center">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input wire:model="start" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Awal">
            </div>
                {{-- <span class="mx-4 text-gray-500">to</span> --}}
            <div class="relative mx-4">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input wire:model="end" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Akhir">
            </div>

            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Tampilkan
            </button>

        </div>
  
    </div>
    {{-- end top --}}

    {{-- summery --}}
    <div class="flex justify-between mb-8">

        @include('livewire.laporan.partial.table-summery-laporan')

        @include('livewire.laporan.partial.table-summery-laporan-kanan')

    </div>
    {{-- end summery --}}

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Bulan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Pemasukan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bahan Baku
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Operasional
                    </th>
                    <th scope="col" class="px-6 py-3">Asset</th>
                    <th scope="col" class="px-6 py-3">Laba Rugi</th>
                </tr>
            </thead>
            <tbody>
                <?php $data_keluar = 0; ?>

                @foreach($list_bulan as $bulan)
              
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $bulan }}
                    </th>
                    <td class="px-6 py-4">
                       {{ (isset($pemasukan[ intval($bulan)  ]))? rupiah($pemasukan[ intval($bulan)]):0  }}
                    </td>
                    <td class="px-6 py-4">
                        {{ (isset($pengeluaran_bahan_baku[intval($bulan)]))? rupiah($pengeluaran_bahan_baku[intval($bulan)]):0  }}
                    </td>
                    <td class="px-6 py-4">
                        {{ (isset($pengeluaran_operasional[intval($bulan)]))?rupiah($pengeluaran_operasional[intval($bulan)]):0  }}
                    </td>
                    <td class="px-6 py-4">                       
                        {{ (isset($pengeluaran_asset[intval($bulan)]))?rupiah($pengeluaran_asset[intval($bulan)]):0  }}
                    </td>
                    <td class="px-6 py-4">
                        <?php                        

                                               

                        ?>

                        {{  (isset($pemasukan[ intval($bulan)  ]))?$pemasukan[ intval($bulan)]:0 - 
                            $pengeluaran_bahan_baku[intval($bulan)] - 
                            $pengeluaran_operasional[intval($bulan)]
                           
                        }}
                    </td>
                </tr>          
                
                @endforeach

            </tbody>
        </table>
    </div>
   

</div>
