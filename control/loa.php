<?php 
    class Loa{
      
        public function index (){
            if(isset($_SESSION["id"])){
        include "./view/loa.php";
        }
    else{
        ?> <script>
         location.href="index.php?ctrl=login&func=index";
    </script><?php
    }
 }
}
?>