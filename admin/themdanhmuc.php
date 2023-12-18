<?php
include('slider.php');
?>
<?php
        include('nav.php');
?>
<form method="post" action="xulythemdanhmuc.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tendanhmuc">Tên Danh Mục:</label>
            <input type="text" class="form-control" id="tendanhmuc" name="tendanhmuc">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success" name="sbmThem">Thêm</button>
            </div>
        </div>
    </div>
</form>

<?php
include('footer.php'); 
?>