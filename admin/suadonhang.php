<?php
include('slider.php');
include('nav.php');
include("../ketnoi.php");

$dhID = $_REQUEST["dhid"];
$sql = "SELECT * FROM donhang WHERE ID='" . $dhID . "'";
$kq = $conn->query($sql);


// Lấy dữ liệu từ fetch array
$row = mysqli_fetch_array($kq);
?>

<form method="post" action="xulysuadonhang.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="madonhang">Mã Đơn Hàng</label>
            <input type="text" class="form-control" id="madonhang" name="madonhang" value="<?php echo $row['ID']; ?>"
                readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="makhachhang">Mã Khách Hàng:</label>
            <!-- Gán giá trị từ fetch array cho input -->
            <input type="text" class="form-control" id="makhachhang" name="makhachhang"
                value="<?php echo $row['KhachHangID']; ?>" readonly>
        </div>
    </div>

    <?php
echo('<td>');
echo('<select name="trangthai">');

$options = [
    0 => 'Chờ Xác Nhận',
    1 => 'Đã Xác Nhận - Chờ Giao Hàng',
    2 => 'Đã Giao',
    3 => 'Đã Hủy'
];

foreach ($options as $value => $label) {
    echo '<option value="' . $value . '"';
    if ($row["TrangThai"] == $value) {
        echo ' selected';
    }
    echo '>' . $label . '</option>';
}

echo('</select>');
echo('</td>');
?>

    <div class="form-row">
        <div class="form-group">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" name="sbmSua">Sửa</button>
            </div>
        </div>
    </div>
</form>

<?php
include('footer.php'); 
?>