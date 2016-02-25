<?php

namespace CharacterBundle\Entity;
use UserBundle\Entity\User;

/**
 * Person
 */
class Person extends Actor
{

    /**
     * @var int
     */
    private $xp;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $personalItem;

    /**
     * @var string
     */
    private $appearance;

    /**
     * @var string
     */
    private $hometown;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var int
     */
    private $fumblePoints;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Job
     */
    private $first_class;

    /**
     * @var Job
     */
    private $secondary_class;

    /**
     * @var Type
     */
    private $first_type;

    /**
     * @var Type
     */
    private $secondary_type;

    /**
     * Set xp
     *
     * @param integer $xp
     *
     * @return Person
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return int
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Person
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Person
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set personalItem
     *
     * @param string $personalItem
     *
     * @return Person
     */
    public function setPersonalItem($personalItem)
    {
        $this->personalItem = $personalItem;

        return $this;
    }

    /**
     * Get personalItem
     *
     * @return string
     */
    public function getPersonalItem()
    {
        return $this->personalItem;
    }

    /**
     * Set appearance
     *
     * @param string $appearance
     *
     * @return Person
     */
    public function setAppearance($appearance)
    {
        $this->appearance = $appearance;

        return $this;
    }

    /**
     * Get appearance
     *
     * @return string
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * Set hometown
     *
     * @param string $hometown
     *
     * @return Person
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;

        return $this;
    }

    /**
     * Get hometown
     *
     * @return string
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Person
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set fumblePoints
     *
     * @param integer $fumblePoints
     *
     * @return Person
     */
    public function setFumblePoints($fumblePoints)
    {
        $this->fumblePoints = $fumblePoints;

        return $this;
    }

    /**
     * Get fumblePoints
     *
     * @return int
     */
    public function getFumblePoints()
    {
        return $this->fumblePoints;
    }

    public function setDefaultValues(){
        $this->xp = 0;
        $this->fumblePoints = 0;
        $this->setLevel(1);
        $this->setMaxHp($this->getStr()*2);
        $this->setMaxMp($this->getSpi()*2);
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Person
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set firstClass
     *
     * @param \CharacterBundle\Entity\Job $firstClass
     *
     * @return Person
     */
    public function setFirstClass(\CharacterBundle\Entity\Job $firstClass = null)
    {
        $this->first_class = $firstClass;

        return $this;
    }

    /**
     * Get firstClass
     *
     * @return \CharacterBundle\Entity\Job
     */
    public function getFirstClass()
    {
        return $this->first_class;
    }

    /**
     * Set secondaryClass
     *
     * @param \CharacterBundle\Entity\Job $secondaryClass
     *
     * @return Person
     */
    public function setSecondaryClass(\CharacterBundle\Entity\Job $secondaryClass = null)
    {
        $this->secondary_class = $secondaryClass;

        return $this;
    }

    /**
     * Get secondaryClass
     *
     * @return \CharacterBundle\Entity\Job
     */
    public function getSecondaryClass()
    {
        return $this->secondary_class;
    }

    /**
     * Set firstType
     *
     * @param \CharacterBundle\Entity\Type $firstType
     *
     * @return Person
     */
    public function setFirstType(\CharacterBundle\Entity\Type $firstType = null)
    {
        $this->first_type = $firstType;

        return $this;
    }

    /**
     * Get firstType
     *
     * @return \CharacterBundle\Entity\Type
     */
    public function getFirstType()
    {
        return $this->first_type;
    }

    /**
     * Set secondaryType
     *
     * @param \CharacterBundle\Entity\Type $secondaryType
     *
     * @return Person
     */
    public function setSecondaryType(\CharacterBundle\Entity\Type $secondaryType = null)
    {
        $this->secondary_type = $secondaryType;

        return $this;
    }

    /**
     * Get secondaryType
     *
     * @return \CharacterBundle\Entity\Type
     */
    public function getSecondaryType()
    {
        return $this->secondary_type;
    }
}
