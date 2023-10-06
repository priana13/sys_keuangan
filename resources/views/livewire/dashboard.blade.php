<div class="py-4">
    <div class="max-w-full">     
        
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


        <livewire:admin.card-over-view />       
        <div>
            <canvas id="myChart">tes</canvas>
        </div>

        <!-- Grafik Start -->
      

        <script>
            const chartSaya = document.getElementById('myChart');
          
            new Chart(chartSaya, {
              type: 'bar',
              data: {
                labels: {!! json_encode($bulan) !!},
                datasets: [{
                  label: 'Pemasukan',
                  data: {!! json_encode($pemasukan) !!},
                  borderWidth: 1
                },
                {
                  label: 'Pengeluaran',
                  data: {!! json_encode($pengeluaran) !!},
                  borderWidth: 1
                }
            ]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          </script>
        
    </div>
</div>

