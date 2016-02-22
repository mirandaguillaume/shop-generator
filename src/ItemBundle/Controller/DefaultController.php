<?php

namespace ItemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ItemBundle\Form\Type\AskShopType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/generate_shop")
     */
    public function generateShopAction(Request $request)
    {
        $parameters = $request->request->all();

        if (!isset($parameters['ask_shop'])) {
            $response = $this->redirect($this->generateUrl('item_default_askshop'));
        } else {
            $parameters = $parameters['ask_shop'];

            $item_factory = $this->get('item.factory');

            $items = $item_factory->getRandomItems($parameters['total_items'], $parameters['category_list']);

            $items = $item_factory->getRandomFeatures($items, $parameters['total_features'], $parameters['feature_list']);

            if ($parameters['total_items']==null){
                $response = $this->redirect($this->generateUrl('item_default_askshop'));
            } else {
                $response = $this->render('ItemBundle:Shop:view_shop.html.twig', array(
                    'categories' => $item_factory->getCategoryList(),
                    'items' => $items
                ));
            }
        }
        return $response;
    }

    /**
     * @Route("/ask_shop")
     */
    public function askShopAction(){

        $form = $this->createForm(AskShopType::class,null,array(
            'item_factory' => $this->get('item.factory'),
            'action' => $this->generateUrl('item_default_generateshop'),
            'method' => 'POST'
        ));

        return $this->render('ItemBundle:Shop:ask_shop.html.twig',array(
            'form' => $form->createView(),
        ));
    }

}
