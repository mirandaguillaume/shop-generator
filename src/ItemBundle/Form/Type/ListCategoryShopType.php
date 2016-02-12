<?php

namespace ItemBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListCategoryShopType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $item_factory = $options['item_factory'];

        foreach($item_factory->getCategoryList() as $key => $category){
            $builder
                ->add($key,CategoryShopType::class,array(
                    'name' => $key
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
        return 'item_bundle_list_category_shop_type';
    }
}
