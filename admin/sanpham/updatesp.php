<?php
if (is_array($phim)) {
    extract($phim);
}
$hinhpart = "./upload/" . trim($anh);
if (is_file($hinhpart)) {
    $img = "<img src='" . $hinhpart . "' height='80'>";
} else {
    $img = "no poto";
}
?>
<div class="form">
    <h3 class="alert alert-success">SỬA FILM</h3>
    <form action="index.php?act=updatephim" class="mb-2" method="post" enctype="multipart/form-data">

        <label class="form-label fw-bold">Tên Phim</label>
        <input type="text" name="tenphim" class="form-control" value="<?= $tenphim ?>">

        <label class="form-label fw-bold">Đạo Diễn</label>
        <input type="text" name="daodien" class="form-control" value="<?= $daodien ?>">

        <label class="form-label fw-bold">THỜI LƯỢNG</label>
        <input type="text" name="thoiluong" class="form-control" value="<?= $thoiluong ?>">

        <label class="form-label fw-bold">NƯỚC SẢN XUẤT</label>
        <input type="text" name="nuocsanxuat" class="form-control" value="<?= $nuocsanxuat ?>">

        <label class="form-label fw-bold">NỘI DUNG</label>
        <textarea name="noidung" class="form-control" cols="30" rows="10"><?= $noidung ?></textarea>

        <label class="form-label fw-bold">NĂM SẢN XUẤT</label>
        <input class="form-control" name="namsanxuat" type="date" value="<?= $namsannxuat ?>">

        <label class="form-label fw-bold">MÃ THỂ LOẠI</label>
        <input class="form-control" name="matheloai" type="text" value="<?= $matheloai ?>"disabled>

        <label class="form-label fw-bold">TÊN DIỄN VIÊN</label>
        <input class="form-control" name="tendienvien" type="text" value="<?= $tendienvien ?>">

        <label class="form-label fw-bold">GIÁ VÉ</label>
        <input class="form-control" name="giave" type="text" value="<?= $giave ?>">

        <label class="form-label fw-bold">ẢNH</label>
        <input class="form-control" name="anh" type="file"> <?= $img ?>

        <div class="form-group mt-3">
            <input type="hidden" name="maphim" value="<?= $maphim ?>">

            <a href="index.php?act=listfilm"><input class="btn btn btn-outline-dark" type="submit" value="CẬP NHẬT" name="capnhat"></a>
            <input class="btn btn btn-outline-dark" type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listfilm"><input class="btn btn btn-outline-dark" type="button" value="DANH SÁCH"></a>

        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

        ?>
    </form>
</div>