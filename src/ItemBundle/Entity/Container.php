<?php

namespace ItemBundle\Entity;

/**
 * Container
 */
class Container extends Item
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
     * @return Container
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

