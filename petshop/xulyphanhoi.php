<?php
include('../ketnoi.php');
?>
<?php
if(isset($_POST['btnPhanhoi']))
{
    $khachhangID = $_POST['khachhangid'];
    $tieude = $_POST['tieude'];
    $noidung = $_POST['noidung'];
    $thoigian = date("Y-m-d H:i:s");
    $sql = "INSERT INTO phanhoi (KhachHangID, TieuDe, NoiDung, ThoiGian) VALUES ('$khachhangID', '$tieude', '$noidung', '$thoigian')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Gửi phản hồi thành công');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Đã có lỗi xảy ra, vui lòng thử lại sau!');</script>";
    }

}
else
{
    echo "<script>alert('Đã có lỗi xảy ra, vui lòng thử lại sau!');</script>";
}
?>