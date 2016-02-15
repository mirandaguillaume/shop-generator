<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 12/02/16
 * Time: 18:46
 */

namespace CharacterBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpellTypeSelectType extends AbstractType
{

    private $spellTypeChoices;

    public function __construct(array $spellTypeChoices)
    {
        $this->spellTypeChoices = $spellTypeChoices;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => $this->spellTypeChoices
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}