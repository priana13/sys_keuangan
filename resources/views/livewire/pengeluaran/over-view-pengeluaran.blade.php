<div class="grid grid-cols-2 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5 my-4">
   
    
    <div class="rounded-lg border border-stroke bg-gray-800 text-white py-1 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">
              
        <div class="text-center">
            <span class="text-sm font-medium mb-2">Bulan Ini</span>
            <h4 class="text-title-md font-bold dark:text-white">
            Rp. {{ number_format(2000000 ,0,',', '.')  }}
            </h4>             
        </div>          
        
    </div>


    <div class="rounded-lg border border-stroke bg-gray-800 text-white py-1 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">
              
        <div class="text-center">
            <span class="text-sm font-medium mb-2">Hari Ini</span>
            <h4 class="text-title-md font-bold dark:text-white">
            Rp. {{ number_format(300000 ,0,',', '.')  }}
            </h4>             
        </div>          
        
    </div>


    
  </div>