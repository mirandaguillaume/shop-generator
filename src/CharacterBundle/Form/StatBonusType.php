<?php

namespace CharacterBundle\Form;

use CharacterBundle\Form\DataTransformer\BonusToArrayTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StatBonusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('stat',TextType::class)
            ->add('value',IntegerType::class)
        ;

        $builder->addModelTransformer(new BonusToArrayTransformer());
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'character_bundle_stat_bonus_type';
    }
}
