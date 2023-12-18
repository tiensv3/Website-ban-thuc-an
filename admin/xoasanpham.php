<?php
include("../ketnoi.php");
$ma=$_REQUEST["id"];
$sql="delete from sanpham where ID='".$ma."'";
$kq = $conn -> query($sql);
$conn->close();
echo ("<script laguage='javascript'>window.location.assign('sanpham.php');</script>");
?>