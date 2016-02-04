<?php

namespace ItemBundle\Entity;

/**
 * Equipment
 */
abstract class Equipment extends Item
{

    /**
     * @var string
     */
    private $location;

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Equipment
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
}

