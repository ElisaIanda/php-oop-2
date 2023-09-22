<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Discount.php";


class Products
{
        use Discount;
        protected $name;
        protected $category;

        public function __construct($name, $category, $discount)
        {
                $this->name = $name;
                $this->category = $category;
                $this->discount = $discount;
        }

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function getCategory()
        {
                return $this->category;
        }

        public function setCategory($category)
        {
                $this->category = $category;

                return $this;
        }

        public function getDiscount()
        {
                return $this->discount;
        }

        public function setDiscount($discount)
        {
                $this->discount = $discount;

                return $this;
        }

}
