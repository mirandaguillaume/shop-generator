<?php

namespace ItemBundle\Form;

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
            ->add($options['name'],CheckboxType::class)
            ->add($options['name'].'_qte',IntegerType::class,array(
                'label' => 'form.label.'.$options['name'].'.qte'
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
