<?php

namespace ItemBundle\Entity;

/**
 * Herb
 */
class Herb extends Item
{

    /**
     * @var string
     */
    private $effect;

    /**
     * @var string
     */
    private $part;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var string
     */
    private $terrain;

    /**
     * Set effect
     *
     * @param string $effect
     *
     * @return Herb
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;

        return $this;
    }

    /**
     * Get effect
     *
     * @return string
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Set part
     *
     * @param string $part
     *
     * @return Herb
     */
    public function setPart($part)
    {
        $this->part = $part;

        return $this;
    }

    /**
     * Get part
     *
     * @return string
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Herb
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set terrain
     *
     * @param string $terrain
     *
     * @return Herb
     */
    public function setTerrain($terrain)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return string
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    public function getType()
    {
        return 'herb';
    }

    public function getRepositoryNaming()
    {
        return 'ItemBundle:Herb';
    }

    public function getShopViewFragment()
    {
        return 'ItemBundle:Herb:shop_fragment.html.twig';
    }

    public function getShopViewHeadersFragment()
    {
        return 'ItemBundle:Herb:shop_fragment_headers.html.twig';
    }
}
