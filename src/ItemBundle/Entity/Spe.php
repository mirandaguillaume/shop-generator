<?php

namespace ItemBundle\Entity;
use ItemBundle\Exception\OperationNotFound;

/**
 * Spe
 */
abstract class Spe
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $feature;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $operation;

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
     * Set feature
     *
     * @param string $feature
     *
     * @return Spe
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Get feature
     *
     * @return string
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Spe
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Spe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param mixed $operation
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    /**
     * @param $price
     * @return mixed
     * @throws OperationNotFound
     */
    public function processPrice($price){
        switch ($this->getOperation()){
            case 'addition':
                return $price+$this->getAmount();
            case 'multiply':
                return $price*$this->getAmount();
            default:
                throw new OperationNotFound();
        }
    }
}

