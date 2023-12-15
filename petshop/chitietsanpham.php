?>
<?php
include('header.php');
include('../ketnoi.php');
$id = $_REQUEST['id'];
$sql = "SELECT * FROM sanpham where id = $id";
$kq = $conn->query($sql);
$row = mysqli_fetch_array($kq);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="product-image">
                <?php echo '<img src="../admin/' . $row["HinhAnh"] . '" class="img-fluid" alt="Ảnh sản phẩm">'; ?>
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class="mb-3"><?php echo $row["TenSanPham"]; ?></h2>

            <?php
            $phantram = 20 / 100;
            $giafake = $row["GiaBan"] * (1 + $phantram);
            ?>
            <p class="mb-0"><strike><?php echo number_format($giafake); ?></strike></p>
            <h2 class="mb-3"><b><?php echo number_format($row["GiaBan"]); ?> Đồng</b></h2>

            <p class="mb-3">Mô tả:</p>
            <p><?php echo $row["MoTa"]; ?></p>

            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-primary me-3">Mua ngay</a>
                <a href="#" class="btn btn-secondary">Thêm vào giỏ hàng</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h3 class="mb-3">Sản phẩm liên quan</h3>
        <div class="row">
            <?php
        $sql1 = "SELECT * FROM sanpham WHERE DanhMucID = " . $row['DanhMucID'] . " and ID != ".$id." LIMIT 3";

        $kq1 = $conn->query($sql1);

        // Kiểm tra xem có kết quả từ truy vấn hay không
        if ($kq1 && $kq1->num_rows > 0) {
            while ($row1 = mysqli_fetch_array($kq1)) {
                echo '<div class="col-md-4">';
                echo '<div class="product-item">';
                echo '<img src="../admin/' . $row1["HinhAnh"] . '" class="img-fluid" alt="Ảnh sản phẩm">';
                echo '<h4 class="mb-0">' . $row1["TenSanPham"] . '</h4>';
                echo '<p class="mb-0">' . number_format($row1["GiaBan"]) . ' Đồng</p>';
                echo('<a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>');
                echo('<a class="btn btn-primary py-2 px-3" href="chitietsanpham.php?id='.$row1["ID"].'"><i class="bi bi-eye"></i></a>');
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>Không có sản phẩm liên quan.</p>';
        }
        ?>
        </div>
    </div>

</div>

<?php
include('footer.php');
?>