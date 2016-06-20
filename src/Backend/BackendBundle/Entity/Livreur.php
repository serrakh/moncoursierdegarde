<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livreur
 *
 * @ORM\Table(name="livreur")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\LivreurRepository")
 */
class Livreur
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
     * @var int
     *
     * @ORM\Column(name="etat", type="smallint")
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebut", type="datetimetz")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFin", type="datetimetz")
     */
    private $heureFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetimetz")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetimetz")
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity="Backend\BackendBundle\Entity\Rapport" , inversedBy="livreurs")
     */
    private $rapport;

    /**
     * @ORM\ManyToOne(targetEntity="Backend\BackendBundle\Entity\Groupe" , inversedBy="livreurs")
     */
    private $groupe;

    /**
     * @ORM\OneToMany(targetEntity="Backend\BackendBundle\Entity\Mission" , mappedBy="livreur")
     */
    private $missions;

    /**
     * @ORM\OneToMany(targetEntity="Backend\BackendBundle\Entity\Message" , mappedBy="livreur")
     */
    private $messages;


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
     * Set etat
     *
     * @param integer $etat
     * @return Livreur
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     * @return Livreur
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime 
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     * @return Livreur
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Livreur
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Livreur
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set rapport
     *
     * @param \Backend\BackendBundle\Entity\Rapport $rapport
     * @return Livreur
     */
    public function setRapport(\Backend\BackendBundle\Entity\Rapport $rapport = null)
    {
        $this->rapport = $rapport;

        return $this;
    }

    /**
     * Get rapport
     *
     * @return \Backend\BackendBundle\Entity\Rapport 
     */
    public function getRapport()
    {
        return $this->rapport;
    }

    /**
     * Set groupe
     *
     * @param \Backend\BackendBundle\Entity\Groupe $groupe
     * @return Livreur
     */
    public function setGroupe(\Backend\BackendBundle\Entity\Groupe $groupe = null)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \Backend\BackendBundle\Entity\Groupe 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->missions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add missions
     *
     * @param \Backend\BackendBundle\Entity\Mission $missions
     * @return Livreur
     */
    public function addMission(\Backend\BackendBundle\Entity\Mission $missions)
    {
        $this->missions[] = $missions;

        return $this;
    }

    /**
     * Remove missions
     *
     * @param \Backend\BackendBundle\Entity\Mission $missions
     */
    public function removeMission(\Backend\BackendBundle\Entity\Mission $missions)
    {
        $this->missions->removeElement($missions);
    }

    /**
     * Get missions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMissions()
    {
        return $this->missions;
    }

    /**
     * Add messages
     *
     * @param \Backend\BackendBundle\Entity\Message $messages
     * @return Livreur
     */
    public function addMessage(\Backend\BackendBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;

        return $this;
    }

    /**
     * Remove messages
     *
     * @param \Backend\BackendBundle\Entity\Message $messages
     */
    public function removeMessage(\Backend\BackendBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
