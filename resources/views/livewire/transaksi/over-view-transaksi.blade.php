<div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-6 xl:grid-cols-4 2xl:gap-7.5 my-4">
   
   
    <div class="rounded-lg border border-stroke bg-sky-300 py-2 px-12 shadow-sm dark:border-strokedark dark:bg-boxdark flex justify-items-center">
        <div class="flex justify-items-center text-gray-500">
           <i class="text-3xl fa-solid fa-arrow-down-wide-short my-auto"></i>
        </div>
        
        <div class="text-center mx-auto">
           
            <span class="text-sm font-medium mb-2">Pemasukan</span>
            <h4 class="text-title-md font-bold dark:text-white">
            Rp. {{ number_format($total_pemasukan ,0,',', '.')  }}
            </h4>             
        </div>  
        
        
    </div>


    <div class="rounded-lg border border-stroke bg-orange-300 py-1 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark flex justify-items-center">

        <div class="flex justify-items-center text-gray-500">
           <i class="text-3xl fa-solid fa-arrow-up-wide-short my-auto"></i>
        </div>
              
        <div class="text-center mx-auto">
            <span class="text-sm font-medium mb-2">Pengeluaran</span>
            <h4 class="text-title-md font-bold dark:text-white">
            Rp. {{ number_format($total_pengeluaran ,0,',', '.')  }}
            </h4>             
        </div>          
        
    </div>   

    
  </div>