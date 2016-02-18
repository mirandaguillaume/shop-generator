<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 18/02/16
 * Time: 16:43
 */

namespace ItemBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class BonusModifierType extends AbstractType
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
            ->add('stat', TextType::class)
            ->addModelTransformer(new CallbackTransformer(
                function ($modifier) {
                    if ($modifier != null) {
                        return array(
                            'stat' => $modifier['stat'],
                            'operation' => substr($modifier['modifier'], 0, 1),
                            'amount' => substr($modifier['modifier'], 1),
                        );
                    } else {
                        return array();
                    }
                },
                function ($modifier) {
                    if ($modifier != null) {
                        return array(
                            'stat' => $modifier['stat'],
                            'modifier' => $modifier['operation'] . $modifier['amount']
                        );
                    } else {
                        return null;
                    }
                }
            ))
        ;
    }

    public function getName()
    {
        return 'item_bundle_bonus_modifier_type';
    }
}