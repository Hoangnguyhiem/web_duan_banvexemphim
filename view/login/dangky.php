<div class="login">
    <form class="login_center login_center_dangnky displayNone" action="index.php?act=dangky" method="post">
        <div class="login_center_top">
            <div class="login_center_topText">Đăng ký</div>
            <a href="index.php" class="login_close">
                <i class="fa-solid fa-xmark login_center_topIcon"></i>
            </a>
        </div>

        <div class="login_cente_bottom">
            <div class="login_cente_bottomList">
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Họ</div>
                    <input type="text" text="" name="ho" class="login_cente_bottom--NameInput" placeholder="Họ">
                </div>
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Tên</div>
                    <input type="text" text="" name="ten" class="login_cente_bottom--NameInput" placeholder="Tên">
                </div>
            </div>
            <div class="login_cente_bottomList">
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Tên tài khoản</div>
                    <input type="text" text="" name="tentaikhoan"
                        class="login_cente_bottom--NameInput login_cente_bottom--NameInputW"
                        placeholder="Tên tài khoản">
                </div>
            </div>
            <div class="login_cente_bottomList">
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Số điện thoại</div>
                    <input type="tel" text="" name="sodienthoai" class="login_cente_bottom--NameInput"
                        placeholder="Số điện thoại">
                </div>
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Email</div>
                    <input type="email" text="" name="email" class="login_cente_bottom--NameInput" placeholder="Email">
                </div>
            </div>
            <div class="login_cente_bottomList">
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Mật khẩu</div>
                    <input type="password" text="" name="matkhau" class="login_cente_bottom--NameInput"
                        placeholder="Mật khẩu">
                </div>
                <div class="login_cente_bottom--name">
                    <div class="login_cente_bottom--nameText">Xác nhận mật khẩu</div>
                    <input type="password" text="" name="xacnhanmk" class="login_cente_bottom--NameInput"
                        placeholder="Xác nhận mật khẩu">
                </div>
            </div>
            <input class="login_cente_bottom--btn" type="submit" name="dangky" value="Đăng ký">
            <div class="login_cente_bottom--text">
                <span>Bạn đã có tài khoản?</span>
                <span><a href="index.php?act=dangnhap">Đăng nhập</a></span>
            </div>

            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo '<div class="login_center_topTextPhp">' . $thongbao . '</div>';
            }
            if (isset($thongbaoErorr) && ($thongbaoErorr != "")) {
                echo '<div class="login_center_topTextPhpErorr">' . $thongbaoErorr . '</div>';
            }
            ?>



        </div>
    </form>
</div>