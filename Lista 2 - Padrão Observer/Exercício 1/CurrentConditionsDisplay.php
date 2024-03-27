<?php

require_once './DisplayElement.php';
require_once './Observer.php';
require_once './WeatherData.php';

class CurrentConditionsDisplay implements DisplayElement, Observer {
    
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
        $this->temperature = !empty($subject->getTemperature()) ? ($subject->getTemperature()) : ($this->temperature);
        $this->humidity = !empty($subject->getHumidity()) ? ($subject->getHumidity()) : ($this->humidity);
        $this->pressure = !empty($subject->getPressure()) ? ($subject->getPressure()) : ($this->pressure);

        $this->display();
    }

    public function display()
    {
        printf("\n Temperature: %d \n Pressure: %d \n Humidity: %d \n",
            $this->temperature,
            $this->pressure,
            $this->humidity
        );
    }
}