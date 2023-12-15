<?php
include("../ketnoi.php");
$taikhoanid = $_POST["taikhoanid"];
$hoten=$_POST["hoten"];
$diachi=$_POST["diachi"];
$sdt=$_POST["sdt"];
$sql="update nhanvien set HoTen='".$hoten."', SDT='".$sdt."',
DiaChi='".$diachi."' where TaiKhoanID='".$taikhoanid."'";
$capnhattt=$conn -> query($sql) or die ("Không thể sửa đổi thông tin");
echo ("<script language='javascript'>alert('Sửa thành công');window.location.assign('../thoat.php');</script>");
?>