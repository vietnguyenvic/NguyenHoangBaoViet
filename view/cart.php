<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBVIET</title>
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
           <table border= "2px" class="banner">
            <tr>
            <td colspan="5">
            <img src="./img/ww.jpg"heigh='100px' width='1000px' alt="">
            </td>
            </tr>
            <tr>
                <td><a href="index.php?ctrl=screenuser&func=index"><button>Trang chủ</button></a></td>
                <td><a href="index.php?ctrl=screenuser&func=index"><button>Máy tính</button></a></td>
                <td><a href="index.php?ctrl=loa&func=index"><button>Loa</button></a></td>
                <td><a href="index.php?ctrl=tablet&func=index"><button>Tablet</button></a></td>
            </tr>
        </table>
        <table>
            <?php 
            // include "./model/Laptop.php";
            // $laptops=new Laptop();
            // $list=$laptops->laptops();
            foreach($_SESSION['cart'] as $key => $value){ 
                foreach($list as $item){
                    if($item["id"]==$value){?>
            <tr>

                <td><?php echo $item["id"] ?> </td>
                <td><?php echo $item["hinh"]?></td>
                <td><?php echo $item["ten"] ?> </td>
                <td><?php echo $item["gia"] ?></td>
            </tr>
            <?php 
            }}}?>
        </table>

        <a href="index.php?ctrl=screenuser&func=index"><button>Trang chủ</button></a>
    </div>

</body>

</html>