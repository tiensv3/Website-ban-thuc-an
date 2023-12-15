<?php
include('slider.php');
?>
<?php
        include('nav.php');
?>
<?php
include("../ketnoi.php");
$ID = $_REQUEST['dhid'];
$khID = $_REQUEST['khid'];
$sql = "SELECT * FROM sanpham";
$ketqua = $conn->query($sql);
?>

<form method="post" action="xulythemchitietdonhang.php">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="madonhang">Mã Đơn Hàng:</label>
            <input type="text" class="form-control" id="madonhang" name="madonhang" value="<?php echo $ID;?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label for="makhachhang">Mã Khách Hàng:</label>
            <input type="text" class="form-control" id="makhachhang" name="makhachhang" value="<?php echo $khID;?>"
                readonly>
        </div>

        <div class="form-group col-md-6">
            <label for="danhmuc">Chọn sản phẩm:</label>
            <select class="form-control" name="sanpham" id="sanpham">
                <?php while ($row = mysqli_fetch_array($ketqua)): ?>
                <option value="<?= $row['ID'] ?>"><?= $row['TenSanPham'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="soluong">Số Lượng:</label>
            <input type="text" class="form-control" id="soluong" name="soluong" placeholder="Nhập số lượng" required>
        </div>

        <!-- <div class="form-group col-md-6">
            <label for="dongia">Đơn Giá:</label>
            <span id="dongia" name="dongia"></span>
        </div> -->

        <div class="form-group col-md-6">
            <label for="dongia">Đơn Giá:</label>
            <input type="text" class="form-control" id="dongia" name="dongia" readonly>
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