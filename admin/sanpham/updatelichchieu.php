
<?php
if (is_array($lichchieu)) {
    extract($lichchieu);
}

?>
<div class="form">
    <h3 class="alert alert-success">THÊM LỊCH CHIẾU PHIM</h3>
    <form action="index.php?act=updatelichchieu" class="mb-2" method="post" enctype="multipart/form-data">
        
        <label class="form-label fw-bold">NGÀY BẮT ĐẦU</label>
        <input type="date" name="thoigianbatdau" class="form-control" value="<?= $ngaychieu ?>">

        <label class="form-label fw-bold">NGÀY KẾT THÚC</label>
        <input type="date" name="thoigianketthuc" class="form-control" value="<?=$ngayketthuc  ?>">

        <label class="form-label fw-bold">GIỜ CHIẾU</label>
        <input type="time" name="giochieu" class="form-control" value="<?=$giochieu  ?>">


        <div class="form-group mt-3">
            <input type="hidden" name="idLichChieu" value="<?= $idLichChieu ?>">
            <input class="btn btn btn-outline-dark" type="submit" value="Tạo" name="capnhat"></a>
            <input class="btn btn btn-outline-dark" type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listlichchieu"><input class="btn btn btn-outline-dark" type="button" value="DANH SÁCH Lịch Chiếu"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

        ?>
    </form>
</div>