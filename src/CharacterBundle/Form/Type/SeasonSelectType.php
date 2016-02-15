<?php

namespace CharacterBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SeasonSelectType extends AbstractType
{

    private $seasonChoices;

    public function __construct(array $seasonChoices)
    {
        $this->seasonChoices = $seasonChoices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->seasonChoices
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
