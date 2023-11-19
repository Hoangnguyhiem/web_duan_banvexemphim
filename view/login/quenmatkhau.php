<div class="login">
    <form class="login_center login_center_dangnky" method="post" action="index.php?act=quenmatkhau">
        <div class="login_center_top">
            <div class="login_center_topText">Đặt lại mật khẩu</div>
            <a href="index.php" class="login_close">
                    <i class="fa-solid fa-xmark login_center_topIcon"></i>
                </a>
        </div>

        <div class="login_cente_bottom">
            <div class="login_cente_bottom--name">
                <div class="login_cente_bottom--nameText">Email</div>
                <input name="email" type="email" text="" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW" placeholder="Email">
            </div>
            <input class="login_cente_bottom--btn" type="submit" name="datlaimk" value="Đặt lại mật khẩu">
            <div class="login_cente_bottom--text">
                <span>Bạn đã có tài khoản?</span>
                <span><a href="index.php?act=dangnhap">Đăng nhập</a></span>
            </div>
        </div>
        <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo '<div class="login_center_topTextPhp">' . $thongbao . '</div>';
            };
            ?>
    </form>
</div>