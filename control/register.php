<?php 
    class Register
    {
        public function index()
        {
            include "model/User.php";
            include "view/register.php"; 
            $dsnd=new User();  
            if(isset($_POST["submit"]))
            {
                $tk =$_POST["id"];
                $mk =$_POST["pass"];
                $kq=$dsnd->register($tk,$mk);
                if($kq==1)
                echo "thanh cong";
                else
                echo"that bai";
                var_dump($kq);
            }
        }
    }
?>