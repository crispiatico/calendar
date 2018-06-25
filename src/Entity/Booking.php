<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 */
class Booking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="integer")
     */
    private $event;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $comefrom;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $arrivale;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $departure;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $note;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $deposit;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created  ;

    /**
     * @ORM\Column(type="integer")
     */
    private $usertype;

    /**
     * @ORM\Column(type="integer")
     */
    private $admin;

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
     * Get the value of Event
     *
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set the value of Event
     *
     * @param mixed event
     *
     * @return self
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Phone
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of Phone
     *
     * @param mixed phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Comefrom
     *
     * @return mixed
     */
    public function getComefrom()
    {
        return $this->comefrom;
    }

    /**
     * Set the value of Comefrom
     *
     * @param mixed comefrom
     *
     * @return self
     */
    public function setComefrom($comefrom)
    {
        $this->comefrom = $comefrom;

        return $this;
    }

    /**
     * Get the value of Arrivale
     *
     * @return mixed
     */
    public function getArrivale()
    {
        return $this->arrivale;
    }

    /**
     * Set the value of Arrivale
     *
     * @param mixed arrivale
     *
     * @return self
     */
    public function setArrivale($arrivale)
    {
        $this->arrivale = $arrivale;

        return $this;
    }

    /**
     * Get the value of Departure
     *
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set the value of Departure
     *
     * @param mixed departure
     *
     * @return self
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get the value of Note
     *
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of Note
     *
     * @param mixed note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of Deposit
     *
     * @return mixed
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Set the value of Deposit
     *
     * @param mixed deposit
     *
     * @return self
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get the value of Created
     *
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of Created
     *
     * @param mixed created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;

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
     * Get the value of Admin
     *
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set the value of Admin
     *
     * @param mixed admin
     *
     * @return self
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

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
