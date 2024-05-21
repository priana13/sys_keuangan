<div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5 my-4">
    <!-- Card Item Start -->
    <div class="rounded-md border border-stroke bg-red-800 text-white py-3 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">
       
       
        <div class="text-center">
            <span class="text-sm font-medium mb-2">Belum Bayar</span>
            <h4 class="text-title-md font-bold dark:text-white">
            {{ rupiah($belum_bayar) }}
            </h4>              
        </div>
          
        
    </div>

    <div class="rounded-md border border-stroke bg-green-800 text-white py-2 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">    
       
        <div class="text-center">
            <span class="text-sm font-medium mb-2">Sudah Bayar</span>
            <h4 class="text-title-md font-bold dark:text-white">
               {{ rupiah($sudah_bayar) }}
            </h4>              
        </div>        
       
    </div>



  </div>