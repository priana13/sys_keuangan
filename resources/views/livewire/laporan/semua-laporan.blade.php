<div class="mx-8">
    {{-- top --}}
    <form class="mb-10" wire:submit="filter" id="form-filter-laporan">      
          
        <div date-rangepicker class="sm:flex items-center">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input wire:model="start" type="date" id="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Awal">
            </div>
                {{-- <span class="mx-4 text-gray-500">to</span> --}}
            <div class="relative sm:mx-4 mt-2 sm:mt-0">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input wire:model="end" type="date" id="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Akhir">
            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-2 sm:mt-0">
                Tampilkan
            </button>

        </div>
  
    </form>
    {{-- end top --}}

    <div class="flex justify-end mb-1">
        <button class="bg-gray-200 p-2 mx-1 hover:bg-gray-300">PDF</button> 
        <button class="bg-gray-200 p-2 hover:bg-gray-300">.xlxs</button> 
    </div>

    {{-- summery --}}
    <div class="mb-8 bg-white px-8 py-6 shadow">

        {{-- header laporan --}}
        <div class="">

            <h2 class="text-xl sm:text-2xl text-gray-800">Laporan Keuangan Kasir</h2>
            <h3 class="text-sm sm:text-normal text-gray-600 mt-1">Periode {{ $start }} ~ {{ $end }}</h3>
            
        </div>

        <div class="mt-6 w-full sm:w-3/4">

            @livewire('laporan.laporan-pemasukan')

            @livewire('laporan.laporan-pengeluaran')

            <div>

            </div>
    
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-3"> 
                <tr class="dark:bg-gray-800 dark:border-gray-700"> 
                    <th scope="row" class="py-1"> Saldo Akhir </th>
                    <th></th>
                    <th scope="row" class="text-end font-bold underline"> 20.000.0000</th>
                </tr>
            </table>          


        </div>
    </div>


    <div class="mb-8 bg-white px-8 py-6 shadow">

        <h2 class="text-xl sm:text-2xl text-gray-800">Laporan Kas</h2>
        <h3 class="text-sm sm:text-normal text-gray-600 mt-1">Periode {{ $start }} ~ {{ $end }}</h3>


        @livewire('laporan.laporan-kas')
    
    </div>


    {{-- end summery --}}

    <div class="relative overflow-x-auto hidden">
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
                    <th class="px-6 py-4">

                       @livewire('laporan.partial.kolom-laba-rugi', [
                            "pemasukan" => (isset($pemasukan[intval($bulan)]))? $pemasukan[intval($bulan)]:0, 
                            "bahan_baku" => (isset($pengeluaran_bahan_baku[intval($bulan)]))? $pengeluaran_bahan_baku[intval($bulan)]:0,
                            "operasional" => (isset($pengeluaran_operasional[intval($bulan)]))?$pengeluaran_operasional[intval($bulan)]:0,
                            "asset" => (isset($pengeluaran_asset[intval($bulan)]))?$pengeluaran_asset[intval($bulan)]:0

                       ])

                    </th>
                </tr>          
                
                @endforeach

            </tbody>
        </table>
    </div>
   

</div>
