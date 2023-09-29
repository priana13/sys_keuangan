<div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5 my-4">
   
    @foreach($kategori as $row)
    <div class="rounded-lg border border-stroke bg-gray-800 text-white py-1 px-3 shadow-sm dark:border-strokedark dark:bg-boxdark">
              
        <div class="text-center">
            <span class="text-sm font-medium mb-2">{{ $row->nama }}</span>
            <h4 class="text-title-md font-bold dark:text-white">
            Rp. {{ number_format($row->transaksi->sum('nominal') ,0,',', '.')  }}
            </h4>             
        </div>          
        
    </div>

    @endforeach

    
  </div>