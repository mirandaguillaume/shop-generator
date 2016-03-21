<?php

namespace CharacterBundle\Entity;

/**
 * StatusEffect
 */
class StatusEffect
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
     * @var array
     */
    private $stats;

    /**
     * @var string
     */
    private $type;

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
     * @return StatusEffect
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
     * Set stats
     *
     * @param array $stats
     *
     * @return StatusEffect
     */
    public function setStats($stats)
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * Get stats
     *
     * @return array
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

