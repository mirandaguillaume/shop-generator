<?php

namespace GameMasterBundle\Entity;

/**
 * Ryuujin
 */
class Ryuujin
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
    private $race;

    /**
     * @var int
     */
    private $level;

    /**
     * @var string
     */
    private $alternativeShape;

    /**
     * @var string
     */
    private $artifact;

    /**
     * @var string
     */
    private $artifactInscription;

    /**
     * @var int
     */
    private $maxLp;

    /**
     * @var int
     */
    private $lp;

    /**
     * @var string
     */
    private $looks;

    /**
     * @var string
     */
    private $personality;

    /**
     * @var string
     */
    private $goal;

    /**
     * @var string
     */
    private $livingQuarters;


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
     * @return Ryuujin
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
     * Set race
     *
     * @param string $race
     *
     * @return Ryuujin
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Ryuujin
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
     * Set alternativeShape
     *
     * @param string $alternativeShape
     *
     * @return Ryuujin
     */
    public function setAlternativeShape($alternativeShape)
    {
        $this->alternativeShape = $alternativeShape;

        return $this;
    }

    /**
     * Get alternativeShape
     *
     * @return string
     */
    public function getAlternativeShape()
    {
        return $this->alternativeShape;
    }

    /**
     * Set artifact
     *
     * @param string $artifact
     *
     * @return Ryuujin
     */
    public function setArtifact($artifact)
    {
        $this->artifact = $artifact;

        return $this;
    }

    /**
     * Get artifact
     *
     * @return string
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    /**
     * Set artifactInscription
     *
     * @param string $artifactInscription
     *
     * @return Ryuujin
     */
    public function setArtifactInscription($artifactInscription)
    {
        $this->artifactInscription = $artifactInscription;

        return $this;
    }

    /**
     * Get artifactInscription
     *
     * @return string
     */
    public function getArtifactInscription()
    {
        return $this->artifactInscription;
    }

    /**
     * Set maxLp
     *
     * @param integer $maxLp
     *
     * @return Ryuujin
     */
    public function setMaxLp($maxLp)
    {
        $this->maxLp = $maxLp;

        return $this;
    }

    /**
     * Get maxLp
     *
     * @return int
     */
    public function getMaxLp()
    {
        return $this->maxLp;
    }

    /**
     * Set lp
     *
     * @param integer $lp
     *
     * @return Ryuujin
     */
    public function setLp($lp)
    {
        $this->lp = $lp;

        return $this;
    }

    /**
     * Get lp
     *
     * @return int
     */
    public function getLp()
    {
        return $this->lp;
    }

    /**
     * Set looks
     *
     * @param string $looks
     *
     * @return Ryuujin
     */
    public function setLooks($looks)
    {
        $this->looks = $looks;

        return $this;
    }

    /**
     * Get looks
     *
     * @return string
     */
    public function getLooks()
    {
        return $this->looks;
    }

    /**
     * Set personality
     *
     * @param string $personality
     *
     * @return Ryuujin
     */
    public function setPersonality($personality)
    {
        $this->personality = $personality;

        return $this;
    }

    /**
     * Get personality
     *
     * @return string
     */
    public function getPersonality()
    {
        return $this->personality;
    }

    /**
     * Set goal
     *
     * @param string $goal
     *
     * @return Ryuujin
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;

        return $this;
    }

    /**
     * Get goal
     *
     * @return string
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Set livingQuarters
     *
     * @param string $livingQuarters
     *
     * @return Ryuujin
     */
    public function setLivingQuarters($livingQuarters)
    {
        $this->livingQuarters = $livingQuarters;

        return $this;
    }

    /**
     * Get livingQuarters
     *
     * @return string
     */
    public function getLivingQuarters()
    {
        return $this->livingQuarters;
    }
}

