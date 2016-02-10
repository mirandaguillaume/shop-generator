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

    public function getShopViewFragment()
    {
        return 'ItemBundle:Common:shop_fragment.html.twig';
    }

    public function getShopViewHeadersFragment()
    {
        return 'ItemBundle:Common:shop_fragment_headers.html.twig';
    }
}

