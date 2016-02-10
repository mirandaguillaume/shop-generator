<?php

namespace ItemBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AskShopType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $item_factory = $options['item_factory'];

        $builder
            ->add('total_items',IntegerType::class,array(
                'label' => 'form.label.total_items',
                'attr' => array(
                    'placeholder' => 'form.label.total_items'
                )
            ))
            ->add('total_features',IntegerType::class,array(
                'label' => 'form.label.total_features',
                'attr' => array(
                    'placeholder' => 'form.label.total_features'
                ),
                'required' => false,
            ))
            ->add('category_list',ListCategoryShopType::class,array(
                'item_factory' => $item_factory,
                'label' => 'form.label.categories',
            ))
            ->add('feature_list',ListFeatureShopType::class,array(
                'item_factory' => $item_factory,
                'label' => 'form.label.features',
            ))
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'item_factory' => 'ItemBundle\Services\ItemFactory',
        ));
    }

    public function getName()
    {
        return 'item_bundle_ask_shop_type';
    }
}
