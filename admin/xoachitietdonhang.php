<?php
include("../ketnoi.php");

$ctdhID=$_REQUEST["id"];
$dhID = $_REQUEST["dhid"];
$khID = $_REQUEST["khid"];
$sql="delete from chitietdonhang where ID='".$ctdhID."'";
$kq = $conn -> query($sql);
if($kq) {
    $sql1 = "SELECT SUM(SoLuong * DonGia) AS TongTich FROM chitietdonhang where DonHangID = $dhID";
    $kq1 = $conn->query($sql1);
    if($row = mysqli_fetch_array($kq1))
    {
        $tongtien = $row["TongTich"];
    }
    $sql2 = "UPDATE donhang set TongTien = '$tongtien' where ID = '$dhID' ";
    $kq2 = $conn->query($sql2);
}
echo ("<script laguage='javascript'>window.location.assign('chitietdonhang.php?dhid=$dhID&khid=$khID');</script>");
$conn->close();
?>