<?php
include('slider.php');
include('nav.php');
include("../ketnoi.php");

$ctdhID = $_REQUEST["id"];
$dhID = $_REQUEST["dhid"];
$khID = $_REQUEST["khid"];
$sql = "SELECT * FROM chitietdonhang  WHERE ID='" . $ctdhID . "'";
$kq = $conn->query($sql);


// Lấy dữ liệu từ fetch array
$row = mysqli_fetch_array($kq);
?>

<form method="post" action="xulysuachitietdonhang.php">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="soluong">Số lượng:</label>
            <input type="text" class="form-control" id="soluong" name="soluong" value="<?php echo $row["SoLuong"];?>">
        </div>
        <input type="hidden" class="form-control" id="machitietdonhang" name="machitietdonhang"
            value="<?php echo $ctdhID;?>">
        <input type="hidden" class="form-control" id="madonhang" name="madonhang" value="<?php echo $dhID;?>">
        <input type="hidden" class="form-control" id="makhachhang" name="makhachhang" value="<?php echo $khID;?>">
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