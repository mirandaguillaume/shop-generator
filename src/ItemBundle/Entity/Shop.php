<?php

namespace ItemBundle\Entity;

/**
 * Shop
 */
class Shop
{
    /**
     * @var int
     */
    private $id;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add item
     *
     * @param \ItemBundle\Entity\SpecifiedItem $item
     *
     * @return Shop
     */
    public function addItem(\ItemBundle\Entity\SpecifiedItem $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \ItemBundle\Entity\SpecifiedItem $item
     */
    public function removeItem(\ItemBundle\Entity\SpecifiedItem $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }
}
