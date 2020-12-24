<?php 
    class Login
    {
        //trang đăng nhập chính
        public function index()
        {
            //include file model User để xử lý DB
            include "model/User.php";
            include "view/login.php"; 
            $dsnd=new User();  
            

            if(isset($_POST["submit"]))
            {
                $_SESSION["id"]=$_POST["id"];
                $tk =$_POST["id"];
                $mk =$_POST["pass"];
                $kq=$dsnd->login($tk,$mk);
                if($kq==1){
                    echo "hihiihih";
                ?>
                <script>
                    location.href="index.php?ctrl=screenuser&func=index";
                </script>
                <?php
                }
                else{
                    echo "<h1>Lỗi đăng nhập. vui lòng nhập lại tài khoản hoặc mật khẩu</h1>";
                }
            }
        }
        public function logout(){
          
            if(isset( $_SESSION["id"]))
            {
                session_destroy();
            }
            ?> <script>
            location.href="index.php?ctrl=login&func=index";
        </script><?php
        }
            
    }
    
?>