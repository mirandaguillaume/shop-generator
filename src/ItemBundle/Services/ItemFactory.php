<?php

namespace ItemBundle\Services;
use ItemBundle\Form\CategoryShopType;
use Symfony\Component\Form\FormFactory;

/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 05/02/16
 * Time: 12:10
 */
class ItemFactory
{

    /**
     * @var FormFactory
     */
    private $formFactory;

    public function __construct(FormFactory $formFactory){
        $this->formFactory = $formFactory;
    }

    /**
     * @return array
     */
    public function getCategoryList(){
        return array(
            array(
                'label' => 'weapon'
            ),array(
                'label' => 'armor'
            ),array(
                'label' => 'shield'
            ),array(
                'label' => 'clothing'
            ), array(
                'label' => 'common'
            ),array(
                'label' => 'container'
            ),array(
                'label' => 'herb'
            )
        );
    }

    public function getCategoryForms(){
        $forms = array();

        foreach($this->getCategoryList() as $category){
            $forms[] = $this->formFactory->create(CategoryShopType::class,null,array(
                'name' => $category['label']
            ));
        }

        return $forms;
    }

}