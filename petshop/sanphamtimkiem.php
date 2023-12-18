<?php
include("header.php");
include("../ketnoi.php");

if (isset($_POST['search']) && !empty($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT sanpham.ID as ID, sanpham.*
                FROM sanpham
                WHERE TenSanPham LIKE '%$search%'";
    $kq = $conn->query($sql);
        
}



?>
<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Sản phẩm</h6>
            <h1 class="display-5 text-uppercase mb-0">Sản phẩm tìm kiếm</h1>
        </div>
        <?php
$i = 4;
while ($row = mysqli_fetch_array($kq)) {
    if($i%4==0)
    {
        echo('<div class="row">');
    }
    echo('<div class="col-md-3 pb-5">');
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