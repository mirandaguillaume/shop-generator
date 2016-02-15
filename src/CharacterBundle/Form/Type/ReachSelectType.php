<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 12/02/16
 * Time: 18:36
 */

namespace CharacterBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReachSelectType extends AbstractType
{

    private $reachChoices;

    public function __construct(array $reachChoices)
    {
        $this->reachChoices = $reachChoices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->reachChoices
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}