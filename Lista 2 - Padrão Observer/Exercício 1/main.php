<?php

require_once './CurrentConditionsDisplay.php';
require_once './StatisticsDisplay.php';
require_once './WeatherData.php';

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);

echo "\n\n\n__First Measurement__\n";
$weatherData->setMeasurements(35, 18, 50);
echo "\n\n\n\n\n";

echo "\n\n\n__Second Measurement__\n";
$weatherData->setMeasurements(38, 21, 49);
echo "\n\n\n\n\n";

echo "\n\n\n__Third Measurement__\n";
$weatherData->setMeasurements(41, 25, 48);
echo "\n\n\n\n\n";

echo "\n\n\n__Fourth Measurement__\n";
$weatherData->setMeasurements(40, 24, 49);
echo "\n\n\n\n\n";

echo "\n\n\n__Fifth Measurement__\n";
$weatherData->setMeasurements(39, 26, 49);