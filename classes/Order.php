<?php
class Order
{
    protected $user;
    protected $is_registered;
    protected $order_N;
    protected $products = [];
    protected $discount;


    public function __construct($_user, $_is_registered, $_order_N, $_products)
    {
        $this->setUser($_user);
        $this->setOrderN($_order_N);
        $this->setProducts($_products);
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

    public function setIsRegistered($_is_registered)
    {
        $this->is_registered = $_is_registered;
        $this->setDiscount();
    }
    public function setDiscount()
    {
        if ($this->is_registered == true) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }
    public function setProducts($_products)
    {
        $this->products = $_products;
    }


    //GETTER FUNCTION
    public function getIsRegistered()
    {
        return $this->is_registered;
    }




    //FUNZIONE PER IL TOTAL PRICE
    public function getTotalPrice()
    {
        $products = $this->products;
        foreach ($products as $product) {
            echo $product;
        }
    }
}
