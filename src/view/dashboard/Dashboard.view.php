<section class="home">
    <div class="title-text">Dashboard</div>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="style/dashboard.css">

    <div class="content-body">
        <p>Nom:_____</p>
        <p>Prenome:_____</p>
        <div class="row my-4">
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">Heart Rate</h5>
                    <div class="card-body">
                        <h5 class="card-title">xx</h5>
                        <p class="card-text">Feb 1 - Apr 1, Paris</p>
                        <p class="card-text text-success">18.2% increase since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">Sound</h5>
                    <div class="card-body">
                        <h5 class="card-title">xx</h5>
                        <p class="card-text">Feb 1 - Apr 1, Paris</p>
                        <p class="card-text text-success">4.6% increase since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">CO2</h5>
                    <div class="card-body">
                        <h5 class="card-title">xx</h5>
                        <p class="card-text">Feb 1 - Apr 1, Paris</p>
                        <p class="card-text text-danger">2.6% decrease since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">Sweat</h5>
                    <div class="card-body">
                        <h5 class="card-title">xx</h5>
                        <p class="card-text">Feb 1 - Apr 1, Paris</p>
                        <p class="card-text text-success">2.5% increase since last month</p>
                    </div>
                </div>
            </div>
        </div>

        <div class = "row">
            <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                <div class = "card">
                    <h5 class="card-header">Latest measurement</h5>
                    <div class = "card-body">
                        <div class="table-responsive">
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Heart Rate</th>
                                        <th scope="col">Sound</th>
                                        <th scope="col">CO2</th>
                                        <th scope="col">Sweat</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2023.04.01</rh>
                                        <td>17:30</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2023.04.01</rh>
                                        <td>17:25</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2023.04.01</rh>
                                        <td>17:20</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2023.04.01</rh>
                                        <td>17:15</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td>xx</td>
                                        <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#" class="btn btn-block btn-light">View all</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                    <div class="card">
                        <h5 class="card-header">Health Index</h5>
                        <div class="card-body">
                            <div id="traffic-chart"></div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
        </div>            

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
        <script>
            new Chartist.Line('#traffic-chart', {
                labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
                series: [
                    [12, 23, 20, 17, 14, 22]
                ]
                }, {
                low: 0,
                showArea: true
            });
        </script>

        <div>
            <canvas id="data" style="height: 20px; width:40px;"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"></script>


        <script>
            import {Chart} from "chart.js";
            const data = new Chart(ctx, {...});
        </script>
        <script>
            const ctx = document.getElementById('data');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Heart Rate', 'Sound', 'CO2', 'Sweat'],
                    datasets: [{
                        label: 'DATA',
                        data: [23, 22, 10, 34],
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