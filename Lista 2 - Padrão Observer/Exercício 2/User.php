<?php

require_once "./Observer.php";

class User implements Observer {

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var Notifier $notifier
     */
    protected $notifier;
    
    public function __construct($name, Notifier $notifier) {
        $this->name = $name;
        $this->notifier = $notifier;
    }
    
    public function update($product = null) {
        if (isset($product["price"])) {
            $this->notifier->sendPriceNotification($this, $product);
        } else {
            $this->notifier->sendProductNotification($this, $product);
        }
    }
    
    public function getName() {
        return $this->name;
    }
}
