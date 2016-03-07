<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 03/03/16
 * Time: 15:52
 */

namespace GameMasterBundle\Controller;


use GameMasterBundle\Form\OverwatchChooseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/overwatch")
 *
 * Class OverwatchController
 * @package GameMasterBundle\Controller
 */
class OverwatchController extends Controller
{

    /**
     * @Route("/choose")
     */
    public function chooseGroupAction(){

        $form = $this->createForm(OverwatchChooseType::class);

        return $this->render('GameMasterBundle:Overwatch:choose.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/show")
     */
    public function showGroupAction(Request $request){

        $players_id = $request->request->all()['overwatch_choose']['players'];

        $player_repository = $this->get('doctrine.orm.entity_manager')->getRepository('CharacterBundle:Person');

        $players = array();

        foreach ($players_id as $player_id) {
            $players[] = $player_repository->find($player_id);
        }

        return $this->render('GameMasterBundle:Overwatch:group.html.twig', array(
            'players' => $players
        ));
    }

    /** @Route("/lower_str/{player_id}") */
    public function testLowerOneStr($player_id){
        $em = $this->get('doctrine.orm.entity_manager');

        $player = $em->getRepository('CharacterBundle:Person')->find($player_id);

        $player->setStr($player->getStr()-2);

        $em->persist($player);

        $em->flush();

        return $this->render('GameMasterBundle:Overwatch:group.html.twig', array(
            'players' => array($player)
        ));
    }

}