<?php
if (is_array($phim)) {
    extract($phim);
}
$hinhpart = "upload/" . trim($anh);
if (is_file($hinhpart)) {
    $img = "<img src='" . $hinhpart . "' height='80'>";
} else {
    $img = "no poto";
}
?>
<div class="form">
    <h3 class="alert alert-success">THÊM LỊCH CHIẾU PHIM</h3>
    <form action="index.php?act=themlichchieu" class="mb-2" method="post" enctype="multipart/form-data">

        <label class="form-label fw-bold">NGÀY BẮT ĐẦU</label>
        <input type="date" name="thoigianbatdau" class="form-control">

        <label class="form-label fw-bold">NGÀY KẾT THÚC</label>
        <input type="date" name="thoigianketthuc" class="form-control">

        <label class="form-label fw-bold">GIỜ CHIẾU</label>
        <input type="time" name="giochieu" class="form-control">


        <div class="form-group mt-3">
            <input type="hidden" name="maphim" value="<?= $maphim ?>">
            <input class="btn btn btn-outline-dark" type="submit" value="Tạo" name="capnhat"></a>
            <input class="btn btn btn-outline-dark" type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listlichchieu"><input class="btn btn btn-outline-dark" type="button" value="DANH SÁCH Lịch Chiếu"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

        ?>
    </form>
</div>