<div class="row2">
    <div class="font_title">
        <h1>Danh sách phim</h1>
    </div>
    <div class="form_content">
        <form action="index.php?act=listfilm" method="POST" enctype="multipart/form-data">
            <div class="mb10 formds_loai">
                <input type="text" name="kyw">
                <select name="iddm" id="">
                    <option value="0">Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo ' <option value="' . $matheloai . '">' . $tentheloai . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="listok" value="GO">
                <table>
                    <tr>
                        <th>MÃ PHIM</th>
                        <th>TÊN PHIM</th>
                        <th>THể Loại</th>
                        <th>ĐẠO DIỄN</th>
                        <th>THỜI LƯỢNG</th>
                        <th>NƯỚC SẢN XUẤT</th>
                        <th>NỘI DUNG</th>
                        <th>NĂM SẢN XUẤT</th>
                        <th>TÊN DIỄN VIÊN</th>
                        <th>GIÁ VÉ</th>
                        <th>ẢNH</th>
                        <th>CHỨC VỤ</th>
                    </tr>
                    <?php
                    foreach ($listphim as $phim) {
                        extract($phim);
                        $suaphim = "index.php?act=suaphim&maphim=" . $maphim;
                        $xoaphim = "index.php?act=xoaphim&maphim=" . $maphim;
                        $themlichchieu = "index.php?act=themlich&maphim=" . $maphim;
                        $hinhpart = "../upload/" . trim($anh);
                        if (is_file($hinhpart)) {
                            $img = "<img src='" . $hinhpart . "' height='80'>";
                        } else {
                            $img = "no poto";
                        }

                        echo '<tr>
                               
                                    <td>' . $maphim . '</td>
                                    <td>' . $tenphim . '</td>
                                    <td>' . $tentheloai . '</td>
                                    <td>' . $daodien . '</td>
                                    <td>' . $thoiluong . '</td>
                                    <td>' . $nuocsanxuat . '</td>
                                    <td>' . $noidung . '</td>
                                    <td>' . $namsannxuat . '</td>
                                    <td>' . $tendienvien . '</td>
                                    <td>' . $giave . '</td>
                                    <td>' . $img . '</td>
                                    <td> 
                                        <a href="' . $suaphim . '"><input class="edit" type="button" value="Sửa"></a>
                                        <a href="' . $xoaphim . '"><input class="delete" type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xoá bộ phim này\')"></a>
                                        <a href="' . $themlichchieu . '"><input class="themlich" type="button" value="Tạo lịch chiêu" ></a>
                                </td>
                            </tr>';
                    }
                    ?>
                    <!-- <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="index.php?act=updatefilm"><input class="edit" type="button" value="Sửa"></a>
                            <a href=""><input class="delete" type="button" value="Xóa"></a>
                        </td>
                    </tr> -->
                </table>
            </div>
            <div class="rowmb10">
                <a href="index.php?act=addphim"> <input class="mr20" type="button" value="Thêm phim"></a>
            </div>
        </form>
    </div>
</div>