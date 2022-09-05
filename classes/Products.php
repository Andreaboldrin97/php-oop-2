<?php
class products
{
    protected $name;
    protected $price;
    protected $amount;
    protected $availability = true;
    protected $category;


    public function __construct($_name, $_price, $_amount, $_category)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setAmount($_amount);
        $this->setCategory($_category);
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
            $this->availability = true;
        } else {
            $this->availability = false;
        }
    }
    public function setCategory($_category)
    {
        $this->category = $_category;
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
    public function getCategory()
    {
        return $this->category;
    }
}
