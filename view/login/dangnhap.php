<div class="login">
    <form class="login_center login_center_dangnhap displayNone" method="post" action="index.php?act=dangnhap">
        <div class="login_center_top">
            <div class="login_center_topText">Đăng nhập</div>
            <a href="index.php" class="login_close">
                <i class="fa-solid fa-xmark login_center_topIcon"></i>
            </a>

        </div>

        <div class="login_cente_bottom">
            <div class="login_cente_bottomList">
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Tên tài khoản</div>
                    <input type="text" text="" class="login_cente_bottom--NameInput login_cente_bottom--NameInputR"
                        placeholder="Tên tài khoản" name="tentaikhoan">
                </div>
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Mật khẩu</div>
                    <input type="password" text="" class="login_cente_bottom--NameInput" placeholder="Mật khẩu"
                        name="matkhau">
                </div>
            </div>
            <div class="login_cente_bottom--notpass"><a href="index.php?act=quenmatkhau">Quên mật khẩu?</a></div>
            <input class="login_cente_bottom--btn" type="submit" name="dangnhap" value="Đăng nhập">
            <div class="login_cente_bottom--text">
                <span>Chưa có tài khoản?</span>
                <span><a href="index.php?act=dangky">Đăng ký</a></span>
            </div>
            <?php if (isset($thongbao) && ($thongbao != "")) {
                echo '<div class="login_center_topTextPhpErorr">' . $thongbao . '</div>';
            } ?>
        </div>
    </form>
</div>