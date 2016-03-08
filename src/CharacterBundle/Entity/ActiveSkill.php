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
}
