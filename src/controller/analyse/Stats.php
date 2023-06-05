<?php


use faker\FakeTemperatureGenerator;


class Stats
{
    public function __construct()
    {
        
    }

    public static function renderMainView():void
    {
        renderView("analyse/stats.view.php", NULL, "Stats");
        print_r('passage');

    }

    public static function test(): void
    {

        $generator = new FakeTemperatureGenerator(20, 30);
        $temperature = $generator->generateTemperature();
        echo "Température : $temperature °C";
    }

}

