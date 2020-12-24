<?php
class Finded{
    public function index(){
        if(isset($_SESSION["id"])){
        include "./view/finded.php";
        }else{
            ?> <script>
            location.href="index.php?ctrl=login&func=index";
        </script><?php
        }
    }
}
?>