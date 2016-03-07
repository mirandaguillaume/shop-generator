<?php

namespace CharacterBundle\Entity;

/**
 * Type
 */
class Type
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $bonuses;

    /**
     * @var array
     */
    private $stats_bonuses;

    public function __construct(){
        $this->stats_bonuses = array();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Type
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set bonuses
     *
     * @param string $bonuses
     *
     * @return Type
     */
    public function setBonuses($bonuses)
    {
        $this->bonuses = $bonuses;

        return $this;
    }

    /**
     * Get bonuses
     *
     * @return string
     */
    public function getBonuses()
    {
        return $this->bonuses;
    }

    public function __toString(){
        if ($this->name)
            return $this->name;
        else
            return 'Nouveau type';
    }

//    /**
//     * Set statsBonuses
//     *
//     * @param array $statsBonuses
//     *
//     * @return Type
//     */
//    public function setStatsBonuses($statsBonuses)
//    {
//        var_dump('Using set');
//
//        $this->stats_bonuses = $statsBonuses;
//
//        return $this;
//    }

    /**
     * Get statsBonuses
     *
     * @return array
     */
    public function getStatsBonuses()
    {
        return $this->stats_bonuses;
    }

    public function addStatsBonus($stat_bonus){
        $this->stats_bonuses[$stat_bonus['stat']] = $stat_bonus;
    }

    public function removeStatsBonus($stat_bonus){
        unset($this->stats_bonuses[$stat_bonus['stat']]);
    }
}
