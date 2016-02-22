<?php

namespace ItemBundle\Services;
use Doctrine\ORM\EntityManager;
use ItemBundle\Entity\SpecifiedItem;
use ItemBundle\Form\Type\CategoryShopType;
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

    /**
     * @var array
     */
    private $list_categories;

    /**
     * @param FormFactory $formFactory
     * @param EntityManager $entityManager
     */
    public function __construct(FormFactory $formFactory, EntityManager $entityManager){
        $this->formFactory = $formFactory;
        $this->entityManager = $entityManager;
        $this->list_categories = $this->entityManager->getRepository('ItemBundle:Item')->getAllCategories();
    }

    public function getRepository($category){
        return $this->list_categories[$category]['repositoryNaming'];
    }

    public function getClassName($category){
        return $this->list_categories[$category]['className'];
    }

    /**
     * @return array
     */
    public function getCategoryList(){
        return $this->list_categories;
    }

    public function getFeaturesListByName(){


        $features = $this->entityManager->getRepository('ItemBundle:SpeItem')->findAll();

        foreach($features as $key => $feature){
            $features[$feature->getFeature()] = $feature;
            unset($features[$key]);
        }

        return $features;
    }

    /**
     * @return array
     */
    public function getFeatureList(){
        return $this->entityManager->getRepository('ItemBundle:SpeItem')->findAllNames();
    }

    public function getRandomItems($total_items,array $categories){

        $items = array();

        $items_amount = $total_items;

        $unset_categories = array();

        foreach($categories as $key => $category){
            if (!isset($category['category_name'])){
                $unset_categories[$key] = $categories[$key];
                unset($categories[$key]);
            }
        }

        if (count($categories) == 0){
            $categories = $unset_categories;
        }

        $i = 1;

        $rand_qtes = array();

        foreach($categories as $key => $category){
            if ($category['qte'] != ""){
                $amount = $category['qte'];
                $items[$key] = $this->getRandomItem($key,$amount);
                $items_amount = $items_amount - $amount;
                $i++;
            } else {
                $rand_qtes[] = $key;
            }
        }

        foreach ($rand_qtes as $rand_qte){
            if ($i != count($categories)){
                $amount = rand(0,$items_amount);
            } else {
                $amount = $items_amount;
            }
            $items[$rand_qte] = $this->getRandomItem($rand_qte,$amount);
            $items_amount = $items_amount - $amount;
            $i++;
        }

        return $items;
    }

    public function getAllFeatures(){
        return $this->entityManager->getRepository('ItemBundle:SpeItem')->findAll();
    }

    public function getRandomFeatures($items, $total_features, $total_items, array $features){

        $features_amount = $total_features;

        $unset_features = array();

        $features_names = array();

        foreach($features as $key => $feature){
            if (!isset($feature['feature_name'])){
                $unset_features[$key] = $features[$key];
                unset($features[$key]);
            }
        }

        $features_data = $this->getFeaturesListByName();

        if (count($features) == 0){
            $features = $unset_features;
        }

        $total = 0;

        $rand_qtes = array();

        foreach($features as $key => $feature){
            if ($feature['qte'] != ""){
                $new_items = array();
                $amount = $feature['qte'];
                for ($i = 0;$i<$amount;$i++) {
                    do {
                        $rand_category = array_rand($items);
                    } while (count($items[$rand_category]) === 0);
                    $rand_item = array_rand($items[$rand_category]);
                    $item = $items[$rand_category][$rand_item]['item'];
                    $items[$rand_category][$rand_item]['qte']--;
                    if ($items[$rand_category][$rand_item]['qte'] === 0){
                        unset($items[$rand_category][$rand_item]);
                    }
                    $item->addFeature($features_data[$key]);
                    if (!isset($new_items[$rand_category])){
                        $new_items[$rand_category] = array();
                    }
                    $new_items[$rand_category][] = array(
                        'item' => $item,
                        'qte' => 1,
                    );
                }
                foreach(array_keys($new_items) as $key){
                    array_merge($items[$key],$new_items[$key]);
                }
                $total++;
                $features_amount = $features_amount - $amount;
            } else {
                $rand_qtes[] = $key;
            }
        }

        foreach ($rand_qtes as $rand_qte){

            $new_items = array();

            if ($total != count($features)){
                $amount = rand(0,$features_amount);
            } else {
                $amount = $features_amount;
            }
            for ($i = 0;$i<$amount;$i++) {
                do {
                    $rand_category = array_rand($items);
                } while (count($items[$rand_category]) === 0);
                $rand_item = array_rand($items[$rand_category]);
                $item = $items[$rand_category][$rand_item]['item'];
                $items[$rand_category][$rand_item]['qte']--;
                if ($items[$rand_category][$rand_item]['qte'] === 0){
                    unset($items[$rand_category][$rand_item]);
                }
                $item->addFeature($features_data[$rand_qte]);

                if (!isset($new_items[$rand_category])){
                    $new_items[$rand_category] = array();
                }
                $new_items[$rand_category][] = array(
                    'item' => $item,
                    'qte' => 1,
                );
            }
            foreach(array_keys($new_items) as $key){
                array_merge($items[$key],$new_items[$key]);
            }
            $total++;
            $features_amount = $features_amount - $amount;
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
            $item = new SpecifiedItem();
            $item->setItem($all_items[$key]);
            $items[] = array(
                'item' => $item,
                'qte' => $qte
            );
        }

        return $items;
    }
}
