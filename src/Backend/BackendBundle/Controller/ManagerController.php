<?php

namespace Backend\BackendBundle\Controller;

use Backend\BackendBundle\Entity\Client;
use Backend\BackendBundle\Entity\User;
use Backend\BackendBundle\Form\ClientType;
use Backend\BackendBundle\Form\CommandeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model\UserInterface;


class ManagerController extends Controller
{
    public function commandeAction(Request $request){
        $form = $this->createForm(new CommandeType());
        $client = new Client();
        $userform = $this->createForm(new ClientType() , $client);
        $form->handleRequest($request);
//        if ($request->isMethod('post')) {
//            if ($form->isValid()) {
//                return new Response('ok');
//            }
//        }
        return $this->render('BackendBackendBundle:CommandeManager:command.html.twig',[
            'commandform' => $form->createView(),
            'clientform' => $userform->createView()
        ]);
    }

    public function registerAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $client = new Client();
        $form = $this->createForm(new ClientType() , $client);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $client_data = $form->getData();
            $client->addRole('ROLE_USER');
            $client->setEnabled(true);
            $client->setType(123);
            $em->persist($client);

            //traitement user
//            $user->set
            $em->flush();
            $route = 'frontend_homepage';
            $this->addFlash(
                'userep',
                'votre compte à éte bien céer!'
            );
            $url = $this->container->get('router')->generate($route);
            $response = new RedirectResponse($url);
            $this->authenticateUser($client_data, $response);
            return $response;
        }
        return $this->render('BackendBackendBundle:UserManager:registration.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * Authenticate a user with Symfony Security
     *
     * @param \FOS\UserBundle\Model\UserInterface $user
     * @param \Symfony\Component\HttpFoundation\Response $response
     */
    protected function authenticateUser(UserInterface $user, Response $response)
    {
        try {
            $this->container->get('fos_user.security.login_manager')->loginUser(
                $this->container->getParameter('fos_user.firewall_name'),
                $user,
                $response);
        } catch (AccountStatusException $ex) {
            // We simply do not authenticate users which do not pass the user
            // checker (not enabled, expired, etc.).
        }
    }

}
