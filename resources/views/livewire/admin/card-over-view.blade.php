<div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5 my-4">
    <!-- Card Item Start -->
    <div
        class="rounded-md border border-stroke bg-white py-4 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">
       
        <div class="mt-4 flex items-end justify-between">
          <div>
              <span class="text-sm font-medium mb-2">Total Pemasukan/Hari</span>
              <h4 class="text-title-md font-bold text-black dark:text-white">
                {{ rupiah($pemasukan_hari_ini) }}
              </h4>              
          </div>
          
        </div>
    </div>

    <div
        class="rounded-md border border-stroke bg-white py-4 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">
    
        <div class="mt-4 flex items-end justify-between">
        <div>
            <span class="text-sm font-medium mb-2">Total Pengeluaran/Hari</span>
            <h4 class="text-title-md font-bold text-black dark:text-white">
                {{ rupiah($pengeluaran_hari_ini) }}
            </h4>              
        </div>
        
        </div>
    </div>


<div
    class="rounded-md border border-stroke bg-white py-4 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">

        <div class="mt-4 flex items-end justify-between">
        <div>
            <span class="text-sm font-medium mb-2">Total Pemasukan/Bulan</span>
            <h4 class="text-title-md font-bold text-black dark:text-white">
                {{rupiah($pemasukan_bulan_ini)}}
            </h4>              
        </div>
        
        </div>
    </div>

    <div
        class="rounded-md border border-stroke bg-white py-4 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">

            <div class="mt-4 flex items-end justify-between">
            <div>
                <span class="text-sm font-medium mb-2">Total Pengeluaran/Bulan</span>
                <h4 class="text-title-md font-bold text-black dark:text-white">
                   {{rupiah($pengeluaran_bulan_ini)}}
                </h4>              
            </div>
            
            </div>
        </div>
    
  </div>