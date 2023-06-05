<?php

class Analytics{

    public function __construct()
    {
    }

    public static function renderMainView():void
    {

        $temperatureExterieur = 16;
        $temperatureSale1 = rand(38, 45);
        $temperatureSale2 = rand(38, 45);
        $temperatureSale3 = rand(38, 45);

        $temperature = [1, 2, 3, 4, 5];

        array_unshift($temperature, $temperatureExterieur);
        array_splice($temperature, 1, 1, $temperatureSale1);
        array_splice($temperature, 2, 1, $temperatureSale2);
        array_splice($temperature, 3, 1, $temperatureSale3);

        $vars['temperature'] = $temperature;

        renderView("analyse/analytics.view.php", $vars, "Analytics");
    }
}
