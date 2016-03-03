<?php

namespace CharacterBundle\Controller;

use CharacterBundle\Entity\Person;
use CharacterBundle\Form\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/character")
 *
 * Class DefaultController
 * @package CharacterBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/new")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function createCharacter(Request $request){
        $em = $this->get('doctrine.orm.entity_manager');

        $character = new Person();

        $pusher = $this->container->get('lopi_pusher.pusher');

        $data['message'] = 'hello world';
        $pusher->trigger('test_channel', 'my_event', $data);

        $form = $this->createForm(PersonType::class, $character, array(
            'action' => $this->generateUrl('character_default_createcharacter'),
            'method' => 'POST',
        ));

        if (!$request->isMethod('POST')){
            return $this->render('CharacterBundle:Character:create.html.twig', array(
                'form' => $form->createView(),
            ));
        } else {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $character->setUser($this->getUser());

                $em->persist($character);
                $em->flush();

                return $this->redirectToRoute('character_default_showcharacter', array(
                    'id' => $character->getId()
                ));
            } else {
                return $this->render('CharacterBundle:Character:create.html.twig', array(
                    'form' => $form->createView(),
                ));
            }
        }
    }

    /**
     * @Route("/{id}/show", )
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showCharacter($id){
        $em = $this->get('doctrine.orm.entity_manager');

        $character = $em->getRepository('CharacterBundle:Person')->find($id);

        if ($character->getUser()->getId() == $this->getUser()->getId()) {
            return $this->render('CharacterBundle:Character:show.html.twig', array(
                'character' => $character
            ));
        } else {
            throw $this->createNotFoundException('This character is not available');
        }
    }
}
