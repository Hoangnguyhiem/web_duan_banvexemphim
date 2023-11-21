<?php
// $sql='SELECT phim.maphim, phim.tenphim, phim.daodien,phim.thoiluong,phim.nuocsanxuat,phim.noidung,phim.namsanxuat,phim.matheloai,phim.tendienvien,phim.giave,phim.anh, lichchieu.ngaychieu, lichchieu.giochieu, lichchieu.ngayketthuc
// FROM phim
// INNER JOIN lichchieu
// ON phim.maphim = lichchieu.maphim;'

?>
<div class="row2">
    <div class="font_title">
        <h1>Quản lý Lịch Chiếu </h1>
    </div>
    <div class="form_content">
        <form action="index.php?act=listlichchieu" method="POST">
            

            <div class="mb10 formds_loai">
                <table>
                    <tr>
                
                        <th>MÃ PHIM</th>
                        <th>TÊN PHIM</th>
                        <th>NGÀY CHIẾU</th>
                        <th>NGÀY KÉT THÚC</th>
                        <th>GIỜ CHIẾU</th>
                        <th>Hành Động</th>


                    </tr>
                    <?php
                    if (isset($listlichchieu) && is_array($listlichchieu)) {
                        foreach ($listlichchieu as $lichchieu) {
                            $maphim = $lichchieu['maphim'];
                            $tenphim = $lichchieu['tenphim'];
                            $ngaychieu = $lichchieu['ngaychieu'];
                            $ngayketthuc = $lichchieu['ngayketthuc'];
                            $giochieu = $lichchieu['giochieu'];
                            $idLichChieu = $lichchieu['idLichChieu'];
                            $themlichchieu = "index.php?act=themlich&maphim=" . $maphim;
                            $suaphim = "index.php?act=sualichchieu&idLichChieu=" . $idLichChieu;
                            $xoaphim = "index.php?act=xoalichchieu&idLichChieu=" .$idLichChieu;
                    
                            echo '
                        <tr>
                      
                            <td>' . $maphim . '</td>
                            <td>' . $tenphim . '</td>
                            <td>' . $ngaychieu . '</td>
                            <td>' . $ngayketthuc . '</td>
                            <td>' . $giochieu . '</td>
                           
                       
                            <td>
                                <a href="'.$suaphim.'"><input class="edit" type="button" value="Sửa"></a>
                                <a href="'.$xoaphim.'"><input class="delete" type="button" name="delete" value="Xóa"></a>
                                <a href="'.$themlichchieu.'"><input type="button" value="Tạo thêm lịch chiếu"></a>
    
                            </td>
                        </tr>
                        ';
                        }
                    } else {
                        echo "Không có lịch chiếu nào.";
                    }
                    ?>
                </table>
            </div>
            <!-- <div>
                <input class="btn btn btn-outline-dark" type="submit" value="Xóa Đã Chọn" name="delete_selected">
            </div> -->
        </form>
    </div>
</div>

</body>

</html>