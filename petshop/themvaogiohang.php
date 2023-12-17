<?php
include('header.php');
include('../ketnoi.php');
$sanphamid = $_REQUEST['id'];
$email = $_SESSION['khachhang'];
$sql = "SELECT khachhang.ID as khID FROM taikhoan, khachhang WHERE email = '".$email."' AND taikhoan.ID = khachhang.TaiKhoanID";
$kq = $conn->query($sql);
if($row = mysqli_fetch_array($kq))
{
    $khID = $row['khID'];
    $sql1 = "INSERT INTO giohang(KhachHangID, SanPhamID, SoLuong) values ('$khID','$sanphamid','1')";
    $kq1 = $conn->query($sql1);
    echo ("<script language=javascript>
    window.location='sanpham.php';
    </script> ");
}
?>