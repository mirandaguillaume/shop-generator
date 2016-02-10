<?php

namespace ItemBundle\Entity;

/**
 * Clothing
 */
class Clothing extends Equipment
{

    public function getType()
    {
        return 'clothing';
    }

    public function getRepositoryNaming()
    {
        return 'ItemBundle:Clothing';
    }
}

