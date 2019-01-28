<?php

namespace AppBundle\Entity;

/**
 * Commande
 */
class Commande
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \stdClass
     */
    private $userId;

    /**
     * @var \stdClass
     */
    private $montant;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param \stdClass $userId
     *
     * @return Commande
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \stdClass
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set montant
     *
     * @param \stdClass $montant
     *
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return \stdClass
     */
    public function getMontant()
    {
        return $this->montant;
    }
    /**
     * @var \AppBundle\Entity\User
     */
    private $carteId;


    /**
     * Set carteId
     *
     * @param \AppBundle\Entity\User $carteId
     *
     * @return Commande
     */
    public function setCarteId(\AppBundle\Entity\User $carteId)
    {
        $this->carteId = $carteId;

        return $this;
    }

    /**
     * Get carteId
     *
     * @return \AppBundle\Entity\User
     */
    public function getCarteId()
    {
        return $this->carteId;
    }
    public function __toString()
    {
      return $this->getNom();
    }
}
