<?php

require_once './Subject.php';

class WeatherData implements Subject
{

    /**
     * float $temperature
     */
    protected $temperature;

    /**
     * float $humidity
     */
    protected $humidity;

    /**
     * float $pressure
     */
    protected $pressure;

    /**
     * array $observers
     */
    protected $observers = array();


    public function setTemperature(float $temperature)
    {
        $this->temperature = $temperature;
        $this->measurementsChanged();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }


    public function setHumidity(float $humidity)
    {
        $this->humidity = $humidity;
        $this->measurementsChanged();
    }

    public function getHumidity()
    {
        return $this->humidity;
    }


    public function setPressure(float $pressure)
    {
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getPressure()
    {
        return $this->pressure;
    }


    public function registerObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(Observer $observer)
    {
        foreach ($this->observers as $key => $currentObserver) {
            if ($currentObserver === $observer) {
                array_splice($this->observers, $key);
                break;
            }
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }


    public function measurementsChanged()
    {
        $this->notifyObservers();
    }
}