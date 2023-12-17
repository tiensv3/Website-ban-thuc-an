<?php
session_start();
include('../ketnoi.php');

if (!isset($_SESSION["khachhang"])) {
    echo json_encode(['success' => false, 'message' => 'Bạn không có quyền trên trang này!']);
    exit;
}

$email = $_SESSION['khachhang'];

$sql = "SELECT khachhang.ID as KhachHangID FROM taikhoan, khachhang WHERE taikhoan.ID = khachhang.TaiKhoanID AND Email = '$email'";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    echo json_encode(['success' => false, 'message' => 'Khách hàng không tồn tại']);
    exit;
}

$row = $result->fetch_assoc();
$khachhangID = $row["KhachHangID"];

$sqlGioHang = " SELECT giohang.*, sanpham.GiaBan FROM giohang, sanpham WHERE giohang.KhachHangID = '$khachhangID' and giohang.SanPhamID = sanpham.ID ";
$resultGioHang = $conn->query($sqlGioHang);

if (!$resultGioHang || $resultGioHang->num_rows == 0) {
    echo json_encode(['success' => false, 'message' => 'Giỏ hàng của bạn trống']);
    exit;
}

$thanhtien = 0;

$thoiGianDatHang = date("Y-m-d H:i:s");

$sqlDonHang = "INSERT INTO donhang (KhachHangID, TGDatHang, TongTien, TrangThai) 
               VALUES ($khachhangID, '$thoiGianDatHang', 0, 0)";

if ($conn->query($sqlDonHang)) {
    $donHangID = $conn->insert_id;

    while ($rowGioHang = $resultGioHang->fetch_assoc()) {
        $sanPhamID = $rowGioHang["SanPhamID"];
        $soLuong = $rowGioHang["SoLuong"];
        $donGia = $rowGioHang["GiaBan"];
        $thanhTien = $soLuong * $donGia;

        $sqlChiTietDonHang = "INSERT INTO chitietdonhang (DonHangID, SanPhamID, SoLuong, DonGia) 
                              VALUES ($donHangID, $sanPhamID, $soLuong, $donGia)";

        $conn->query($sqlChiTietDonHang);
        $thanhtien += $thanhTien;
    }

    $sqlUpdateDonHang = "UPDATE donhang SET TongTien = $thanhtien WHERE ID = $donHangID";
    $conn->query($sqlUpdateDonHang);

    $sqlXoaGioHang = "DELETE FROM giohang WHERE KhachHangID = $khachhangID";
    $conn->query($sqlXoaGioHang);

    echo json_encode(['success' => true, 'message' => 'Đặt hàng thành công']);
} else {
    echo json_encode(['success' => false, 'message' => 'Lỗi khi thêm đơn hàng']);
}

$conn->close();
?>