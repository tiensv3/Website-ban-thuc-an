<?php
include('header.php');

if (!isset($_SESSION["khachhang"])) {
    echo "<script language=javascript>
        alert('Bạn không có quyền trên trang này!'); 
        window.location='../dangnhap.php';
    </script>";
    exit;
}

include('../ketnoi.php');
$email = $_SESSION['khachhang'];
$sql1 = "SELECT khachhang.ID as khID FROM taikhoan, khachhang WHERE taikhoan.ID = khachhang.TaiKhoanID AND Email = '" . $email . "'";
$kq1 = $conn->query($sql1);

if (!$kq1) {
    echo "Khách hàng không tồn tại";
} else {
    if (mysqli_num_rows($kq1) > 0) {
        $row1 = mysqli_fetch_array($kq1);
        $khachhangID = $row1["khID"];

        $sql = "SELECT sanpham.ID as MaSanPham, sanpham.TenSanPham as TenSanPham, sanpham.GiaBan as GiaBan, giohang.SoLuong as SoLuong, giohang.ID as giohangID
                FROM giohang
                INNER JOIN sanpham ON giohang.SanPhamID = sanpham.ID
                INNER JOIN khachhang ON giohang.KhachHangID = khachhang.ID
                WHERE giohang.KhachHangID = $khachhangID";

        $kq = $conn->query($sql);
    }
}
?>

<div class="container mt-5">
    <h2>Giỏ Hàng</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sản Phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số Lượng</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $thanhtien = 0;

            while ($row = mysqli_fetch_array($kq)) {
                $giohangID = $row["giohangID"];
                $giaBan = $row["GiaBan"];
                $soLuong = $row["SoLuong"];
                $thanhtien += $soLuong * $giaBan;
            ?>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row["TenSanPham"]; ?></td>
                <td class="giaban"><?php echo number_format($giaBan, 0, '', '') . ' VND'; ?></td>
                <td>
                    <button class="btn btn-sm btn-secondary"
                        onclick="updateQuantity(<?php echo $giohangID; ?>, -1)">-</button>
                    <span class="quantity" data-product-id="<?php echo $giohangID; ?>"><?php echo $soLuong; ?></span>
                    <button class="btn btn-sm btn-secondary"
                        onclick="updateQuantity(<?php echo $giohangID; ?>, 1)">+</button>
                </td>
                <td><button class="btn btn-danger btn-sm"
                        onclick="removeProduct(<?php echo $giohangID; ?>)">Xóa</button></td>
            </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
    <div class="text-right">
        <h4>Tổng cộng: <span id="totalPrice" class="text-danger"><?php echo number_format($thanhtien, 0, '', '.'); ?>
                ₫</span></h4>
        <a class="btn btn-primary" name="datHang" onclick="placeOrder()">Đặt Hàng</a>
    </div>
</div>

<?php
include('footer.php');
?>