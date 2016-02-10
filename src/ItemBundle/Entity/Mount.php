<?php

namespace ItemBundle\Entity;

/**
 * Mount
 */
class Mount extends Animal
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
     * @return Mount
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

