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

    public function getShopViewFragment()
    {
        return 'ItemBundle:Clothing:shop_fragment.html.twig';
    }

    public function getShopViewHeadersFragment()
    {
        return 'ItemBundle:Clothing:shop_fragment_headers.html.twig';
    }
}

