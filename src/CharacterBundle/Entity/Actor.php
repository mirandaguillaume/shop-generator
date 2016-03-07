<?php

namespace CharacterBundle\Entity;

/**
 * Actor
 */
abstract class Actor
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
     * @var int
     */
    private $level;

    /**
     * @var int
     */
    private $maxHp;

    /**
     * @var int
     */
    private $hp;

    /**
     * @var int
     */
    private $maxMp;

    /**
     * @var int
     */
    private $mp;

    /**
     * @var int
     */
    private $str;

    /**
     * @var int
     */
    private $dex;

    /**
     * @var int
     */
    private $intelligence;

    /**
     * @var int
     */
    private $spi;

    /**
     * @var int
     */
    private $actorCondition;

    /**
     * @var int
     */
    private $initiative;

    /**
     * @var string
     */
    private $name_slug;

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
     * @return Actor
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
     * Set level
     *
     * @param integer $level
     *
     * @return Actor
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set maxHp
     *
     * @param integer $maxHp
     *
     * @return Actor
     */
    public function setMaxHp($maxHp)
    {
        $this->maxHp = $maxHp;

        if ($this->getMaxHp() < $this->getHp()){
            $this->setHp($this->getMaxHp());
        }

        return $this;
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
     * Set hp
     *
     * @param integer $hp
     *
     * @return Actor
     */
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get hp
     *
     * @return int
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set maxMp
     *
     * @param integer $maxMp
     *
     * @return Actor
     */
    public function setMaxMp($maxMp)
    {
        $this->maxMp = $maxMp;

        if ($this->getMaxMp() < $this->getMp()){
            $this->setMp($this->getMaxMp());
        }

        return $this;
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
     * Set mp
     *
     * @param integer $mp
     *
     * @return Actor
     */
    public function setMp($mp)
    {
        $this->mp = $mp;

        return $this;
    }

    /**
     * Get mp
     *
     * @return int
     */
    public function getMp()
    {
        return $this->mp;
    }

    /**
     * Set str
     *
     * @param integer $str
     *
     * @return Actor
     */
    public function setStr($str)
    {
        $this->str = $str;

        $this->setMaxHp($this->str*2);

        return $this;
    }

    /**
     * Get str
     *
     * @return int
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Set dex
     *
     * @param int $dex
     *
     * @return Actor
     */
    public function setDex($dex)
    {
        $this->dex = $dex;

        return $this;
    }

    /**
     * Get dex
     *
     * @return int
     */
    public function getDex()
    {
        return $this->dex;
    }

    /**
     * Set intelligence
     *
     * @param integer $int
     *
     * @return Actor
     */
    public function setInt($int)
    {
        $this->intelligence = $int;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return int
     */
    public function getInt()
    {
        return $this->intelligence;
    }

    /**
     * Set spi
     *
     * @param integer $spi
     *
     * @return Actor
     */
    public function setSpi($spi)
    {
        $this->spi = $spi;

        $this->setMaxMp($this->str*2);

        return $this;
    }

    /**
     * Get spi
     *
     * @return int
     */
    public function getSpi()
    {
        return $this->spi;
    }

    /**
     * Set actorCondition
     *
     * @param integer $condition
     *
     * @return Actor
     */
    public function setCondition($condition)
    {
        $this->actorCondition = $condition;

        return $this;
    }

    /**
     * Get actorCondition
     *
     * @return int
     */
    public function getCondition()
    {
        return $this->actorCondition;
    }

    /**
     * Set initiative
     *
     * @param integer $initiative
     *
     * @return Actor
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;

        return $this;
    }

    /**
     * Get initiative
     *
     * @return int
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     *
     * @return Actor
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return integer
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set actorCondition
     *
     * @param integer $actorCondition
     *
     * @return Actor
     */
    public function setActorCondition($actorCondition)
    {
        $this->actorCondition = $actorCondition;

        return $this;
    }

    /**
     * Get actorCondition
     *
     * @return integer
     */
    public function getActorCondition()
    {
        return $this->actorCondition;
    }

    /**
     * Set nameSlug
     *
     * @param string $nameSlug
     *
     * @return Actor
     */
    public function setNameSlug($nameSlug)
    {
        $this->name_slug = $nameSlug;

        return $this;
    }

    /**
     * Get nameSlug
     *
     * @return string
     */
    public function getNameSlug()
    {
        return $this->name_slug;
    }
}
