<?php

namespace Frontend\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontendFrontendBundle:Default:index.html.twig');
    }
}
