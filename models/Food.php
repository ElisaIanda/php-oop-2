<?php
require_once __DIR__ . "/Products.php";


class Food extends Products
{

        protected $img;
        protected $price;
        protected $brand;

        

        public function __construct($name, $category, $img, $brand, $price)
        {
                $this->name = $name;
                $this->category = $category;
                $this->img = $img;
                $this->price = $price;
                $this->brand = $brand;
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
}
