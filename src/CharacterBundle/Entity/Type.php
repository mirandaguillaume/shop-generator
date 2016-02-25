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
     * @var string
     */
    private $bonuses;


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
}
