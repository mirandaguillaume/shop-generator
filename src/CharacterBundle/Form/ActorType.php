<?php

namespace CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('level')
            ->add('maxHp')
            ->add('hp')
            ->add('maxMp')
            ->add('mp')
            ->add('str')
            ->add('dex')
            ->add('intelligence')
            ->add('spi')
            ->add('actorCondition')
            ->add('initiative')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CharacterBundle\Entity\Actor'
        ));
    }
}
