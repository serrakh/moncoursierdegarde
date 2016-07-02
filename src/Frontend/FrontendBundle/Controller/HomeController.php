<?php
/**
 * Created by PhpStorm.
 * User: Mssef
 * Date: 21/06/2016
 * Time: 12:31
 */

namespace Frontend\FrontendBundle\Controller;



use Backend\BackendBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function indexAction()
    {
        return $this->render('FrontendFrontendBundle:HomeManager:body.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('FrontendFrontendBundle:Pages:about.html.twig');
    }

    public function rateAction()
    {
        return $this->render('FrontendFrontendBundle:Pages:rate.html.twig');
    }


    public function contactAction()
    {
        return $this->render('FrontendFrontendBundle:Pages:contact.html.twig');
    }

}