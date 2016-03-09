<?php

namespace CharacterBundle\Entity;

/**
 * ActiveSkill
 */
class ActiveSkill extends Skill
{
    /**
     * @var string
     */
    private $usedStats;

    /**
     * @var string
     */
    private $target;

    /**
     * @var string
     */
    private $macro;

    /**
     * Set macro
     *
     * @param string $macro
     *
     * @return ActiveSkill
     */
    public function setMacro($macro)
    {
        $this->macro = $macro;

        return $this;
    }

    /**
     * Get macro
     *
     * @return string
     */
    public function getMacro()
    {
        return $this->macro;
    }

    /**
     * @return string
     */
    public function getUsedStats()
    {
        return $this->usedStats;
    }

    /**
     * @param string $usedStats
     * @return Skill
     */
    public function setUsedStats($usedStats)
    {
        $this->usedStats = $usedStats;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $target
     * @return Skill
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }
}
