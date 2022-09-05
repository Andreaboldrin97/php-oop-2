<?php
class User
{
    protected $name;
    protected $surName;
    protected $address;
    protected $userCard;
    protected $userCardDate;
    protected $is_valid_card;

    public function __construct($_name, $_surName, $_address, $_userCard, $_userCardDate)
    {
        $this->setName($_name);
        $this->setSurName($_surName);
        $this->setAddress($_address);
        $this->setUserCard($_userCard);
        $this->setUserCardDate($_userCardDate);
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
    public function setAddress($_address)
    {
        $this->address = $_address;
    }
    public function setUserCard($_userCard)
    {
        $this->userCard = $_userCard;
    }
    public function setUserCardDate($_userCardDate)
    {
        $this->userCardDate = $_userCardDate;
        $this->isValidCard();
    }
    public function isValidCard()
    {
        $currentDate = date('Y', time());
        if ($this->userCardDate >= $currentDate) {
            $this->is_valid_card = true;
        } else {
            $this->is_valid_card = false;
        }
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
    public function getAddress()
    {
        return $this->address;
    }
    public function getUserCard()
    {
        return $this->userCard;
    }
}
