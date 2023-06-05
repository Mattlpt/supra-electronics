<?php

namespace faker;

class FakeTemperatureGenerator {
    private int $minTemperature;
    private int $maxTemperature;

    public function __construct($minTemperature, $maxTemperature) {
        $this->minTemperature = $minTemperature;
        $this->maxTemperature = $maxTemperature;
    }

    public function generateTemperature(): float|int
    {
        return mt_rand($this->minTemperature * 10, $this->maxTemperature * 10) / 10;
    }
}

// Exemple d'utilisation
$generator = new FakeTemperatureGenerator(20, 30);
$temperature = $generator->generateTemperature();
echo "Température : $temperature °C";