<?php

namespace ItemBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocationSelectType extends AbstractType
{
    private $locationChoices;

    public function __construct(array $locationChoices)
    {
        $this->locationChoices = $locationChoices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->locationChoices
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
