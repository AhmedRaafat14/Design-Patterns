<?php


namespace Behavioral\COR\Entity;

/**
 * This is a simple representative class for car object
 *
 * Class Car
 * @package Behavioral\COR\Entity
 */
class Car
{
    /** @var string $model */
    private string $model;

    /** @var string $manufacturer */
    private string $manufacturer;

    /**
     * @param string $model
     * @return Car
     */
    public function setModel(string $model): Car
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $manufacturer
     * @return Car
     */
    public function setManufacturer(string $manufacturer): Car
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    public function __toString()
    {
        return $this->model;
    }
}