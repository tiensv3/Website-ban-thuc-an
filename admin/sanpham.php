<?php include('slider.php'); ?>

<?php include('nav.php'); ?>

<?php include('../ketnoi.php'); ?>

<div class="container-fluid">
    <h2 style="text-align:center">SẢN PHẨM</h2>
    <a href="themsanpham.php" class="btn btn-success">Thêm sản phẩm</a>
    <hr>

    <div class="table-responsive">
        <?php
            $sql1 = "SELECT danhmuc.TenDanhMuc, sanpham.* FROM danhmuc, sanpham WHERE sanpham.DanhMucID = danhmuc.ID";
            $kq1 = $conn->query($sql1);
            ?>

        <table class="table table-bordered" id="dataTableexample2" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Danh Mục</th>
                    <th scope="col">Mã Sản Phẩm</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <!-- <th scope="col">Mô Tả</th> -->
                    <th scope="col">Giá Gốc</th>
                    <th scope="col">Giá Bán</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($kq1)) {
                        $ID = $row["ID"];
                        echo('<tr>');
                        echo('<td>' . $row["TenDanhMuc"] . '</td>');
                        echo('<td>' . $ID . '</td>');
                        echo('<td>' . $row["TenSanPham"] . '</td>');
                        // echo('<td>'.$row["MoTa"].'</td>');
                        echo('<td>' . number_format($row["GiaGoc"]) . '</td>');
                        echo('<td>' . number_format($row["GiaBan"]) . '</td>');
                        echo('<td>' . $row["SoLuong"] . '</td>');
                        echo '<td><img height="100px" width="100px" src="' . $row["HinhAnh"] . '"></td>';
                        echo '<td>' . ($row["TrangThai"] == "1" ? "Bán chạy" : "Không bán chạy") . '</td>';
                        echo('<td>');
                        echo('<a type="button" class="btn btn-warning" href="suasanpham.php?id=' . $ID . '">Sửa</a> &nbsp;');
                        echo('<a type="button" class="btn btn-danger" href="xoasanpham.php?id=' . $ID . '">Xóa</a>');
                        echo('</td>');
                        echo('</tr>');
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('footer.php'); ?>