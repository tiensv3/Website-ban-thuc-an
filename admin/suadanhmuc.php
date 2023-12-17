<?php
include('slider.php');
include('nav.php');
include("../ketnoi.php");

$ID = $_REQUEST["id"];
$sql = "SELECT * FROM danhmuc WHERE ID='" . $ID . "'";
$kq = $conn->query($sql) or die ("Không thể sửa danh mục");

// Lấy dữ liệu từ fetch array
$row = mysqli_fetch_array($kq);
?>

<form method="post" action="xulysuadanhmuc.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="madanhmuc">Mã Danh Mục:</label>
            <!-- Gán giá trị từ fetch array cho input -->
            <input type="text" class="form-control" id="madanhmuc" name="madanhmuc" value="<?php echo $row['ID']; ?>"
                readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tendanhmuc">Tên Danh Mục:</label>
            <!-- Gán giá trị từ fetch array cho input -->
            <input type="text" class="form-control" id="tendanhmuc" name="tendanhmuc"
                value="<?php echo $row['TenDanhMuc']; ?>">
        </div>
    </div>
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