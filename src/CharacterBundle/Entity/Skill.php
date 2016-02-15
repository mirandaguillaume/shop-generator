<?php

namespace CharacterBundle\Entity;

/**
 * Skill
 */
class Skill
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
    private $usedStats;

    /**
     * @var string
     */
    private $target;


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
     * @return Skill
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
     * @return Skill
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
     * Set usedStats
     *
     * @param string $usedStats
     *
     * @return Skill
     */
    public function setUsedStats($usedStats)
    {
        $this->usedStats = $usedStats;

        return $this;
    }

    /**
     * Get usedStats
     *
     * @return string
     */
    public function getUsedStats()
    {
        return $this->usedStats;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return Skill
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }
    /**
     * @var Job
     */
    private $job;


    /**
     * Set job
     *
     * @param Job $job
     *
     * @return Skill
     */
    public function setJob(Job $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return Job
     */
    public function getJob()
    {
        return $this->job;
    }
}
