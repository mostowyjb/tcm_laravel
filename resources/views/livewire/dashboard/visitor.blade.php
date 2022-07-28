<div class="header pb-6 w-full" >
    <div>
      <div class="-3xl p-4 text-2xl text-white">
          <h1 class="font-bold pl-2">Visieurs unique</h1>
      </div>
    </div>
    <div class="w-full p-6">
    <div class="bg-white border-transparent rounded-lg shadow-xl p-4 w-full">

        <div class="">
            <canvas id="chartContainer" class="chartjs" width="undefined" height="undefined"></canvas>
        </div>
    </div>
    </div>


<script>
       document.addEventListener('livewire:load', function () {

            var jsonData = @this.chart_data;
            console.log(jsonData);
            var dates = [];
            var visitors = [];
            for (var i = 0; i < jsonData.length; i++) {
                dates.push(jsonData[i][0]);
                visitors.push(jsonData[i][1]);
            }
            var ctx = document.getElementById('chartContainer').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: dates,
                    datasets: [{
                        label: 'Visites par jour',
                        data: visitors,
                        backgroundColor: '#EAB543',
                        hoverBackgroundColor: '#F8EFBA',
                        borderColor: '#25CCF7',
                        borderWidth: 2,
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: false,
                                fontStyle: 'bold',
                            },
                            gridLines: {
                                display: false,
                            },
                        }],
                        xAxes: [{
                            gridLines: {
                                display: false,
                            },
                            ticks: {

                            },
                        }],
                    },
                }
            });

    });


</script>
</div>
