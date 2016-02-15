<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 15/02/16
 * Time: 12:05
 */

namespace CharacterBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpellLevelSelectType extends AbstractType
{

    private $spellLevelChoices;

    public function __construct(array $spellLevelChoices)
    {
        $this->spellLevelChoices = $spellLevelChoices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->spellLevelChoices
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}