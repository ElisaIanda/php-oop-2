<?php
    class Category {
        protected $name;

        public function __construct(string $_name)
        {
            $this->name = $_name;          
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
    }
?>