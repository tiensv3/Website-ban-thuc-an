<?php
include('../ketnoi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $giohangID = $_POST['giohangID'];
    $quantityChange = $_POST['quantityChange'];

    // Thực hiện cập nhật số lượng trong CSDL
    $sql = "UPDATE giohang SET SoLuong = SoLuong + $quantityChange WHERE ID = $giohangID";
    $conn->query($sql);

    // Trả về số lượng mới (có thể không cần thiết, tùy thuộc vào yêu cầu của bạn)
    $newQuantity = getCurrentQuantity($giohangID);
    echo json_encode(['newQuantity' => $newQuantity]);
}

function getCurrentQuantity($giohangID) {
    global $conn;
    $sql = "SELECT SoLuong FROM giohang WHERE ID = $giohangID";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['SoLuong'];
}
?>