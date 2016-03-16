<?php

namespace CharacterBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @var ArrayCollection
     */
    private $speAbilities;

    /**
     * @var Species
     */
    private $species;

    /**
     * @var integer
     */
    private $armor;

    /**
     * @var string
     */
    private $accuracy;

    /**
     * @var string
     */
    private $damage;

    public function __construct(){
        $this->loot = array();
        $this->speAbilities = new ArrayCollection();
    }

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

    public function addSpeAbility(SpeAbility $ability) {
        $this->speAbilities->add($ability);
    }

    public function removeSpeAbility(SpeAbility $ability) {
        $this->speAbilities->removeElement($ability);
    }

    /**
     * Get speAbility
     *
     * @return string
     */
    public function getSpeAbilities()
    {
        return $this->speAbilities;
    }

    /**
     * Get maxHp
     *
     * @return int
     */
    public function getMaxHp()
    {
        return $this->maxHp;
    }

    /**
     * Get maxMp
     *
     * @return int
     */
    public function getMaxMp()
    {
        return $this->maxMp;
    }

    /**
     * Set armor
     *
     * @param integer $armor
     *
     * @return Foe
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * Get armor
     *
     * @return integer
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set accuracy
     *
     * @param string $accuracy
     *
     * @return Foe
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
     * @return Foe
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

    /**
     * Set species
     *
     * @param \CharacterBundle\Entity\Species $species
     *
     * @return Foe
     */
    public function setSpecies(Species $species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return \CharacterBundle\Entity\Species
     */
    public function getSpecies()
    {
        return $this->species;
    }
}
