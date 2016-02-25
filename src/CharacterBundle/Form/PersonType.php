<?php

namespace CharacterBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'form.actor.name'
            ))
            ->add('first_class', EntityType::class, array(
                'class' => 'CharacterBundle\Entity\Job',
                'choice_label' => 'name',
                'label' => 'form.character.first_class'
            ))
            ->add('first_type', EntityType::class, array(
                'class' => 'CharacterBundle\Entity\Type',
                'choice_label' => 'name',
                'label' => 'form.character.first_type'
            ))
            ->add('gender', TextType::class, array(
                'label' => 'form.character.gender'
            ))
            ->add('age', IntegerType::class, array(
                'label' => 'form.character.age'
            ))
            ->add('personalItem', TextType::class, array(
                'label' => 'form.character.personal_item'
            ))
            ->add('appearance', TextareaType::class, array(
                'label' => 'form.character.appearance',
                'required' => false,
            ))
            ->add('hometown', TextareaType::class, array(
                'label' => 'form.character.hometown',
                'required' => false,
            ))
            ->add('notes', TextareaType::class, array(
                'label' => 'form.character.notes',
                'required' => false,
            ))
            ->add('str',IntegerType::class, array(
                'label' => 'form.actor.str'
            ))
            ->add('dex', IntegerType::class, array(
                'label' => 'form.actor.dex'
            ))
            ->add('int', IntegerType::class, array(
                'label' => 'form.actor.int'
            ))
            ->add('spi', IntegerType::class, array(
                'label' => 'form.actor.spi'
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CharacterBundle\Entity\Person'
        ));
    }
}
