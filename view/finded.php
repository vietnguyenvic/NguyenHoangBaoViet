<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBVIET</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
  <div class ="container">
        <table border= "2px" class="banner">
            <tr>
            <td colspan="5">
            <img src="./img/qq.jpg"heigh='100px' width='1000px' alt="">
            </td>
            </tr>
            <tr>
                <td><a href="index.php?ctrl=screenuser&func=index"><button>Trang chủ</button></a></td>
                <td><a href="index.php?ctrl=screenuser&func=index"><button>Máy tính</button></a></td>
                <td><a href="index.php?ctrl=loa&func=index"><button>Loa</button></a></td>
                <td><a href="index.php?ctrl=tablet&func=index"><button>Tablet</button></a></td>
            </tr>
        </table>
        <header>
        <a href="index.php?ctrl=login&func=index"><button>Đăng xuất</button></a>
        <a href="index.php?ctrl=cart&func=index"><button>Giỏ hàng</button></a>
    </header>
        <form method="post" action="">
            <input type="text" name="keyword" id="">
            <input type="submit" name="submit" value="Tìm kiếm">
            <p>
             <input type="submit" name="submit" value ="Tăng dần"> 
             <input type="submit" name="submit" value ="Giảm dần"></p>
        </form>
        <div class="list">
        <?php 
        
        include "model/Laptop.php";
        $laptop=new Laptop();
        $dsss=$laptop->tablets();
        $dssl=$laptop->loas();
        $dssp=$laptop->laptops();
        $dssstang=$laptop->tabletstang();
        $dssltang=$laptop->loastang();
        $dssptang=$laptop->laptopstang();
        $dsssgiam=$laptop->tabletsgiam();
        $dsslgiam=$laptop->loasgiam();
        $dsspgiam=$laptop->laptopsgiam();
        if($_POST["submit"]=="Tìm kiếm"){
            foreach($dssp as $laptop) {
                if(is_numeric(strpos($laptop["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$laptop['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $laptop['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $laptop['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
            foreach($dssl as $loas) {
                if(is_numeric(strpos($loas["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$loas['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $loas['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $loas['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
            foreach($dsss as $tablets) {
                if(is_numeric(strpos($tablets["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$tablets['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $tablets['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $tablets['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
        }
        //tìm theo thứ tự các trang
        else if($_POST["submit"]=="Tăng dần"){
            foreach($dssptang as $laptop) {
                if(is_numeric(strpos($laptop["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$laptop['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $laptop['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $laptop['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
            foreach($dssltang as $loas) {
                if(is_numeric(strpos($loas["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$loas['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $loas['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $loas['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
            foreach($dssstang as $tablets) {
                if(is_numeric(strpos($tablets["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$tablets['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $tablets['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $tablets['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
        }
        else{
            foreach($dsspgiam as $laptop) {
                if(is_numeric(strpos($laptop["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$laptop['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $laptop['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $laptop['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
            foreach($dsslgiam as $loas) {
                if(is_numeric(strpos($loas["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$loas['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $loas['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $loas['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
            foreach($dsssgiam as $tablets) {
                if(is_numeric(strpos($tablets["ten"],$_POST["keyword"]))){
            ?>
                <a class="item">
                    <table  class="content" width="80%">
                        <tr >
                            <td><?php echo "<img class='img' src='".$tablets['hinh']."'>" ?></td>
                        </tr>
                        <tr class="ten">
                            <td><?php echo $tablets['ten'] ?></td>
                        </tr>
                        <tr class="gia">
                            <td><?php echo $tablets['gia'] ?></td>
                        </tr>
            
                    </table>
                </a>
        
            <?php
            }} 
        }
            ?>
        </div>
    <</div>
</body>
</html>