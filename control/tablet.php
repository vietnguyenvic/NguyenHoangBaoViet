<?php 
    class Tablet{
        public function index (){
            if(isset($_SESSION["id"])){
        include "./view/tablet.php";
        }
        else{
            ?> <script>
            location.href="index.php?ctrl=login&func=index";
            </script><?php
            }
         }
    }
?>