<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 */
class User implements AdvancedUserInterface , \Serializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var \stdClass
     */
    private $role;


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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set role
     *
     * @param \stdClass $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \stdClass
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @var \AppBundle\Entity\Role
     */
    private $carteId;


    /**
     * Set carteId
     *
     * @param \AppBundle\Entity\Role $carteId
     *
     * @return User
     */
    public function setCarteId(\AppBundle\Entity\Role $carteId)
    {
        $this->carteId = $carteId;

        return $this;
    }

    /**
     * Get carteId
     *
     * @return \AppBundle\Entity\Role
     */
    public function getCarteId()
    {
        return $this->carteId;
    }
    /**
     * @var \AppBundle\Entity\Role
     */
    private $roleId;


    /**
     * Set roleId
     *
     * @param \AppBundle\Entity\Role $roleId
     *
     * @return User
     */
    public function setRoleId(\AppBundle\Entity\Role $roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return \AppBundle\Entity\Role
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    public function isAccountNonExpired()
    {

    }

    public function isAccountNonLocked()
    {

    }

    public function isCredentialsNonExpired()
    {

    }

    public function isEnabled()
    {

    }

    public function getRoles()
    {

    }

    public function getSalt()
    {

    }

    public function eraseCredentials()
    {

    }

    public function serialize()
    {

    }

    public function unserialize($serialized)
    {

    }
}
