<?php

namespace ItemBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryShopType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category_name',CheckboxType::class,array(
                'label' => ucfirst($options['name']),
                'required' => false,
            ))
            ->add('qte',IntegerType::class,array(
                'label' => 'form.label.'.$options['name'].'.qte',
                'required' => false,
                'attr' => array(
                    'placeholder' => 'form.label.'.$options['name'].'.qte',
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(array(
            'name'
        ));
    }

    public function getName()
    {
        return 'item_bundle_category_shop_type';
    }
}
