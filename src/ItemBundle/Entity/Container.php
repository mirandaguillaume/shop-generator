<?php

namespace ItemBundle\Entity;

/**
 * Container
 */
class Container extends Item
{

    /**
     * @var int
     */
    private $capacity;

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Container
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    public function getType()
    {
        return 'container';
    }

    public function getRepositoryNaming()
    {
        return 'ItemBundle:Container';
    }

    public function getShopViewFragment()
    {
        return 'ItemBundle:Container:shop_fragment.html.twig';
    }

    public function getShopViewHeadersFragment()
    {
        return 'ItemBundle:Container:shop_fragment_headers.html.twig';
    }
}

