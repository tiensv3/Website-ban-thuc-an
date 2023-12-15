<?php
include('header.php');
?>
<?php 
include('../ketnoi.php');
if(!isset($_SESSION['khachhang']))
{   
    echo ("<script language=javascript>alert('Vui lòng đăng nhập để gửi phản hồi');
        window.location='../dangnhap.php';
        </script> ");
}
else
{
$email = $_SESSION['khachhang'];
$sql = "SELECT taikhoan.*, khachhang.ID as KHID, khachhang.* FROM taikhoan, khachhang where taikhoan.ID = khachhang.TaiKhoanID and Email = '$email'";
$kq = $conn->query($sql);
$row = mysqli_fetch_array($kq);
}
?>
<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Liên hệ với chúng tôi</h6>
            <h1 class="display-5 text-uppercase mb-0">Thông tin phản hồi
            </h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-7">
                <form method="post" action="xulyphanhoi.php">
                    <div class="row g-3">
                        <input type="hidden" value="<?php echo $row['KHID']; ?>" name="khachhangid">

                        <div class="col-12">
                            <input type="text" class="form-control bg-light border-0 px-4"
                                value="<?php echo $row['HoTen'] ?>" placeholder="Tên của bạn" style="height: 55px;"
                                name="hoten" readonly>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control bg-light border-0 px-4"
                                value="<?php echo $row['Email'] ?>" placeholder="Email của bạn" style="height: 55px;"
                                name="email" readonly>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control bg-light border-0 px-4" placeholder="Tiêu đề"
                                style="height: 55px;" name="tieude">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control bg-light border-0 px-4 py-3" rows="8" placeholder="Nội dung"
                                name="noidung"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit" name="btnPhanhoi">Gửi phản
                                hồi</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="bg-light mb-5 p-5">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">Trụ sở</h6>
                            <span>123 Nguyễn Thiện Thành, P5, TPTV</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">Liên hệ</h6>
                            <span>petshoptv@gmail.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">Gọi cho chúng tôi</h6>
                            <span>033 7677 141</span>
                        </div>
                    </div>
                    <div id="clock-container">
                        <div id="clock"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?php
include('footer.php');
?>