<?php

namespace ItemBundle\Entity;

/**
 * Equipment
 */
abstract class Equipment extends Item
{

    const CHEST = 'Chest';
    const ONE_HAND = '1 hand';
    const TWO_HANDS = '2 hands';
    const HEAD = 'Head';
    const SHOES = 'Shoes';
    const CAPES = 'Capes';
    const STAFF = 'Staff';
    const HATS = 'Hats';
    const ACCESSORIES = 'Accessories';


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

