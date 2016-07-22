<?php

namespace Backend\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('name')
            ->add('mobile')
            ->add('adresse')
            ->add('latitude')
            ->add('longitude')
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getName()
    {
        return 'back_user_registration';
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Backend\BackendBundle\Entity\Client'
        ));
    }
}
