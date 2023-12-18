<?php
include("../ketnoi.php");

if(isset($_POST["sbmThem"]))
{
    $makhachhang = $_POST["khid"];
    $thoigianhientai = date("Y-m-d H:i:s");
    $trangthai = 1;
    $kiemtra = "Select * from khachhang where ID = '$makhachhang' ";
    $kqkt = $conn->query($kiemtra);
    if($kqkt->num_rows > 0)
    {
    $sql = "INSERT INTO donhang (KhachHangID, TGDathang, TrangThai) VALUES ('$makhachhang', '$thoigianhientai', '$trangthai')";
    $kq = $conn->query($sql);
        $madonhang = $conn->insert_id;
        echo "<script language='javascript'>window.location.assign('chitietdonhang.php?dhid=$madonhang&khid=$makhachhang');</script>";
    }
    else{
        echo "<script language='javascript'>alert('Khách hàng không tồn tại');
        window.location.assign('donhang.php');</script>";
    }
    $conn->close();
}
else
{
    echo "Lỗi";
    $conn->close();
}
?>