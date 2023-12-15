<?php
include("header.php");
?>
<?php
if (!isset($_SESSION["khachhang"])) {
    echo "<script language=javascript>
        alert('Bạn không có quyền trên trang này!'); 
        window.location='../dangnhap.php';
    </script>";
}
?>


<?php
include("../ketnoi.php");
$email = $_SESSION["khachhang"];
$sql = "SELECT * FROM taikhoan, khachhang where taikhoan.ID = khachhang.taikhoanID AND Email='" . $email . "' ";
$kq = $conn->query($sql) or die ("Không thể xuất thông tin người dùng ");
$row = mysqli_fetch_array($kq);
?>

<div class="container">
    <form action="xulythongtin.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <h2>Thông tin cơ bản</h2>
                <input type="text" class="form-control" name="hoten" placeholder="Họ tên"
                    value="<?php echo $row['HoTen']; ?>" required>
                <input type="email" class="form-control" name="email" placeholder="Email"
                    value="<?php echo $row['Email']; ?>" readonly>
                <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại"
                    value="<?php echo $row['SDT']; ?>" required>
            </div>
            <div class="col-md-6">
                <h2>Địa chỉ</h2>
                <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ"
                    value="<?php echo $row['DiaChi']; ?>" required>
                <input type="hidden" name="taikhoanid" value="<?php echo $row['TaiKhoanID']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </form>
</div>
<?php
include("footer.php");
?>