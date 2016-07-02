<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\ClientRepository")
 */
class Client extends User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Backend\BackendBundle\Entity\Historique" , mappedBy="client")
     */
    protected $historiques;


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
     * Constructor
     */
    public function __construct()
    {
        $this->historiques = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add historiques
     *
     * @param \Backend\BackendBundle\Entity\Historique $historiques
     * @return Client
     */
    public function addHistorique(\Backend\BackendBundle\Entity\Historique $historiques)
    {
        $this->historiques[] = $historiques;

        return $this;
    }

    /**
     * Remove historiques
     *
     * @param \Backend\BackendBundle\Entity\Historique $historiques
     */
    public function removeHistorique(\Backend\BackendBundle\Entity\Historique $historiques)
    {
        $this->historiques->removeElement($historiques);
    }

    /**
     * Get historiques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistoriques()
    {
        return $this->historiques;
    }
}
