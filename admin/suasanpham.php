<?php
include('slider.php');
?>
<?php
        include('nav.php');
?>
<?php
include("../ketnoi.php");
$sqldm = "SELECT * FROM danhmuc";
$kqdm = $conn->query($sqldm);

$id = $_REQUEST["id"];
$sqlsp = "SELECT * FROM sanpham WHERE ID='" . $id . "'";
$kqsp = $conn->query($sqlsp);
$row1 = mysqli_fetch_array($kqsp);
echo('<form method="post" enctype="multipart/form-data" action="xulysuasanpham.php">');
echo('<div class="form-row">');
    echo '<div class="form-group col-md-4">';
        echo ' <label for="danhmuc">Chọn danh mục:</label>';
        echo ' <select class="form-control" name="danhmuc" id="danhmuc">';

            while ($row = mysqli_fetch_array($kqdm)) {
            $selected = ($row1['DanhMucID'] == $row['ID']) ? 'selected' : '';
            echo " <option value='{$row['ID']}' {$selected}>{$row['TenDanhMuc']}</option>";
            }

            echo ' </select>';
        echo '</div>';
    ?>
<div class="form-group col-md-4">
    <label for="masanpham">Mã Sản Phẩm:</label>
    <input type="text" class="form-control" id="masanpham" name="masanpham" value="<?= $row1['ID'] ?>" readonly>
</div>
<div class="form-group col-md-4">
    <label for="tensanpham">Tên Sản Phẩm:</label>
    <input type="text" class="form-control" id="tensanpham" name="tensanpham" value="<?= $row1['TenSanPham'] ?>"
        required>
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="mota">Mô Tả:</label>
        <textarea class="form-control" id="mota" name="mota" rows="3" required><?= $row1['MoTa'] ?></textarea>
    </div>
    <div class="form-group col-md-6">
        <label for="giagoc">Giá Gốc:</label>
        <input type="text" class="form-control number-input" id="giagoc" name="giagoc" value="<?= $row1['GiaGoc'] ?>"
            required>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="giaban">Giá Bán:</label>
        <input type="text" class="form-control number-input" id="giaban" name="giaban" value="<?= $row1['GiaBan'] ?>"
            required>
    </div>
    <div class="form-group col-md-6">
        <label for="soluong">Số Lượng:</label>
        <input type="text" class="form-control" id="soluong" name="soluong" value="<?= $row1['SoLuong'] ?>" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="hinhanh">Hình Ảnh:</label>
        <input type="file" class="form-control" id="hinhanh" name="hinhanh">
        <p>Chọn ảnh có kích thước dưới 1MB</p>
        <img width="100px" height="100px" src="<?= $row1['HinhAnh'] ?>" alt="Ảnh hiện tại">
    </div>
    <div class="form-group col-md-6">
        <label for="trangthai">Trạng Thái:</label>
        <select class="form-control" id="trangthai" name="trangthai" required>
            <option value="1" <?= ($row1['TrangThai'] == 1) ? 'selected' : '' ?>>Bán Chạy</option>
            <option value="0" <?= ($row1['TrangThai'] == 0) ? 'selected' : '' ?>>Không Bán Chạy</option>
        </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group">
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Cập Nhật</button>
        </div>
    </div>
</div>
</form>





<?php
include('footer.php'); 
?>