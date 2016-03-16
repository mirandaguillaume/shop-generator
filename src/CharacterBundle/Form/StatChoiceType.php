<?php

namespace CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StatChoiceType extends AbstractType
{
    private $statChoices;

    public function __construct(array $statChoices)
    {
        $this->statChoices = $statChoices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->statChoices
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
