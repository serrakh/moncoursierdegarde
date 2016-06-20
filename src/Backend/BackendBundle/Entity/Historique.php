<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\HistoriqueRepository")
 */
class Historique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Backend\BackendBundle\Entity\Client" , inversedBy="historiques")
     */
    private $client;

    /**
     * @ORM\OneToOne(targetEntity="Backend\BackendBundle\Entity\Commande" , inversedBy="historique")
     */
    private $commande;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set client
     *
     * @param \Backend\BackendBundle\Entity\Client $client
     * @return Historique
     */
    public function setClient(\Backend\BackendBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Backend\BackendBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set commande
     *
     * @param \Backend\BackendBundle\Entity\Commande $commande
     * @return Historique
     */
    public function setCommande(\Backend\BackendBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \Backend\BackendBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
