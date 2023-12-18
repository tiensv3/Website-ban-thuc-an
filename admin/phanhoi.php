<?php
include('../ketnoi.php');
$sql = "SELECT * FROM phanhoi, khachhang, taikhoan WHERE phanhoi.KhachHangID = khachhang.ID AND taikhoan.ID = khachhang.TaiKhoanID";
$kq = $conn->query($sql);

    while ($row = mysqli_fetch_assoc($kq)) {
        echo '<tr>';
        echo '<td>' . $row['HoTen'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>'; 
        echo '<td>' . $row['TieuDe'] . '</td>';
        echo '<td>' . $row['NoiDung'] . '</td>';
        echo '<td>' . $row['ThoiGian'] . '</td>';
        echo '</tr>';
    }

// Đóng kết nối
$conn->close();
?>