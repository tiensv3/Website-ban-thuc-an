<?php
include("header.php");
include("../ketnoi.php");
$sql = "SELECT * from sanpham where TrangThai = 1";
$kq = $conn->query($sql);
$sql1 = "SELECT * from sanpham";
$kq1 = $conn->query($sql1);
?>
<!-- Trending Products -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Sản phẩm</h6>
            <h1 class="display-5 text-uppercase mb-0">Sản phẩm bán chạy</h1>
        </div>
        <div class="owl-carousel product-carousel">
            <?php
while ($row = mysqli_fetch_array($kq)) {
    echo('<div class="pb-5">');
    echo('<div class="product-item position-relative bg-light d-flex flex-column text-center">');
    echo('<input type = "hidden" value = "'.$row["ID"].'">');
    echo('<img class="img-fluid mb-4" max-height="300px"; max-width = "300px" src="../admin/'.$row["HinhAnh"].'" alt="">');
    echo('<h6 class="text-uppercase">' . $row["TenSanPham"] . '</h6>');
    echo('<h5 class="text-primary mb-0">' . number_format($row["GiaBan"]) . ' VND</h5>');
    echo('<div class="btn-action d-flex justify-content-center">');
    echo('<a class="btn btn-primary py-2 px-3" href="themvaogiohang.php?id='.$row["ID"].'"><i class="bi bi-cart"></i></a>');
    echo('<a class="btn btn-primary py-2 px-3" href="chitietsanpham.php?id='.$row["ID"].'"><i class="bi bi-eye"></i></a>');
    echo('</div>');
    echo('</div>');
    echo('</div>');
}
?>
        </div>
    </div>
</div>

<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Sản phẩm</h6>
            <h1 class="display-5 text-uppercase mb-0">Tất cả sản phẩm</h1>
        </div>
        <?php
$i = 4;
while ($row1 = mysqli_fetch_array($kq1)) {
    if($i%4==0)
    {
        echo('<div class="row">');
    }
    echo('<div class="col-md-3 pb-5">');
    echo('<div class="product-item position-relative bg-light d-flex flex-column text-center">');
    echo('<input type = "hidden" value = "'.$row1["ID"].'">');
    echo('<img class="img-fluid mb-4" max-height="300px"; max-width = "300px" src="../admin/'.$row1["HinhAnh"].'" alt="">');
    echo('<h6 class="text-uppercase">' . $row1["TenSanPham"] . '</h6>');
    echo('<h5 class="text-primary mb-0">' . number_format($row1["GiaBan"]) . ' VND</h5>');
    echo('<div class="btn-action d-flex justify-content-center">');
    echo('<a class="btn btn-primary py-2 px-3" href="themvaogiohang.php?id='.$row["ID"].'"><i class="bi bi-cart"></i></a>');
    echo('<a class="btn btn-primary py-2 px-3" href="chitietsanpham.php?id='.$row["ID"].'"><i class="bi bi-eye"></i></a>');
    echo('</div>');
    echo('</div>');
    echo('</div>');
    $i++;
    if($i%4==0)
    {
        echo('</div>');
    }

}
?>
    </div>
</div>
</div>
<?php
include("footer.php");
?>