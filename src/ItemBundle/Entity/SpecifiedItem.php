<?php

namespace ItemBundle\Entity;
use ItemBundle\Traits\MetaTrait;

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
     * Set item
     *
     * @param \ItemBundle\Entity\Item $item
     *
     * @return SpecifiedItem
     */
    public function setItem(\ItemBundle\Entity\Item $item = null)
    {
        $this->item = $item;

        foreach(get_class_methods($item) as $methods){

        }

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
        $this->features->add($feature);

        return $this;
    }

    /**
     * @param Spe $feature
     * @return bool
     */
    public function hasFeature(Spe $feature){
        return $this->features->contains($feature);
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

    public function getName(){
        if ($this->name != NULL) {
            $result = $this->name;
        } else {
            $result = $this->item->getName();
            foreach ($this->features as $feature) {
                $result = $result . ' ' . $feature->getFeature();
            }
        }
        return $result;
    }

    public function setName($name){
        $this->name = $name;

        return $this;
    }

    public function getPrice(){

        $bonuses = '';

        foreach($this->features as $feature) {
            $bonuses = $bonuses.$feature->getPriceModifier();
        }

        return eval('return '.$this->item->getPrice().$bonuses.';');
    }
    public function getDescription(){
        $full_description = $this->item->getDescription();
        foreach($this->features as $feature){
            $full_description = $full_description.' '.$feature->getDescription();
        }
        return $full_description;
    }

    public function __toString(){
        return $this->getName();
    }
}
