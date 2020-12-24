<?php
    include 'model/Db.php';
    class Laptop extends Db
    {
        public function laptops(){
            $laptops=$this->query("select * from laptop");
            return $laptops;
        }
        public function tablets(){
            $tablets=$this->query("select * from tablet");
            return $tablets;
        }
        public function loas(){
            $loas=$this->query("select * from loa");
            return $loas;
        }
        public function laptopsgiam(){
            $laptops=$this->query("select * from laptop order by gia desc");
            return $laptops;
        }
        public function laptopstang(){
            $laptops=$this->query("select * from laptop order by gia");
            return $laptops;
        }
        public function loasgiam(){
            $laptops=$this->query("select * from loa order by gia desc");
            return $laptops;
        }
        public function loastang(){
            $laptops=$this->query("select * from loa order by gia");
            return $laptops;
        }
        public function tabletsgiam(){
            $laptops=$this->query("select * from tablet order by gia desc");
            return $laptops;
        }
        public function tabletstang(){
            $laptops=$this->query("select * from tablet order by gia");
            return $laptops;
        }
    }
?>
