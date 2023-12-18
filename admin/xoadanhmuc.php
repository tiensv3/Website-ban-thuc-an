<?php
include("../ketnoi.php");
$ma=$_REQUEST["id"];
$sql="delete from danhmuc where ID='".$ma."'";
$kq = $conn -> query($sql);
$conn->close();
echo ("<script laguage='javascript'>window.location.assign('danhmuc.php');</script>");
?>