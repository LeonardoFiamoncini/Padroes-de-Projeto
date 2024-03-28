<?php

require_once './DisplayElement.php';
require_once './Observer.php';
require_once './WeatherData.php';

class StatisticsDisplay implements DisplayElement, Observer
{

    /**
     * float $minTemperature
     */
    protected $minTemperature;

    /**
     * float $maxTemperature
     */
    protected $maxTemperature;

    /**
     * array $temperatures
     */
    protected $temperatures = array();

    /**
     * float $avgTemperature
     */
    protected $avgTemperature;

    /**
     * float $minHumidity
     */
    protected $minHumidity;

    /**
     * float $maxHumidity
     */
    protected $maxHumidity;

    /**
     * array $humidities
     */
    protected $humidities = array();

    /**
     * float $avgHumidity
     */
    protected $avgHumidity;

    /**
     * float $minPressure
     */
    protected $minPressure;

    /**
     * float $maxPressure
     */
    protected $maxPressure;

    /**
     * array $pressures
     */
    protected $pressures = array();

    /**
     * float $avgPressure
     */
    protected $avgPressure;

    /**
     * WeatherData $subject
     */
    protected $subject;


    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update($subject)
    {
        if (!empty($subject->getTemperature())) {
            array_push($this->temperatures, $subject->getTemperature());
            asort($this->temperatures);
            $this->minTemperature = reset($this->temperatures);
            $this->maxTemperature = end($this->temperatures);
            $this->avgTemperature = array_sum($this->temperatures) / count($this->temperatures);
        }

        if (!empty($subject->getHumidity())) {
            array_push($this->humidities, $subject->getHumidity());
            asort($this->humidities);
            $this->minHumidity = reset($this->humidities);
            $this->maxHumidity = end($this->humidities);
            $this->avgHumidity = array_sum($this->humidities) / count($this->humidities);
        }

        if (!empty($subject->getPressure())) {
            array_push($this->pressures, $subject->getPressure());
            asort($this->pressures);
            $this->minPressure = reset($this->pressures);
            $this->maxPressure = end($this->pressures);
            $this->avgPressure = array_sum($this->pressures) / count($this->pressures);
        }

        $this->display();
    }

    public function display()
    {
        echo "\n\nTemperatures obtained - Min: " . $this->minTemperature . " - Max: " . $this->maxTemperature . " - Avg: " . $this->avgTemperature . "\n\n";
        print_r($this->temperatures);


        echo "\n\nHumidities obtained - Min: " . $this->minHumidity . " - Max: " . $this->maxHumidity . " - Avg: " . $this->avgHumidity . "\n\n";
        print_r($this->humidities);


        echo "\n\nPressures obtained - Min: " . $this->minPressure . " - Max: " . $this->maxPressure . " - Avg: " . $this->avgPressure . "\n\n";
        print_r($this->pressures);
    }
}