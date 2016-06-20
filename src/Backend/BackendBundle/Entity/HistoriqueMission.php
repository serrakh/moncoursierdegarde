<?php

namespace Backend\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriqueMission
 *
 * @ORM\Table(name="historique_mission")
 * @ORM\Entity(repositoryClass="Backend\BackendBundle\Repository\HistoriqueMissionRepository")
 */
class HistoriqueMission
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
     * @ORM\Column(name="dateAffectation", type="datetime")
     */
    private $dateAffectation;

    /**
     * @ORM\ManyToOne(targetEntity="Backend\BackendBundle\Entity\Mission" , inversedBy="historiqueMissions")
     */
    private $mession;


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
     * @return HistoriqueMission
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
     * Set dateAffectation
     *
     * @param \DateTime $dateAffectation
     * @return HistoriqueMission
     */
    public function setDateAffectation($dateAffectation)
    {
        $this->dateAffectation = $dateAffectation;

        return $this;
    }

    /**
     * Get dateAffectation
     *
     * @return \DateTime 
     */
    public function getDateAffectation()
    {
        return $this->dateAffectation;
    }

    /**
     * Set mession
     *
     * @param \Backend\BackendBundle\Entity\Mission $mession
     * @return HistoriqueMission
     */
    public function setMession(\Backend\BackendBundle\Entity\Mission $mession = null)
    {
        $this->mession = $mession;

        return $this;
    }

    /**
     * Get mession
     *
     * @return \Backend\BackendBundle\Entity\Mission 
     */
    public function getMession()
    {
        return $this->mession;
    }
}
