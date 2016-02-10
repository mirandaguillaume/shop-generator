<?php

namespace ItemBundle\Entity;

/**
 * Weapon
 */
class Weapon extends Equipment
{

    /**
     * @var string
     */
    private $accuracy;

    /**
     * @var string
     */
    private $damage;


    /**
     * Set accuracy
     *
     * @param string $accuracy
     *
     * @return Weapon
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * Get accuracy
     *
     * @return string
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Set damage
     *
     * @param string $damage
     *
     * @return Weapon
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    /**
     * Get damage
     *
     * @return string
     */
    public function getDamage()
    {
        return $this->damage;
    }

    public function getType()
    {
        return 'weapon';
    }

    public function getRepositoryNaming()
    {
        return 'ItemBundle:Weapon';
    }
}

