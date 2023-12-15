<?php
include("header.php");
?>
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pet Shop</h1>
                <h1 class="text-uppercase text-white mb-lg-4">
                    Hạnh Phúc Của Bạn, Niềm Vui Của Thú Cưng
                </h1>
                <p class="fs-4 text-white mb-lg-4">
                    Chào mừng bạn đến với pet shop của chúng tôi - nơi mà hạnh phúc
                    của bạn và niềm vui của thú cưng là trên hết. Chúng tôi không chỉ
                    cung cấp những sản phẩm chất lượng cao và dịch vụ tận tâm, mà còn
                    tạo ra một không gian ân cần nơi mà mọi thành viên trong gia đình,
                    kể cả những người bạn bốn chân Chúng tôi cam kết đem lại cho bạn
                    trải nghiệm mua sắm đầy hài lòng, từ việc lựa chọn sản phẩm phong
                    phú đến dịch vụ chăm sóc khách hàng xuất sắc.
                </p>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <a href="sanpham.php" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Mua Ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/about.jpg" style="object-fit: cover" />
                </div>
            </div>
            <div class="col-lg-7">
                <div class="border-start border-5 border-primary ps-5 mb-5">
                    <h6 class="text-primary text-uppercase">Về chúng tôi</h6>
                    <h1 class="display-5 text-uppercase mb-0">
                        Pet Food Shop: Hương Vị Tuyệt Vời Cho Bữa Ăn của Thú Cưng
                    </h1>
                </div>
                <h4 class="text-body mb-4">
                    Tại Pet Food Shop, chúng tôi chuyên cung cấp thực phẩm chất lượng
                    cao cho thú cưng của bạn. Đắm chìm trong thế giới của những hương
                    vị tinh tế và dinh dưỡng hoàn hảo.
                </h4>
                <div class="bg-light p-4">
                    <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true">
                                Nhiệm vụ của chúng tôi
                            </button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                aria-selected="false">
                                Tầm nhìn của chúng tôi
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                            aria-labelledby="pills-1-tab">
                            <p class="mb-0">
                                An Toàn và Dinh Dưỡng: Chúng tôi tận dụng sức mạnh của kiến
                                thức và đổi mới để cung cấp thức ăn và sản phẩm an toàn,
                                dinh dưỡng cao cho thú cưng. Mục tiêu của chúng tôi là giúp
                                thú cưng phát triển mạnh mẽ và sống một cuộc sống khỏe mạnh.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <p class="mb-0">
                                Không ngừng nỗ lực để cung cấp sản phẩm và dịch vụ tốt nhất.
                                Chúng tôi tin rằng mỗi sản phẩm và trải nghiệm mua sắm đều
                                là cơ hội để làm cho cuộc sống của thú cưng và chủ nhân trở
                                nên tốt đẹp hơn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<?php
include("../ketnoi.php");
$sql = "SELECT * from sanpham where TrangThai = 1";
$kq = $conn->query($sql);
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
<?php
include("footer.php");
?>