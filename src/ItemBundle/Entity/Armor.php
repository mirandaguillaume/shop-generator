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
     *
     */
    public function __construct(){
        parent::setLocation(Equipment::CHEST);
        parent::__construct();
    }

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

    public function getType()
    {
        return 'armor';
    }

    public function getRepositoryNaming()
    {
        return 'ItemBundle:Armor';
    }

    public function getShopViewFragment(){
        return 'ItemBundle:Armor:shop_fragment.html.twig';
    }

    public function getShopViewHeadersFragment(){
        return 'ItemBundle:Armor:shop_fragment_headers.html.twig';
    }
}

