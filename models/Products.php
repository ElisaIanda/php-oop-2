<?php
require_once __DIR__ . "/Category.php";

class Products
{
        protected $name;
        protected $category;

        public function __construct($name, $category, $brand)
        {
                $this->name = $name;
                $this->category = $category;
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
}
