<?php

namespace GameMasterBundle\Entity;

/**
 * Race
 */
class Race
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
    private $artifacts;

    /**
     * @var array
     */
    private $benedictions;


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
     * @return Race
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
     * Set artifacts
     *
     * @param array $artifacts
     *
     * @return Race
     */
    public function setArtifacts($artifacts)
    {
        $this->artifacts = $artifacts;

        return $this;
    }

    /**
     * Get artifacts
     *
     * @return array
     */
    public function getArtifacts()
    {
        return $this->artifacts;
    }

    /**
     * Set benedictions
     *
     * @param array $benedictions
     *
     * @return Race
     */
    public function setBenedictions($benedictions)
    {
        $this->benedictions = $benedictions;

        return $this;
    }

    /**
     * Get benedictions
     *
     * @return array
     */
    public function getBenedictions()
    {
        return $this->benedictions;
    }
}

