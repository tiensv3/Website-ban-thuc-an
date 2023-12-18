<?php
include("../ketnoi.php");

if(isset($_POST["sbmThem"]))
{
    $khid = $_POST["makhachhang"];
    $madonhang = $_POST["madonhang"];
    $masanpham = $_POST["sanpham"];
    $soluong =  $_POST["soluong"];
    $dongia = $_POST["dongia"];
    $dongia = str_replace(',', '', $dongia);
    $sql = "INSERT INTO chitietdonhang (DonHangID, SanPhamID, SoLuong, DonGia) VALUES ('$madonhang', '$masanpham', '$soluong', '$dongia')";
    $kq = $conn->query($sql);

    if($kq) {
        $sql1 = "SELECT SUM(SoLuong * DonGia) AS TongTich FROM chitietdonhang where DonHangID = '$madonhang'";
        $kq1 = $conn->query($sql1);
        if($row = mysqli_fetch_array($kq1))
        {
            $tongtien = $row["TongTich"];
        }
        $sql2 = "UPDATE donhang set TongTien = '$tongtien' where ID = '$madonhang' ";
        $kq2 = $conn->query($sql2);
        echo ("<script language='javascript'>window.location.assign('chitietdonhang.php?dhid=$madonhang&khid=$khid');</script>");
    } else {
        echo "Không thể thêm chi tiết";
    }
    $conn->close();
}
?>