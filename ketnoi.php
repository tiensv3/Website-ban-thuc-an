<?php

// Thông tin kết nối đến MySQL
$host = "localhost";
$user = "root";
$password = "";
$database = "petshop";

// Tạo kết nối đến MySQL
$conn = new mysqli($host, $user, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Không thể kết nối đến MySQL");
}

// Thiết lập UTF-8 làm bộ ký tự mặc định
$conn->set_charset("utf8");
date_default_timezone_set('Asia/Bangkok');

?>