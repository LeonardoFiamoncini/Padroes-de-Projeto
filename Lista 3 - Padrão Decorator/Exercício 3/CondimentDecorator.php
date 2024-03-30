<?php

require_once "./Beverage.php";

abstract class CondimentDecorator extends Beverage
{
    /**
     * @return string $this->description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function cost()
    {
        switch ($this->size) {
            case 'P':
                return 1;
            case 'M':
                return 1.5;
            case 'G':
                return 2;
            default:
                echo "\n\n Atenção! Tamanho selecionado não existente. Portanto, nenhum condimento será adicionado. \n\n";
                return 0;
        }
    }
}