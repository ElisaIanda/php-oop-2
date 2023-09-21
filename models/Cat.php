<?php 
    require_once __DIR__."/Category.php";

    class Cat extends Category {
        protected $img;

        public function __construct()
        {
            $this->img ='<i class="fa-solid fa-cat"></i>';
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