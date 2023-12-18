<?php
include("../ketnoi.php");
$ma=$_REQUEST["dhid"];
$sql1 = "delete from chitietdonhang where DonHangID='".$ma."'";
$sql="delete from donhang where ID='".$ma."'";
$kq1 = $conn -> query($sql1);
$kq = $conn -> query($sql);
$conn->close();
echo ("<script laguage='javascript'>window.location.assign('donhang.php');</script>");
?>