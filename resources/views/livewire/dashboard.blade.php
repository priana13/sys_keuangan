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
                labels: ['Jan 23', 'Feb 23', 'Mar 23', 'April 23', 'Mei 23', 'Juni 23'],
                datasets: [{
                  label: 'Pemasukan',
                  data: [12, 19, 3, 5, 2, 3],
                  borderWidth: 1
                },
                {
                  label: 'Pengeluaran',
                  data: [20, 19, 3, 5, 2, 3],
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

