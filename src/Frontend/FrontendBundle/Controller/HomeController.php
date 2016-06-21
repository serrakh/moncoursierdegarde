<?php
/**
 * Created by PhpStorm.
 * User: Mssef
 * Date: 21/06/2016
 * Time: 12:31
 */

namespace Frontend\FrontendBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function indexAction()
    {
        return $this->render('FrontendBundle:HomeManager:body.html.twig');
    }

}