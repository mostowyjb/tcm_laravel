<div>
    <div class="bg-white border-transparent rounded-lg shadow-xl">
        <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
            <h5 class="font-bold uppercase text-gray-600">Visiteurs Differents</h5>
        </div>
        <div class="p-5">
            <canvas id="chartContainer" class="chartjs" width="undefined" height="undefined"></canvas>
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
