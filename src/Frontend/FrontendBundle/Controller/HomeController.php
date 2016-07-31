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
use FOS\UserBundle\Controller\SecurityController as SecController;
use Symfony\Component\Security\Core\SecurityContext;


class HomeController extends Controller
{

    public function indexAction()
    {
        $res = $this->loginAction();
        return $this->render('FrontendFrontendBundle:HomeManager:body.html.twig',[
            'last_username' => $res['last_username'],
            'error'         => $res['error'],
            'csrf_token' => $res['csrf_token'],
        ]);
    }
    public function loginAction()
    {
        $request = $this->container->get('request');
        /* @var $request \Symfony\Component\HttpFoundation\Request */
        $session = $request->getSession();
        /* @var $session \Symfony\Component\HttpFoundation\Session\Session */

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        if ($error) {
            // TODO: this is a potential security risk (see http://trac.symfony-project.org/ticket/9523)
            $error = $error->getMessage();
        }
        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');

        return (array(
            'last_username' => $lastUsername,
            'error'         => $error,
            'csrf_token' => $csrfToken,
        ));
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