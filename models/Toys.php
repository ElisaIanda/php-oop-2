<?php
require_once __DIR__ . "/Products.php";

class Toys extends Products
{
        protected $img;
        protected $price;
        protected $brand;
        protected $newPrice;
        protected $totDiscount;



        public function __construct($name,  $category,  $img, $brand, $price, $discount,)
        {
                $this->name = $name;
                $this->category = $category;
                $this->img = $img;
                $this->price = $price;
                $this->brand = $brand;
                $this->discount = $discount;
        }

        public function getImg()
        {
                return $this->img;
        }

        public function setImg($img)
        {
                $this->img = $img;

                return $this;
        }

        public function getPrice()
        {
                return $this->price;
        }

        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }


        public function getBrand()
        {
                return $this->brand;
        }

        public function setBrand($brand)
        {
                $this->brand = $brand;

                return $this;
        }

        public function getdiscountApplicato(){

                if ($this->discount >= 0 && $this->discount <= 100) {
                        $this->newPrice = ($this->price * $this->discount / 100);
                }

                return $this->newPrice;
        }
        
}
