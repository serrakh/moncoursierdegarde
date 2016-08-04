<?php

namespace Backend\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ClientCmdType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client', new ClientType(), [
                'data_class' => 'Backend\BackendBundle\Entity\Client',
            ])
            ->add('commande', new CommandeType(), [
                'data_class' => 'Backend\BackendBundle\Entity\Commande',
            ])
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'clientcmd';
    }
}
