<?php

namespace ItemBundle\Entity;

/**
 * Item
 */
abstract class Item
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
     * @var int
     */
    private $price;

    /**
     * @var string
     */
    private $description;

    /**
     * @var ArrayCollection
     */
    private $instances;

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
     * @return Item
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
     * Set price
     *
     * @param integer $price
     *
     * @return Item
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->instances = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add instance
     *
     * @param \ItemBundle\Entity\SpecifiedItem $instance
     *
     * @return Item
     */
    public function addInstance(\ItemBundle\Entity\SpecifiedItem $instance)
    {
        $this->instances[] = $instance;

        return $this;
    }

    /**
     * Remove instance
     *
     * @param \ItemBundle\Entity\SpecifiedItem $instance
     */
    public function removeInstance(\ItemBundle\Entity\SpecifiedItem $instance)
    {
        $this->instances->removeElement($instance);
    }

    /**
     * Get instances
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInstances()
    {
        return $this->instances;
    }

    public function __toString(){
        return $this->getName();
    }

    public function getClassName(){
        return get_class($this);
    }

    public abstract function getType();

    public abstract function getRepositoryNaming();

    public abstract function getShopViewFragment();

    public abstract function getShopViewHeadersFragment();

    public function getFieldsCount(){
        return count(get_object_vars($this));
    }
}
