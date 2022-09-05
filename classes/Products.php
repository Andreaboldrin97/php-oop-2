<?php
class Products
{
    protected $name;
    protected $price;
    protected $amount;
    protected $is_availability = true;


    public function __construct($_name, $_price, $_amount)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setAmount($_amount);
    }

    // setter function
    public function setName($_name)
    {
        $this->name = $_name;
    }
    public function setPrice($_price)
    {
        $this->price = $_price;
    }
    public function setAmount($_amount)
    {
        $this->amount = $_amount;
        $this->setAvailability();
    }
    public function setAvailability()
    {
        if ($this->amount > 0) {
            $this->is_availability = true;
        } else {
            $this->is_availability = false;
        }
    }



    // getter function
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function getAvailability()
    {
        return $this->availability;
    }
}
