<div class="form">
    <h3 class="alert alert-success">THÊM PHIM</h3>
    <form action="index.php?act=addphim" class="mb-2" method="POST" enctype="multipart/form-data">
       
        <label class="form-label fw-bold">Tên Phim</label>
        <input type="text" name="tenphim" class="form-control">

        <label class="form-label fw-bold">Đạo Diễn</label>
        <input type="text" name="daodien" class="form-control">

        <label class="form-label fw-bold">THỜI LƯỢNG</label>
        <input type="text" name="thoiluong" class="form-control">

        <label class="form-label fw-bold">NƯỚC SẢN XUẤT</label>
        <input type="text" name="nuocsanxuat" class="form-control">

        <label class="form-label fw-bold">NỘI DUNG</label>
        <textarea name="noidung" class="form-control" cols="30" rows="10"></textarea>

        <label class="form-label fw-bold">NĂM SẢN XUẤT</label>
        <input class="form-control" name="namsannxuat" type="date">

        <label class="form-label fw-bold">TÊN THỂ LOẠI</label>
        <select name="matheloai" id="">
                <?php
                $a="SELECT * FROM `theloai`";
                $kq=pdo_query($a);
                echo"<pre>";
                print_r($kq);
                echo"</pre>";
                foreach($kq as $key=>$value){
                    echo'<option value="'.$value["matheloai"].'">'.$value["tentheloai"].'</option>';
                }
                 ?>

            </select>
        <label class="form-label fw-bold">TÊN DIỄN VIÊN</label>
        <input class="form-control" name="tendienvien" type="text">

        <label class="form-label fw-bold">GIÁ VÉ</label>
        <input class="form-control" name="giave" type="text">

        <label class="form-label fw-bold">ẢNH</label>
        <input class="form-control" type="file" name="hinh">

        <div class="form-group mt-3">
            <input class="btn btn btn-outline-dark" type="submit" value="THÊM MỚI" name="themmoi">
            <input class="btn btn btn-outline-dark" type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listfilm"><input class="btn btn btn-outline-dark" type="button" value="DANH SÁCH"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

        ?>
    </form>
</div>