<?php

namespace Backend\BackendBundle\Controller;

use Backend\BackendBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackendBackendBundle:Default:index.html.twig');
    }
}
