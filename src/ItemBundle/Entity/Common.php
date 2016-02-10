<?php

namespace ItemBundle\Entity;

/**
 * Common
 */
class Common extends Item
{
    public function getType()
    {
        return 'common';
    }

    public function getRepositoryNaming()
    {
        return 'ItemBundle:Common';
    }
}

