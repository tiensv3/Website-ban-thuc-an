<?php
include('../ketnoi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $giohangID = $_POST['giohangID'];

    // Thực hiện xóa sản phẩm khỏi giỏ hàng trong CSDL
    $sql = "DELETE FROM giohang WHERE ID = $giohangID";
    $result = $conn->query($sql);

    // Trả về kết quả dưới dạng JSON
    if ($result) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>