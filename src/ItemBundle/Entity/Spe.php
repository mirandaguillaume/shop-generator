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
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $price_modifier;

    /**
     * @var array
     */
    private $bonus_modifiers;

    /**
     * @var string
     */
    private $operation;

    /**
     * @var float
     */
    private $amount;

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
     * Set priceModifier
     *
     * @param string $priceModifier
     *
     * @return Spe
     */
    public function setPriceModifier($priceModifier)
    {
        $this->price_modifier = $priceModifier;

        return $this;
    }

    /**
     * Get priceModifier
     *
     * @return string
     */
    public function getPriceModifier()
    {
        return $this->price_modifier;
    }

    /**
     * Set bonusModifiers
     *
     * @param array $bonusModifiers
     *
     * @return Spe
     */
    public function setBonusModifiers($bonusModifiers)
    {
        $this->bonus_modifiers = $bonusModifiers;

        return $this;
    }

    /**
     * @param $bonusModifier
     * @return $this
     */
    public function addBonusModifier($bonusModifier){
        $this->bonus_modifiers[$bonusModifier['name']] = $bonusModifier['calcul'];

        return $this;
    }

    /**
     * Get bonusModifiers
     *
     * @return array
     */
    public function getBonusModifiers()
    {
        return $this->bonus_modifiers;
    }

    public function __construct(){
        $this->bonus_modifiers = array();
    }

    /**
     * Set operation
     *
     * @param string $operation
     *
     * @return Spe
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
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
}
