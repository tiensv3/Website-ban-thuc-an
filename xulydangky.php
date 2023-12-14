<?php session_start();
?>

<?php
include('ketnoi.php');

$email = $_POST['email'];
$matkhau = md5($_POST['matkhau']);

// Thực hiện lệnh INSERT vào bảng cha
$sql = "INSERT INTO taikhoan (Email, MatKhau) VALUES ('$email', '$matkhau')";
if ($conn->query($sql) === TRUE) {

    $taikhoanid = $conn->insert_id;

    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];

    // Thực hiện lệnh INSERT vào bảng con sử dụng giá trị khóa chính mới
    $sql = "INSERT INTO khachhang (HoTen, SDT, DiaChi, TaiKhoanID) VALUES ('$hoten', '$sdt', '$diachi','$taikhoanid')";
    if ($conn->query($sql) === TRUE) {
        echo "<script language=javascript> window.location='dangnhap.php';
        </script>";
    } 
} else {
    echo "<script language=javascript>
        alert('Tài khoản đã tồn tại'); window.location='dangky.php';
        </script>";
}

// Đóng kết nối
$conn->close();
?>