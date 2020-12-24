<?php
    include 'model/Db.php';
    class User extends Db
    {
        public function users(){
            $users=$this->query("select * from user");
            return $users;
        }
        public function login($id,$pass){
            $kq=$this->query("select count(*) as dem from user where id=? and pass=?",[$id,md5($pass)]);
            return $kq['0']['dem'];
        }
        public function register($id,$pass){
            $check=$this->query("select count(*) as dem from user where id=?",[$id]);
            if($check['0']['dem']==1){ return 0;}
            $this->query("INSERT INTO `user`(`id`, `pass`) VALUES (?,?)",[$id,md5($pass)]);
            $kq=$this->query("select count(*) as dem from user where id=?",[$id]);
            return $kq['0']['dem'];
        }
    }
?>