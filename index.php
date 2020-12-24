<?php 
//Bắt đầu session
session_start();
//Đặt tên mặc định cho control và func (control là tên của file control, func là những hàm có trong class đó)
$control="login";
$func="index";

//xét giá trị nếu tồn tại thì trả về giá trị tồn tại đó
//Nếu không trả về trang index chính là ?ctrl=login&func=index
$control=isset($_GET['ctrl'])?$_GET['ctrl']:$control;
$func=isset($_GET['func'])?$_GET['func']:$func;

//include file php được chọn
include "control/".$control.".php";
//viết hoa chữ cái đầu của tên file php cho thành tên class
$name=ucwords($control);
//tạo new class
$obj=new $name();
//chạy func được chọn trong class đó
$obj->$func();
?>
