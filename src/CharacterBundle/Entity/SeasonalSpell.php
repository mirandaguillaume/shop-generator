<?php

namespace CharacterBundle\Entity;

/**
 * SeasonalSpell
 */
class SeasonalSpell extends Spell
{
    /**
     * @var string
     */
    private $season;

    /**
     * Set season
     *
     * @param string $season
     *
     * @return SeasonalSpell
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
}

