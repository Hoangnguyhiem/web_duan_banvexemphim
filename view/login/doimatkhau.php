<?php
if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
    ?>
    <div class="login">
        <form class="login_center login_center_dangnky" method="post" action="index.php?act=doimatkhau">
            <div class="login_center_top">
                <div class="login_center_topText">Đổi mật khẩu</div>
                <a href="index.php" class="login_close">
                    <i class="fa-solid fa-xmark login_center_topIcon"></i>
                </a>
            </div>
            <div class="login_cente_bottom">

                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Mật khẩu hiện tại</div>
                    <input type="text" name="matkhauhientai"
                        class="login_cente_bottom--NameInput login_cente_bottom--NameInputW"
                        placeholder="Mật khẩu hiện tại">
                </div>
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Mật khẩu mới</div>
                    <input type="text" name="matkhaumoi"
                        class="login_cente_bottom--NameInput login_cente_bottom--NameInputW" placeholder="Mật khẩu mới">
                </div>
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Xác nhận mật khẩu mới</div>
                    <input type="text" name="xacnhanmatkhaumoi"
                        class="login_cente_bottom--NameInput login_cente_bottom--NameInputW"
                        placeholder="Xác nhận mật khẩu mới">
                </div>
                <input type="hidden" name="matkhau" value="<?= $matkhau ?>">
                <input type="hidden" name="mataikhoan" value="<?= $mataikhoan ?>">
                <input class="login_cente_bottom--btn" type="submit" name="doiamatkhau" value="Xác nhận">
                <?php if (isset($thongbao) && ($thongbao != "")) {
                echo '<div class="login_center_topTextPhpErorr">' . $thongbao . '</div>';
            } ?>
            </div>
        </form>
    </div>
<?php } ?>