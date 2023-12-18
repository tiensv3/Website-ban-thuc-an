<?php
include('slider.php');
?>
<?php
        include('nav.php');
?>
<?php
include("../ketnoi.php");
$sqldm = "SELECT * FROM danhmuc";
$ketqua = $conn->query($sqldm);
?>

<form method="post" action="xulythemsanpham.php" enctype="multipart/form-data">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="danhmuc">Chọn danh mục:</label>
            <select class="form-control" name="danhmuc" id="danhmuc">
                <?php while ($row = mysqli_fetch_array($ketqua)): ?>
                <option value="<?= $row['ID'] ?>"><?= $row['TenDanhMuc'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="tensanpham">Tên Sản Phẩm:</label>
            <input type="text" class="form-control" id="tensanpham" name="tensanpham" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="mota">Mô Tả:</label>
            <textarea class="form-control" id="mota" name="mota" rows="3" required></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="giagoc">Giá Gốc:</label>
            <input type="text" class="form-control number-input" id="giagoc" name="giagoc" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="giaban">Giá Bán:</label>
            <input type="text" class="form-control number-input" id="giaban" name="giaban" required>
        </div>
        <div class="form-group col-md-6">
            <label for="soluong">Số Lượng:</label>
            <input type="text" class="form-control" id="soluong" name="soluong" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="hinhanh">Hình Ảnh:</label>
            <input type="file" class="form-control" id="hinhanh" name="hinhanh" required>
            <p>Chọn ảnh có kích thước dưới 1MB</p>
        </div>
        <div class="form-group col-md-6">
            <label for="trangthai">Trạng Thái:</label>
            <select class="form-control" id="trangthai" name="trangthai" required>
                <option value="1">Bán Chạy</option>
                <option value="0">Không Bán Chạy</option>
            </select>
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
include('footer.php'); 
?>