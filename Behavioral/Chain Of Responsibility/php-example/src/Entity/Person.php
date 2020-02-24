<?php

namespace Behavioral\COR\Entity;

/**
 * This is a simple representative class for person object
 *
 * Class Person
 * @package Behavioral\COR\Entity
 */
class Person
{
    /** @var string $name */
    private string $name;

    /** @var int $age */
    private int $age;

    /** @var string $gender */
    private string $gender;

    /**
     * @param string $name
     * @return Person
     */
    public function setName(string $name): Person
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int $age
     * @return Person
     */
    public function setAge(int $age): Person
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param string $gender
     * @return Person
     */
    public function setGender(string $gender): Person
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    public function __toString()
    {
        return $this->name;
    }
}