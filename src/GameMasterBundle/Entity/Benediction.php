<?php

namespace GameMasterBundle\Entity;

/**
 * Benediction
 */
class Benediction
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
    private $effect;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $cost;


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
     * @return Benediction
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
     * Set effect
     *
     * @param string $effect
     *
     * @return Benediction
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;

        return $this;
    }

    /**
     * Get effect
     *
     * @return string
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Benediction
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
     * Set cost
     *
     * @param integer $cost
     *
     * @return Benediction
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }
}

