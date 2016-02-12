<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 12/02/16
 * Time: 15:02
 */

namespace UserBundle\Controller;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class AdminController extends BaseAdminController
{

    /**
     * @Route("/", name="easyadmin")
     * @Route("/", name="admin")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $action = $request->query->get('action', 'list');

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_'.strtoupper($action))) {
            $request->query->replace(array('action' => 'list'));
        }

        return parent::indexAction($request);
    }
}