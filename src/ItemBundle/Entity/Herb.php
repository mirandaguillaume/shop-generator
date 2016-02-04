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
}

