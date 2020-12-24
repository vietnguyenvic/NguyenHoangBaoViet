<?php 
class Cart{
    public function index(){
       if(isset($_SESSION["id"])){
        include "./model/Laptop.php";
        $laptops=new Laptop();
        $list=$laptops->laptops();
        if(isset($_GET["id"])){
        $id=$_GET["id"];
        foreach($list as $laptop){
            if($laptop["id"]==$id){
              $_SESSION["cart"][]=$id;
            }
        }
    }
        include "./view/cart.php";
        // print_r($_SESSION["cart"]) ;
    }else{
        ?> <script>
        location.href="index.php?ctrl=login&func=index";
    </script><?php
 
}
}}