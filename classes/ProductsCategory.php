<?php
require __DIR__ . '/Products.php';

class ProductsCategory extends Products
{
    private $category;

    public function __construct($_name, $_price, $_amount, $_category)
    {
        parent::__construct($_name, $_price, $_amount);
        $this->setCategory($_category);
    }

    public function setCategory($_category)
    {
        $this->category = $_category;
    }
    public function getCategory()
    {
        return $this->category;
    }
}
