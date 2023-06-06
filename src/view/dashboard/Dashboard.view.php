<section class="home">
    <div class="title-text">Dashboard</div>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

    <div class="content-body">
        <p>Nom:<?php echo(" ".$_SESSION['logged_user']['lastname_user']) ?></p>
        <p>Prenom:<?php echo(" ".$_SESSION['logged_user']['firstname_user']) ?></p>

        <div class="grille-4">
            <div class="grille-4-item">
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <h4 class="card-header">Heart Rate</h4>
                        <div class="card-body">
                            <h5 class="card-title">xx</h5>
                            <p class="card-text">Feb 1 - Apr 1, Paris</p>
                            <p class="card-text text-success">18.2% increase since last month</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grille-4-item">
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <h4 class="card-header">Sound</h4>
                        <div class="card-body">
                            <h5 class="card-title">xx</h5>
                            <p class="card-text">Feb 1 - Apr 1, Paris</p>
                            <p class="card-text text-success">4.6% increase since last month</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grille-4-item">
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <h4 class="card-header">CO2</h4>
                        <div class="card-body">
                            <h5 class="card-title">xx</h5>
                            <p class="card-text">Feb 1 - Apr 1, Paris</p>
                            <p class="card-text text-danger">2.6% decrease since last month</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grille-4-item">
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card">
                        <h4 class="card-header">Sweat</h4>
                        <div class="card-body">
                            <h5 class="card-title">xx</h5>
                            <p class="card-text">Feb 1 - Apr 1, Paris</p>
                            <p class="card-text text-success">2.5% increase since last month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grille-2">
            <div class="grille-2-item">
                <div class = "card">
                    <h4 class="card-header">Latest measurement</h4>
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
                                    <th scope="row">2023.04.01</th>
                                    <td>17:30</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2023.04.01</th>
                                    <td>17:25</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2023.04.01</th>
                                    <td>17:20</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td>xx</td>
                                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2023.04.01</th>
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

            <div class="grille-2-item">
                <div class="col-12 col-xl-4">
                    <div class="card">
                        <h4 class="card-header">Health Index</h4>
                        <div class="card-body">
                            <div id="traffic-chart"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-graph-box">
            <div>
                <canvas id="data" style="height: 20px; width:40px;"></canvas>
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

<style>

    p{
        color: var(--text-color);
    }

    h4{
        color: #707070;
    }

    h5{
        color: var(--text-color);
    }

    h6{
        color: var(--text-color);
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .card-header {
        background-color: var(--text-lightgrey-color);
        font-size: 18px;
        font-weight: bold;
        padding: 10px;
    }

    .card-body {
    }

    .card-title {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .card-text {
        margin-bottom: 10px;
    }

    .text-success {
        color: var(--succes-color);
    }

    .text-danger {
        color: var(--error-color);
    }

    .grille-2{
        max-width: 2100px;
        width: 95%;
        height: auto;
        margin-top: 40px;
        margin-right: 2px;
        margin-left: 2px;
        display: grid;
        grid-template-columns: repeat(auto-fill, 510px);
        justify-content: center;
        grid-gap: 10px;
    }

    .grille-2-item{
        width: 515px;
        height: 380px;
    }

    .grille-4{
        max-width: 2100px;
        width: 95%;
        height: auto;
        margin-top: 40px;
        margin-right: 2px;
        margin-left: 2px;
        display: grid;
        grid-template-columns: repeat(auto-fill, 250px);
        justify-content: center;
        grid-gap: 10px;
    }

    .grille-4-item{
        width: 250px;
        height: 190px;
    }

    .card-graph-box{
        max-width: 2100px;
        width: 95%;
        height: auto;
        margin-top: 40px;
        margin-right: 2px;
        margin-left: 2px;
        display: flex;
        align-items: center;
    }



</style>