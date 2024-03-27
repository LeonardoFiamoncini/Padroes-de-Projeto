<?php

require_once './CurrentConditionsDisplay.php';
require_once './StatisticsDisplay.php';
require_once './WeatherData.php';

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
// $forecastDisplay = new ForecastDisplay($weatherData);

echo "\nFirst Measurement\n";
$weatherData->setMeasurements(35, 18, 50);
echo "\n\n\n\n\n";
echo "\nSecond Measurement\n";
$weatherData->setMeasurements(38, 21, 49);
echo "\n\n\n\n\n";
echo "\nThird Measurement\n";
$weatherData->setMeasurements(41, 25, 48);
echo "\n\n\n\n\n";
echo "\nFourth Measurement\n";
$weatherData->setMeasurements(40, 24, 49);
echo "\n\n\n\n\n";
echo "\nFifth Measurement\n";
$weatherData->setMeasurements(39, 26, 49);