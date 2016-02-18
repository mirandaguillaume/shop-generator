<?php

namespace ItemBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModifierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('operation', ChoiceType::class, array(
                'choices' => array(
                    '+' => '+',
                    '*' => '*'
                ),
            ))
            ->add('amount', IntegerType::class)
            ->addModelTransformer(new CallbackTransformer(
                function ($modifier) {

                    if ($modifier != null) {

                        return array(
                            'operation' => substr($modifier, 0, 1),
                            'amount' => substr($modifier, 1),
                        );
                    } else {
                        return array();
                    }
                },
                function ($modifier) {
                    if ($modifier != null) {
                        return $modifier['operation'] . $modifier['amount'];
                    } else {
                        return '';
                    }
                }
            ))
        ;
    }

    public function getName()
    {
        return 'item_bundle_modifier_type';
    }
}
