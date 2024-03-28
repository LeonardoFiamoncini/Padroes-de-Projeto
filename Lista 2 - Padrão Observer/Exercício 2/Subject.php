<?php
class Subject
{
    protected $observers = [];

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    
    public function removeObserver(Observer $observer)
    {
        unset($this->observers[array_search($observer, $this->observers)]);
    }
    
    public function notifyObservers(){
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}