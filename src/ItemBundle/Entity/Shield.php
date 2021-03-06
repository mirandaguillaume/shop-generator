<?php

namespace ItemBundle\Entity;

/**
 * Shield
 */
class Shield extends Equipment
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
     * @var int
     */
    private $dodgeValue;

    public function __construct(){
        parent::setLocation(Equipment::ONE_HAND);
        parent::__construct();
    }

    /**
     * Set defensePoints
     *
     * @param integer $defensePoints
     *
     * @return Shield
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
     * @return Shield
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

    /**
     * Set dodgeValue
     *
     * @param integer $dodgeValue
     *
     * @return Shield
     */
    public function setDodgeValue($dodgeValue)
    {
        $this->dodgeValue = $dodgeValue;

        return $this;
    }

    /**
     * Get dodgeValue
     *
     * @return int
     */
    public function getDodgeValue()
    {
        return $this->dodgeValue;
    }

    public function getType()
    {
        return 'shield';
    }

    public function getRepositoryNaming()
    {
        return 'ItemBundle:Shield';
    }

    public function getShopViewFragment()
    {
        return 'ItemBundle:Shield:shop_fragment.html.twig';
    }

    public function getShopViewHeadersFragment()
    {
        return 'ItemBundle:Shield:shop_fragment_headers.html.twig';
    }
}

