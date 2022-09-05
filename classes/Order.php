<?php
class Order
{
    protected $user;
    protected $is_registered;
    protected $order_N;
    protected $discount;


    public function __construct($_user, $_is_registered, $_order_N)
    {
        $this->setUser($_user);
        $this->setOrderN($_order_N);
        // valore passato da noi
        $this->setIsRegistered($_is_registered);
    }

    //SETTER FUNCTION
    public function setUser($_user)
    {
        $this->user = $_user;
    }
    public function setOrderN($_order_N)
    {
        $this->order_N = $_order_N;
    }
    public function setDiscount($_discount)
    {
        $this->discount = $_discount;
    }
    public function setIsRegistered($_is_registered)
    {
        $this->is_registered = $_is_registered;
    }

    //GETTER FUNCTION
    public function getIsRegistered()
    {
        return $this->is_registered;
    }
}
