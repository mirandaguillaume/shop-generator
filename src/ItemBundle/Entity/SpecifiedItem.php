<?php

namespace ItemBundle\Entity;

/**
 * SpecifiedItem
 */
class SpecifiedItem
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Item
     */
    private $item;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $features;

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
     * @var string
     */
    private $name;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->features = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SpecifiedItem
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

//    /**
//     * Get name
//     *
//     * @return string
//     */
//    public function getName()
//    {
//        return $this->name;
//    }

    /**
     * Set item
     *
     * @param \ItemBundle\Entity\Item $item
     *
     * @return SpecifiedItem
     */
    public function setItem(\ItemBundle\Entity\Item $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \ItemBundle\Entity\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Add feature
     *
     * @param \ItemBundle\Entity\Spe $feature
     *
     * @return SpecifiedItem
     */
    public function addFeature(\ItemBundle\Entity\Spe $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \ItemBundle\Entity\Spe $feature
     */
    public function removeFeature(\ItemBundle\Entity\Spe $feature)
    {
        $this->features->removeElement($feature);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatures()
    {
        return $this->features;
    }
    /**
     * @var integer
     */
    private $quantity;


    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return SpecifiedItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getName(){
        $result = $this->item->getName();
        foreach($this->features as $feature){
            $result = $result.' '.$feature->getFeature();
        }
        return $result;
    }

    public function __toString(){
        return $this->getName();
    }
}
