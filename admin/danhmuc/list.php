<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH THỂ LOẠI PHIM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=listtheloai" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suatheloai&matheloai=" . $matheloai;
                        $xoadm = "index.php?act=deletetheloai&matheloai=" . $matheloai;
                        echo '<tr>
                                <td>' . $matheloai . '</td>
                                <td>' . $tentheloai . '</td>
                                <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a>
                                <a href="' . $xoadm . '"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xoá bộ phim này\')"></a></td>
                            </tr>';
                    }
                    ?>

                </table>
            </div>
            <div class="row mb10 ">

                <a href="index.php?act=addtheloai"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>