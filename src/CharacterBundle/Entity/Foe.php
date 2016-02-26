<?php

namespace CharacterBundle\Entity;

/**
 * Foe
 */
class Foe extends Actor
{
    /**
     * @var string
     */
    private $habitat;

    /**
     * @var string
     */
    private $season;

    /**
     * @var array
     */
    private $loot;

    /**
     * @var int
     */
    private $dragonicaNumber;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $speAbility;

    /**
     * Set habitat
     *
     * @param string $habitat
     *
     * @return Foe
     */
    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return string
     */
    public function getHabitat()
    {
        return $this->habitat;
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return Foe
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set loot
     *
     * @param array $loot
     *
     * @return Foe
     */
    public function setLoot($loot)
    {
        $this->loot = $loot;

        return $this;
    }

    /**
     * Get loot
     *
     * @return array
     */
    public function getLoot()
    {
        return $this->loot;
    }

    /**
     * Set dragonicaNumber
     *
     * @param integer $dragonicaNumber
     *
     * @return Foe
     */
    public function setDragonicaNumber($dragonicaNumber)
    {
        $this->dragonicaNumber = $dragonicaNumber;

        return $this;
    }

    /**
     * Get dragonicaNumber
     *
     * @return int
     */
    public function getDragonicaNumber()
    {
        return $this->dragonicaNumber;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Foe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set speAbility
     *
     * @param string $speAbility
     *
     * @return Foe
     */
    public function setSpeAbility($speAbility)
    {
        $this->speAbility = $speAbility;

        return $this;
    }

    /**
     * Get speAbility
     *
     * @return string
     */
    public function getSpeAbility()
    {
        return $this->speAbility;
    }
}