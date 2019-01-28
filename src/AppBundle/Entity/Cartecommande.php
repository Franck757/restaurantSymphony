<?php

namespace AppBundle\Entity;

/**
 * Cartecommande
 */
class Cartecommande
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \stdClass
     */
    private $commandeId;

    /**
     * @var \stdClass
     */
    private $carteId;

    /**
     * @var int
     */
    private $quantity;


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
     * Set commandeId
     *
     * @param \stdClass $commandeId
     *
     * @return Cartecommande
     */
    public function setCommandeId($commandeId)
    {
        $this->commandeId = $commandeId;

        return $this;
    }

    /**
     * Get commandeId
     *
     * @return \stdClass
     */
    public function getCommandeId()
    {
        return $this->commandeId;
    }

    /**
     * Set carteId
     *
     * @param \stdClass $carteId
     *
     * @return Cartecommande
     */
    public function setCarteId($carteId)
    {
        $this->carteId = $carteId;

        return $this;
    }

    /**
     * Get carteId
     *
     * @return \stdClass
     */
    public function getCarteId()
    {
        return $this->carteId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Cartecommande
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function __toString()
    {
      return $this->getNom();
    }
}
