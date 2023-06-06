<section class="home">
    <div class="title-text">Statistiques</div>
    <div class="content-body">


        <div class="grille-4">
            <div class="grille-4-item">
                <div class="carte">
                    <h4>Température</h4>
                    <h6>Exterieur</h6>
                    <div class="container">
                        <temperature><?php echo $temperature = $vars['temperature'][0] ?> ° C</temperature>
                    </div>
                </div>
            </div>
            <div class="grille-4-item">
                <div class="carte">
                    <h4>ECG </h4>
                    <h6>Machine, Sale 1</h6>
                    <div class="container">
                        <temperature> <span id="randomNumber"></span> ° C</temperature>
                    </div>
                </div>
            </div>
            <div class="grille-4-item">
                <div class="carte">
                    <h4>ECG </h4>
                    <h6>Machine, Sale 2</h6>
                    <div class="container">
                        <temperature><?php echo $temperature = $vars['temperature'][2] ?> ° C</temperature>
                    </div>
                </div>
            </div>
            <div class="grille-4-item">
                <div class="carte">
                    <h4>Température</h4>
                    <h6>Machine, Sale 3</h6>
                    <div class="container">
                        <temperature><?php echo $temperature = $vars['temperature'][3] ?> ° C</temperature>
                    </div>
                </div>
            </div>
        </div>

        <div class="grille-4">
            <div class="grille-4-item">
                <div class="carte">
                    <h4>Température</h4>
                    <h6>Exterieur</h6>
                    <div class="container">
                        <temperature><?php echo $temperature = $vars['temperature'][0] ?> ° C</temperature>
                    </div>
                </div>
            </div>
            <div class="grille-4-item">
                <div class="carte">
                    <h4>Température</h4>
                    <h6>Machine, Sale 1</h6>
                    <div class="container">
                        <temperature> <span id="randomNumber"></span> ° C</temperature>
                    </div>
                </div>
            </div>
            <div class="grille-4-item">
                <div class="carte">
                    <h4>Température</h4>
                    <h6>Machine, Sale 2</h6>
                    <div class="container">
                        <temperature><?php echo $temperature = $vars['temperature'][2] ?> ° C</temperature>
                    </div>
                </div>
            </div>
            <div class="grille-4-item">
                <div class="carte">
                    <h4>Température</h4>
                    <h6>Machine, Sale 3</h6>
                    <div class="container">
                        <temperature><?php echo $temperature = $vars['temperature'][3] ?> ° C</temperature>
                    </div>
                </div>
            </div>
        </div>

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
                        data: [10, 10, 10, 10, 0],
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Fonction pour charger le nombre aléatoire toutes les secondes
        function loadRandomNumber() {
            $.ajax({
                url: 'randomNumber.php', // Chemin vers le script PHP qui génère le nombre aléatoire
                success: function(data) {
                    $('#randomNumber').text(data); // Mettre à jour le contenu de l'élément span avec le nombre aléatoire
                }
            });
        }

        // Charger le nombre aléatoire initial au chargement de la page
        loadRandomNumber();

        // Actualiser le nombre aléatoire toutes les secondes
        setInterval(loadRandomNumber, 1000);
    });
</script>

<style>
    .carte{

        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    h4{
        color: var(--text-color);
    }

    h6{
        color: var(--text-color);
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    temperature{
        margin-top: 10%;
        margin-bottom: 10%;
        color: var(--text-color);
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-size: 35px;

    }

    .grille-4{
        max-width: 2100px;
        width: 100%;
        margin-top: 40px;
        margin-right: 2px;
        margin-left: 2px;
        display: grid;
        grid-template-columns: repeat(auto-fill, 250px);
        justify-content: center;
        grid-gap: 10px;
    }

    .grille-4-item{

    }
</style>