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

    public function getRepository($category){
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

    public function getClassName($category){
        switch($category) {
            case 'weapon':
                return 'ItemBundle\Entity\Weapon';
            case 'armor':
                return 'ItemBundle\Entity\Armor';
            case 'shield':
                return 'ItemBundle\Entity\Shield';
            case 'clothing':
                return 'ItemBundle\Entity\Clothing';
            case 'common':
                return 'ItemBundle\Entity\Common';
            case 'container':
                return 'ItemBundle\Entity\Container';
            case 'herb':
                return 'ItemBundle\Entity\Herb';
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
            if (!isset($category['category_name'])){
                unset($categories[$key]);
            }
        }

        $i = 1;

        foreach($categories as $key => $category){
            if ($category['qte'] != ""){
                $amount = $category['qte'];
            } else {
                if ($i != count($categories)){
                    $amount = rand(0,$items_amount);
                } else {
                    $amount = $items_amount;
                }
            }

            $items[$key] = $this->getRandomItem($key,$amount);
            $items_amount = $items_amount - $amount;
            $i++;
        }

        return $items;
    }

    private function getCategoryAllItems($category){
        $items = $this->entityManager->getRepository($this->getRepository($category))->findAll();

        return $items;
    }

    private function getRandomItem($category,$amount){
        $qtes = array();

        $all_items = $this->getCategoryAllItems($category);

        $category_all_keys = array_keys($all_items);

        for($i = 0; $i < $amount; $i++){
            $rand_key = array_rand($category_all_keys);
            if (array_key_exists($rand_key,$qtes)){
                $qtes[$rand_key] = $qtes[$rand_key]+1;
            } else {
                $qtes[$rand_key]=1;
            }
        }

        $items = array();

        foreach($qtes as $key => $qte) {
            $items[] = array(
                'item' => $all_items[$key],
                'qte' => $qte
            );
        }

        return $items;
    }
}