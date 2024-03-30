<?php

abstract class Beverage
{
    /**
     * @var string $description
     */
    protected $description = 'Unknown Beverage';

    /**
     * Atributo utilizado para definir
     * o tamanho da bebida. Podendo
     * ser de tamanho pequeno (P),
     * médio (M) ou grande (G).
     *
     * @var string $size
     */
    protected $size = 'P';

    /**
     * @var int $numberOfDoses
     */
    protected $numberOfDoses = 1;

    /**
     * @return string $this->description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param int $numberOfDoses
     */
    public function setNumberOfDoses(int $numberOfDoses)
    {
        $this->numberOfDoses = $numberOfDoses;
    }

    /**
     * @return int $this->numberOfDoses
     */
    public function getNumberOfDoses()
    {
        return $this->numberOfDoses;
    }

    /**
     * @return float
     */
    public abstract function cost();
}