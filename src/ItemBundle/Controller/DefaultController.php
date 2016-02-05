<?php

namespace ItemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ItemBundle\Form\AskShopType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/generate_shop")
     */
    public function generateShopAction(Request $request)
    {
        $parameters = $request->request->all();

        $parameters = $parameters['ask_shop'];

        $items = $this->get('item.factory')->getRandomItems($parameters['total_items'],$parameters['category_list']);

        return $this->render('ItemBundle:Default:index.html.twig',array(
            'items' => $items
        ));
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
