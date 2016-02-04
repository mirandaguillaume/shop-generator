<?php

namespace ItemBundle\Entity;

/**
 * Carrier
 */
class Carrier extends Animal
{
    /**
     * @var int
     */
    private $capacity;

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Carrier
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
}

