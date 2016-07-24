<?php

namespace Backend\BackendBundle\Controller;

use Backend\BackendBundle\Entity\Client;
use Backend\BackendBundle\Form\ClientType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model\UserInterface;

class ManagerController extends Controller
{
    public function registerAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $client = new Client();
        $form = $this->createForm(new ClientType() , $client);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $client_data = $form->getData();
            //var_dump($client_data->getName().'&&'.$client_data->getUsername().'&&'.$client_data->getEmail().'&&'.$client_data->getPassword().'&&'.$client_data->getAdresse());
            var_dump($client_data);
            die;
            $client->setUsername($client_data->getUsername());
            $client->setName($client_data->getName());
            $client->addRole('ROLE_USER');
            $client->setEnabled(true);
            //$client->setType(123);
            $client->setAdresse($client_data->getAdresse());
            $client->setLatitude($client_data->getLatitude());
            $client->setLongitude($client_data->getLongitude());
            $em->persist($client);
            $em->flush();
            return $this->redirect($this->generateUrl('frontend_homepage'));
        }
        return $this->render('BackendBackendBundle:UserManager:registration.html.twig',[
            'form' => $form->createView(),
        ]);
    }

}
