<?php
class User
{
    protected $name;
    protected $surName;
    protected $is_registered;
    protected $address;

    public function __construct($_name, $_surName, $_is_registered, $_address)
    {
        $this->setName($_name);
        $this->setSurName($_surName);
        // valore passato da noi
        $this->setIsRegistered($_is_registered);
        $this->setAddress($_address);
    }

    // SETTER function
    public function setName($_name)
    {
        $this->name = $_name;
    }
    public function setSurName($_surName)
    {
        $this->surName = $_surName;
    }
    public function setIsRegistered($_is_registered)
    {
        $this->is_registered = $_is_registered;
    }
    public function setAddress($_address)
    {
        $this->address = $_address;
    }


    // GETTER function
    public function getName()
    {
        return  $this->name;
    }
    public function getSurName()
    {
        return $this->surName;
    }
    public function getIsRegistered()
    {
        return $this->is_registered;
    }
    public function getAddress()
    {
        return $this->address;
    }
}
