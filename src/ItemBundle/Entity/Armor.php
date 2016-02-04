<?php

namespace ItemBundle\Entity;

/**
 * Armor
 */
class Armor extends Equipment
{

    /**
     * @var int
     */
    private $defensePoints;

    /**
     * @var int
     */
    private $penality;

    /**
     * Set defensePoints
     *
     * @param integer $defensePoints
     *
     * @return Armor
     */
    public function setDefensePoints($defensePoints)
    {
        $this->defensePoints = $defensePoints;

        return $this;
    }

    /**
     * Get defensePoints
     *
     * @return int
     */
    public function getDefensePoints()
    {
        return $this->defensePoints;
    }

    /**
     * Set penality
     *
     * @param integer $penality
     *
     * @return Armor
     */
    public function setPenality($penality)
    {
        $this->penality = $penality;

        return $this;
    }

    /**
     * Get penality
     *
     * @return int
     */
    public function getPenality()
    {
        return $this->penality;
    }
}

