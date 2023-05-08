<section class="home">
    <div class="title-text">Statistiques</div>
    <div class="content-body">
        <div>
            <canvas id="myChart" style="height: 100px; width: 300px;"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"></script>

        <script src="path/to/chartjs/dist/chart.umd.js"></script>
        <script>
            import {Chart} from "chart.js";
            const myChart = new Chart(ctx, {...});
        </script>


        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Matthieu', 'Julien', 'Eli', 'Zhou', 'Marius'],
                    datasets: [{
                        label: 'heure par jour',
                        data: [23, 22, 10, 0, -3],
                        borderWidth: 1
                    }]
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
</section><!-- Contenu principal -->