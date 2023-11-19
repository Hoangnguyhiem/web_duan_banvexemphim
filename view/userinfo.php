        <style>
            .slide{
                display: none;
            }
        </style>
        <!-- CONTAINER -->
       
        <div class="container container_user">
            <h3>Thông tin cá nhân</h3>
            <div class="container_user_listInfo">
                <div class="container_user_listInfo--story active" data-tab="1">Tài khoản của tôi</div>
                <div class="container_user_listInfo--story" data-tab="2">Lịch sử mua vé</div>
            </div>

            <?php
            if(isset($_SESSION['user'])) {
                extract($_SESSION['user']);
       
            ?>
            <form class="login_cente_user login_center_user container_user_Tab active" data-tab="1" method="post" action="index.php?act=userinfo">
                <div class="login_cente_bottomList">
                    <div class="login_cente_bottom--name">
                        <div class="login_cente_bottom--nameText">Họ</div>
                        <input type="text" name="ho" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW2" placeholder="Họ"value="<?=$ho?>">
                    </div>
                    <div class="login_cente_bottom--name">
                        <div class="login_cente_bottom--nameText">Tên</div>
                        <input type="text" name="ten" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW2" placeholder="Tên" value="<?=$ten?>">
                    </div>
                </div>
                <div class="login_cente_bottomList">
                    <div class="login_cente_bottom--name">
                        <div class="login_cente_bottom--nameText">Số điện thoại</div>
                        <input type="tel" name="sodienthoai" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW2" placeholder="Số điện thoại" value="<?=$sodienthoai?>">
                    </div>
                    <div class="login_cente_bottom--name">
                        <div class="login_cente_bottom--nameText">Email</div>
                        <input type="email" name="email" class="login_cente_bottom--NameInput login_cente_bottom--NameInputW2 login_cente_bottom--NameInputW2Email" readonly placeholder="Email" value="<?=$email?>">
                    </div>
                </div>
                <input type="hidden" name="mataikhoan" value="<?=$mataikhoan?>">
                <input class="login_cente_bottom--btn" type="submit" name="luuthongtin" value="Lưu thông tin">
                <a class="login_cente_bottomList--link" href="index.php?act=doimatkhau"><div class="login_cente_bottom--btn container_pay_conten_bottom--btn">Đổi mật khẩu</div></a>
             
            </form>
            <?php } ?>


            <div class="login_cente_user container_user_Tab" data-tab="2">
                <div class="container_user_showList--story">
                    <div class="container_user_showList--storyTop">
                        <div class="container_user_showList--storyTopText">Ngày giao dịch</div>
                        <div class="container_user_showList--storyTopText">Tên phim</div>
                        <div class="container_user_showList--storyTopText">Số vé</div>
                        <div class="container_user_showList--storyTopText">Số tiền</div>
                    </div>
                    <div class="container_user_showList--storyTop">
                        <div class="container_user_showList--storyTopText font">03-09-2003</div>
                        <div class="container_user_showList--storyTopText font">Alibaba và 3 con khỉ</div>
                        <div class="container_user_showList--storyTopText font">2</div>
                        <div class="container_user_showList--storyTopText font">160.000</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER -->