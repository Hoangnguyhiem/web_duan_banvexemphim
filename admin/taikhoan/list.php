<div class="row2">
    <div class="row2 font_title">
        <h1>QUẢN LÝ USER</h1>
    </div>
    <div class="row2 form_content">
        <form action="index.php?act=listdm" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <td></td>
                        <th>MÃ TÀI KHOẢN</th>
              
                        <th>TÊN TÀI KHOẢN</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>CHỨC VỤ</th>
                    </tr>
                    <!-- <tr>
                        <td>tk01</td>
                        <td>Nguyễn Minh Ngọc</td>
                        <td>ngocnmph37362</td>
                        <td>long_sat_nhan@</td>
                        <td>minhngoc2772003@gmail.com</td>
                        <td>0985039268</td>
                        <td>
                            <a href=""><input type="button" value="Sửa"></a>
                            <a href=""><input type="button" value="Xóa"></a>
                        </td>
                    </tr> -->
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&mataikhoan=" . $mataikhoan;
                        $xoatk = "index.php?act=xoatk&mataikhoan=" . $mataikhoan;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $mataikhoan . '</td>
                              
                                <td>' . $tentaikhoan . '</td>
                                <td>' . $matkhau . '</td>
                                <td>' . $email . '</td>
                                <td>' . $sodienthoai . '</td>
                                <td>
                                    <a href="' . $suatk . '"><input type="button" value="Sửa"></a> 
                                    <a href="' . $xoatk . '"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xoá tài khoản này\')"></a>
                                </td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>
        </form>
    </div>
</div>