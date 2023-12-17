<?php
include('slider.php');
?>
<?php
        include('nav.php');
?>
<?php
include("../ketnoi.php");
$sql = "SELECT * FROM khachhang";
$ketqua = $conn->query($sql);
?>

<form method="post" action="xulythemdonhang.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="khid">Mã Khách Hàng:</label>
            <input type="text" class="form-control" id="khid" name="khid" placeholder="Nhập mã khách hàng">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success" name="sbmThem">Thêm</button>
            </div>
        </div>
    </div>
</form>

<?php
$sql = "SELECT taikhoan.Email, khachhang.* FROM taikhoan INNER JOIN khachhang ON taikhoan.ID = khachhang.TaiKhoanID";
$result = $conn->query($sql);
?>
<div class="container-fluid">
    <div class="h3 mb-2 text-gray-800">Danh sách khách hàng</div>
    <hr>
    <div class="mb-4">
        Thông tin về danh sách khách hàng
    </div>
    <table class="table table-bordered" id="dataTableexample" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Mã Khách Hàng</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Số Điện Thoại</th>
                <th scope="col">Địa Chỉ</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $ID = $row["TaiKhoanID"];
                echo('<tr>');
                echo('<td>' . $ID . '</td>');
                echo('<td>' . $row["HoTen"] . '</td>');
                echo('<td>' . $row["SDT"] . '</td>');
                echo('<td>' . $row["DiaChi"] . '</td>');
                echo('<td>' . $row["Email"] . '</td>');
                echo('</tr>');
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include('footer.php'); 
?>