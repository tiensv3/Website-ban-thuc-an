<?php
include("../ketnoi.php");
if(isset($_POST["sbmThem"]))
{
    $tendanhmuc=$_POST["tendanhmuc"];
    $sql="insert into danhmuc(tendanhmuc) values ('".$tendanhmuc."')";
    $kq=$conn -> query($sql);
    echo ("<script language='javascript'>window.location.assign('danhmuc.php');</script>");
    $conn -> close();
}

else
{
    echo "Lỗi";
}
$conn->close();

?>