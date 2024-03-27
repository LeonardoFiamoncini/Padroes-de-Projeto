<?php

require_once './CurrentConditionsDisplay.php';
// require_once './StatisticsDisplay.php';
require_once './WeatherData.php';

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionsDisplay($weatherData);
// $statisticsDisplay = new StatisticsDisplay($weatherData);
// $forecastDisplay = new ForecastDisplay($weatherData);

$weatherData->setTemperature(35);
$weatherData->setPressure(18);
$weatherData->setHumidity(50);

$weatherData->setTemperature(38);
$weatherData->setPressure(21);
$weatherData->setHumidity(49);