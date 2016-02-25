<?php

namespace UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var ArrayCollection
     */
    protected $characters;

    public function __construct()
    {
        parent::__construct();
        $this->characters = new ArrayCollection();
    }
}

