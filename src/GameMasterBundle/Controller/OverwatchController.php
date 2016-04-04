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

        $em = $this->get('doctrine.orm.entity_manager');

        $player_repository = $em->getRepository('CharacterBundle:Person');

        $players = array();

        foreach ($players_id as $player_id) {
            $players[] = $player_repository->find($player_id);
        }

        $effects = $em->getRepository('CharacterBundle:StatusEffect')->findAll();

        return $this->render('GameMasterBundle:Overwatch:group.html.twig', array(
            'players' => $players,
            'effects' => $effects,
        ));
    }

    /**
     * @Route("/lower_stat/{stat}/{player_id}/{scale}")
     * @param $stat
     * @param $player_id
     * @param $scale
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function lowerStat($stat, $player_id, $scale){
        return $this->modifyStat('lower',$stat,$player_id,$scale);
    }

    /**
     * @Route("/upper_stat/{stat}/{player_id}/{scale}")
     * @param $stat
     * @param $player_id
     * @param $scale
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function upperStat($stat, $player_id, $scale){
       return $this->modifyStat('upper',$stat,$player_id,$scale);
    }

    /**
     * @param $direction
     * @param $stat
     * @param $player_id
     * @param $scale
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function modifyStat($direction, $stat, $player_id, $scale){
        $em = $this->get('doctrine.orm.entity_manager');

        $character_utilities = $this->get('character.utilities');

        $player = $em->getRepository('CharacterBundle:Person')->find($player_id);

        $modify = $direction.strtoupper(substr($stat,0,1)).substr($stat,1);

        $character_utilities->$modify($player,$scale);

        $player->setDefaultValues();

        $em->persist($player);

        $em->flush();

        return $this->render('GameMasterBundle:Overwatch:group.html.twig', array(
            'players' => array($player)
        ));
    }

}