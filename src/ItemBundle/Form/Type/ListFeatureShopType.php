<?php

namespace ItemBundle\Form\Type;

use ItemBundle\Services\ItemFactory;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListFeatureShopType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $item_factory = $options['item_factory'];

        foreach($item_factory->getFeatureList() as $feature){
            $builder
                ->add($feature['label'],FeatureShopType::class,array(
                    'name' => $feature['label']
                ))
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'item_factory' => 'ItemBundle\Services\ItemFactory',
        ));
    }

    public function getName()
    {
        return 'item_bundle_list_feature_shop_type';
    }
}
