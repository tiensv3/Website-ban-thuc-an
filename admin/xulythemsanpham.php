<?php
include("../ketnoi.php");
// Nhận dữ liệu từ form
$danhmuc = $_POST["danhmuc"];
$tensanpham = $_POST["tensanpham"];
$mota = $_POST["mota"];
$giagoc = $_POST["giagoc"];
$giaban = $_POST["giaban"];
$soluong = $_POST["soluong"];
$trangthai = $_POST["trangthai"];

// Loại bỏ dấu phẩy từ giá trị giagoc và giaban
$giagoc = str_replace(',', '', $giagoc);
$giaban = str_replace(',', '', $giaban);

$duongdan = "upload/";
$duongdan = $duongdan . basename($_FILES["hinhanh"]["name"]);
$file_tam = $_FILES["hinhanh"]["tmp_name"];
move_uploaded_file($file_tam, $duongdan);

// Thực hiện câu lệnh SQL với giá trị không có dấu phẩy
$sql = "INSERT INTO sanpham (TenSanPham, MoTa, GiaGoc, GiaBan, SoLuong, TrangThai, HinhAnh, DanhMucID) VALUES ('".$tensanpham."','".$mota."','".$giagoc."','".$giaban."','".$soluong."','".$trangthai."','".$duongdan."','".$danhmuc."')";
$kq = $conn->query($sql);

// Kiểm tra và điều hướng về trang sản phẩm
if ($kq) {
    echo "<script language='javascript'>window.location.assign('sanpham.php');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>