<?php

namespace CharacterBundle\Entity;

/**
 * MagicType
 */
class MagicType extends Type
{
    /**
     * @var string
     */
    private $season;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $spells;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->spells = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set season
     *
     * @param string $season
     *
     * @return MagicType
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
     * Add spell
     *
     * @param \CharacterBundle\Entity\Spell $spell
     *
     * @return MagicType
     */
    public function addSpell(\CharacterBundle\Entity\Spell $spell)
    {
        $this->spells[] = $spell;

        return $this;
    }

    /**
     * Remove spell
     *
     * @param \CharacterBundle\Entity\Spell $spell
     */
    public function removeSpell(\CharacterBundle\Entity\Spell $spell)
    {
        $this->spells->removeElement($spell);
    }

    /**
     * Get spells
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpells()
    {
        return $this->spells;
    }
}
