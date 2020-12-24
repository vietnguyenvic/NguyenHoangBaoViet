<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
<body>
  <div class ="container">

         <table  border= "2px" class="banner">
            <tr>
            <td colspan="5">
            <img src="./img/ee.jpg"heigh='100px' width='1000px' alt="">
            </td>
            
            </tr>
            
            <tr>
                
                <td><a href="index.php?ctrl=screenuser&func=index"><button>Trang chủ</button></a></td>
                <td><a href="index.php?ctrl=screenuser&func=index"><button>Máy tính</button></a></td>
                <td><a href="index.php?ctrl=loa&func=index"><button>Loa</button></a></td>
                <td><a href="index.php?ctrl=tablet&func=index"><button>Tablet</button></a></td>
       
            </tr>
        </table>
        <header>  <a href="index.php?ctrl=login&func=index"><button>Đăng xuất</button></a>
        <a href="index.php?ctrl=cart&func=index"><button>Giỏ hàng</button></a></header>
        <form method="post" action="index.php?ctrl=finded&func=index">
            <input type="text" name="keyword" id="">
            <input type="submit" value="Tìm kiếm">
        </form>
        <div class="list">
        <?php 
        include "model/Laptop.php";
        $laptop=new Laptop();
        $dssp=$laptop->tablets();
        foreach($dssp as $laptop) {?>
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
                    <tr class="gia">
                       <td><a href="index.php?ctrl=cart&func=index&id=<?php echo $laptop["id"]; ?>"><img width="200px" src="img/btnbuy.png" alt=""></a></td>
                    </tr>
                </table>
            </a>
        <?php } ?>
        </div>
    <</div>
</body>
</html>