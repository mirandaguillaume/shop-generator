<?php

namespace ItemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ItemBundle\Form\AskShopType;

class DefaultController extends Controller
{
    /**
     * @Route("/generate_shop")
     */
    public function generateShopAction()
    {
        $em = $this->getDoctrine();
        $common_items = $em->getRepository('ItemBundle:Common')->findAll();

        $rand_common_item = array_rand($common_items,1);

        return $this->render(':default:index.html.twig',array(
            ''
        ));
    }

    /**
     * @Route("/ask_shop")
     */
    public function askShopAction(){

        $form = $this->createForm(AskShopType::class,null,array(
            'item_factory' => $this->get('item.factory')
        ));

        return $this->render('ItemBundle:Shop:ask_shop.html.twig',array(
            'form' => $form->createView(),
        ));
    }

}
