<?php 
    require_once __DIR__."/Category.php";

    class Dog extends Category {
        protected $img;

        public function __construct()
        {
            $this->img ='<i class="fa-solid fa-dog"></i>';
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
    }
?>