<?php
if (is_array($suadm)) {
    extract($suadm);
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>SỬA THỂ LOẠI PHIM</h1>
    </div>
    <div class="row2 form_content">
        <form action="index.php?act=updatetheloai" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã thể loại </label> <br>
                <input type="text" name="matheloai" value="<?= $matheloai ?>"disabled>
            </div>
            <div class="row2 mb10">
                <label>Tên thể loại </label> <br>
                <input type="text" name="tentheloai" value="<?= $tentheloai ?>">
            </div>
            <div class="row mb10 ">
                <input type="hidden" name="matheloai" value="<?php if (isset($matheloai)) echo $matheloai; ?>">
                <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listtheloai"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>