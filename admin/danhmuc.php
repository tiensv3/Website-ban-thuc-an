<?php
include('slider.php');
include('nav.php');
include('../ketnoi.php');

$sql1 = "SELECT * FROM danhmuc";
$kq1 = $conn->query($sql1);
?>

<div class="container-fluid">
    <div class="h3 mb-2 text-gray-800">DANH MỤC SẢN PHẨM</div>
    <div class="mb-4">Quản lý danh mục sản phẩm</div>

    <a href="themdanhmuc.php" class="btn btn-success">Thêm danh mục</a>

    <hr>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTableexample" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 15%;">Mã Danh Mục</th>
                    <th style="width: 15%;">Tên Danh Mục</th>
                    <th style="width: 20%;">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_array($kq1))
                {
                    $ID = $row["ID"];
                    echo('<tr>');
                    echo('<td>'.$ID.'</td>');
                    echo('<td>'.$row["TenDanhMuc"].'</td>');
                    echo('<td>');
                    echo('<a type="button" class="btn btn-warning" href="suadanhmuc.php?id='.$ID.'">Sửa</a> &nbsp;');
                    echo('<a type="button" class="btn btn-danger" href="xoadanhmuc.php?id='.$ID.'">Xóa</a>');
                    echo('</td>');
                    echo('</tr>');
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include('footer.php');
?>