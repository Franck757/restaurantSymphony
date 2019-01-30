<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;
/**
 * Role
 */
class Role implements RoleInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $nom;


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
     * Set role
     *
     * @param string $role
     *
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Role
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * @var string
     */
    private $roleID;


    /**
     * Set roleID
     *
     * @param string $roleID
     *
     * @return Role
     */
    public function setRoleID($roleID)
    {
        $this->roleID = $roleID;

        return $this;
    }

    /**
     * Get roleID
     *
     * @return string
     */
    public function getRoleID()
    {
        return $this->roleID;
    }
    public function __toString()
    {
      return $this->getNom();
    }
}
