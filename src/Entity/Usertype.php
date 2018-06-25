<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsertypeRepository")
 */
class Usertype
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $usertype;

    private $delete;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Usertype
     *
     * @return mixed
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set the value of Usertype
     *
     * @param mixed usertype
     *
     * @return self
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }


    /**
     * Get the value of Delete
     *
     * @return mixed
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Set the value of Delete
     *
     * @param mixed delete
     *
     * @return self
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;

        return $this;
    }

}
