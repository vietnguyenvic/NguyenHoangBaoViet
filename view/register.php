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
            <img src="./img/banner.jpg"heigh='100px' width='1000px' alt="">
            </td>
        </tr>
        <tr>
                <td><a href="index.php?ctrl=screenuser&func=index"><button>Trang chủ</button></a></td>

                <td><a href="index.php?ctrl=screenuser&func=index"><button>Máy tính</button></a></td>
                <td><a href="index.php?ctrl=loa&func=index"><button>Loa</button></a></td>
                <td><a href="index.php?ctrl=tablet&func=index"><button>Tablet</button></a></td>
                
            </tr>
    </table>
    <div class="register">
    <form action="" method="post">
    <table>
            <tr>
                <div class="tk">
                <td>Tên tài khoản<input type="text" name="id" id=""></td>
                </div>
            </tr>
            <tr>
                <div class="mk">
                <td>Mật khẩu<input type="password" name="pass" id=""></td>
            </div>
            </tr>
            <tr>
                <td>Xác nhận mật khẩu<input type="password" name="pass" id=""></td>
            </tr>
            <tr> 
                
                <td><input type="submit" name="submit" value="Đăng kí"></td>
            </tr>
             
        
</div>
        </table>
    </form>
    <a href="index.php?ctrl=login&func=index"><button>Đăng nhập</button></a>
</body>
</html>