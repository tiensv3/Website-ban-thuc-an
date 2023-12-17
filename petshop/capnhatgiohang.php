<?php
include('../ketnoi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $giohangID = $_POST['giohang_id'];
    $soLuongMoi = $_POST['so_luong'];

    $updateQuery = "UPDATE giohang SET SoLuong = $soLuongMoi WHERE ID = $giohangID";
    $conn->query($updateQuery);

    $updatedTotalPriceQuery = "SELECT GiaBan * SoLuong as UpdatedTotalPrice FROM sanpham, giohang WHERE sanpham.ID = giohang.SanPhamID AND giohang.ID = $giohangID";
    $result = $conn->query($updatedTotalPriceQuery);

    if ($result && $row = $result->fetch_assoc()) {
        $updatedTotalPrice = $row['UpdatedTotalPrice'];
        echo json_encode(['status' => 'success', 'updatedTotalPrice' => $updatedTotalPrice]);
        exit;
    } else {
        echo json_encode(['status' => 'error']);
        exit;
    }
} else {
    echo json_encode(['status' => 'error']);
    exit;
}
?>