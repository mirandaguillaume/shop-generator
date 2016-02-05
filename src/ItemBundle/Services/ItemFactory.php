<?php

namespace ItemBundle\Services;
use Doctrine\ORM\EntityManager;
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

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(FormFactory $formFactory, EntityManager $entityManager){
        $this->formFactory = $formFactory;
        $this->entityManager = $entityManager;
    }

    public function getClassName($category){
        switch($category) {
            case 'weapon':
                return 'ItemBundle:Weapon';
            case 'armor':
                return 'ItemBundle:Armor';
            case 'shield':
                return 'ItemBundle:Shield';
            case 'clothing':
                return 'ItemBundle:Clothing';
            case 'common':
                return 'ItemBundle:Common';
            case 'container':
                return 'ItemBundle:Container';
            case 'herb':
                return 'ItemBundle:Herb';
        }
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

    public function getRandomItems($total_items,array $categories){

        $items = array();

        $items_amount = $total_items;

        foreach($categories as $key => $category){
            if (isset($category['category_name'])){
                if ($category['qte'] != ""){
                    $amount = $category['qte'];
                } else {
                    if ($key != count($categories)){
                        $amount = rand(0,$items_amount);
                    } else {
                        $amount = $items_amount;
                    }
                }

                $items = array_merge($items,$this->getRandomItem($key,$amount));
                $items_amount-=$amount;
            } else {
                unset($categories[$key]);
            }
        }

        return $items;
    }

    private function getCategoryAllItems($category){
        $items = $this->entityManager->getRepository($this->getClassName($category))->findAll();

        return $items;
    }

    private function getRandomItem($category,$amount){
        $items = array();

        $all_items = $this->getCategoryAllItems($category);

        $category_all_keys = array_keys($all_items);

        var_dump($category_all_keys);

        for($i = 0; $i < $amount; $i++){
            $rand_key = array_rand($category_all_keys);
            if (array_key_exists($rand_key,$items)){
                $items[$rand_key]++;
            } else {
                $items[$rand_key]=1;
            }
        }

        var_dump($items);

        return $items;
    }
}