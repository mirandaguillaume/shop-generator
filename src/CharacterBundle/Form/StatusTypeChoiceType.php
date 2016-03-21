<?php

namespace CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StatusTypeChoiceType extends AbstractType
{
    private $statusTypeChoices;

    public function __construct(array $statusTypeChoices)
    {
        $this->statusTypeChoices = $statusTypeChoices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->statusTypeChoices
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
