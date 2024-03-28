<?php

require_once "./Subject.php";

class Store extends Subject
{

    /**
     * @var array $products
     */
    protected $products = array();

    /**
     * @var Notifier $notifier
     */
    protected $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function setProduct(array $product)
    {
        $this->products[] = $product;
        $this->notifyObservers();
    }

    public function setPrice(array $product, float $newPrice)
    {
        $productKey = array_search($product['name'], array_column($this->products, 'name'));
        $this->products[$productKey]['price'] = $newPrice;
        $this->notifyObservers();
    }

    public function notifyObservers()
    {
        foreach ($this->products as $product) {
            foreach ($this->observers as $observers) {
                $observers->update($product);
            }
        }
    }
}