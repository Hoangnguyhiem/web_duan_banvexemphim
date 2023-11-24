<style>
    .slide {
        display: none;
    }
</style>
<div class="header_nav_bg">
    <?php
    extract($load_one);
    $hinh = $hinh_path . $anh;
    echo '<div class="header_nav_bgImg" style="background-image: url(' . $hinh . ');"></div>
                <div class="header_nav_bgItem">
                    <img src="' . $hinh . '" alt="" class="header_nav_bgImg2">
                    <div class="header_nav_bgText" style="width:545px; font-size: 25px;">
                        <div class="header_nav_bgText1">' . $tenphim . '</div>
                        <div class="header_nav_bgText3" style=" display: flex; height: 25px; flex-wrap: wrap; flex-direction: column-reverse; align-content: space-between; width:600px;">
                            <div class="header_nav_bgText2">' . $tentheloai . '</div>
                            <div class="header_nav_bgText2">' . $nuocsanxuat . '</div>
                            <div class="header_nav_bgText2">' . $thoiluong . '</div>
                            <div class="header_nav_bgText2">Đạo diễn : ' . $daodien . '</div>
                        </div>
                        <div class="header_nav_bgText2" style="height: 30px; padding-top:18px;">Diễn viên : ' . $tendienvien . '</div>
                        <div class="header_nav_bgText2" style="padding-top:40px;">Khởi chiếu : ' . date('d/m/Y', strtotime($namsannxuat))  . '</div>
                        <div class="header_nav_bgText2" style="padding-top:20px;">' . $noidung . '</div>
                        <div class="header_nav_bgText2" style="color:red; padding-top:22px;";>' . $canhbao . '</div>
                    </div>
                </div>
             
    </div>



<div class="container container_product">
';

    // Giả sử $lichchieu là mảng lịch chiếu đã lấy từ cơ sở dữ liệu

    foreach ($lichchieu as $ngay) : ?>

        <div class="container_product_header">
            <div class="container_product_header-date" data-tab="<?php echo $ngay['ngaychieu']; ?>">
                <?php echo $ngay['ngaychieu']; ?></div>
        <?php endforeach; ?>

        </div>

        <div class="container_product_headerText">
            <strong>Lưu ý:</strong> Khán giả dưới 13 tuổi chỉ chọn suất chiếu kết thúc trước 22h và Khán giả dưới 16 tuổi chỉ chọn suất chiếu kết thúc trước 23h.
        </div>
        <?php foreach ($lichchieu as $ngay) : ?>
            <div class="container_product_headerTime" data-tab="<?php echo $ngay['ngaychieu']; ?>">
                <?php
                $giochieu = explode(',', $ngay['giochieu']);
                foreach ($giochieu as $gc) : ?>
                    <div class="container_product_headerTime--list" data-tab="1"><?php echo $gc; ?></div>
                <?php endforeach; ?>
            </div>

        <?php endforeach; ?>




<!-- foreach ($lichchieu as $ngay) {
    echo '
    <div class="container_product_header">
        <div class="container_product_header-date" data-tab="' . $ngay['ngaychieu'] . '">' . $ngay['ngaychieu'] . '</div>
    </div>
    
    <div class="container_product_headerText">
        <strong>Lưu ý:</strong> Khán giả dưới 13 tuổi chỉ chọn suất chiếu kết thúc trước 22h và Khán giả dưới 16 tuổi chỉ chọn suất chiếu kết thúc trước 23h.
    </div>

    <div class="container_product_headerTime" data-tab="' . $ngay['ngaychieu'] . '">';
    
    $giochieu = explode(',', $ngay['giochieu']);
    foreach ($giochieu as $gc) {
        echo '<div class="container_product_headerTime--list" data-tab="1">' . $gc . '</div>';
    }

    echo '</div>';
}
?> -->




<div class="container_product_content">
    <div class="container_product_contents">
        <div class="container_product_contentsText">
            <div class="container_product_contentsText--left">Giờ chiếu: <strong class="container_product_contentsText--time">0</strong></div>
            <div class="container_product_contentsText--right">Thời gian chọn ghế: <strong id="countdown"></strong></div>
        </div>
        <div class="container_product_contentImg" style="background-image: url(img/screen.webp);"></div>
        <div class="container_product_contentsText--center">Phòng chiếu số: 5</div>




        <div class="container_product_contentsLists active" data-tab="1">
            <div class="container_product_contentsList">A1</div>
            <div class="container_product_contentsList">A2</div>
            <div class="container_product_contentsList">A3</div>
            <div class="container_product_contentsList">A4</div>
            <div class="container_product_contentsList">A5</div>
            <div class="container_product_contentsList">A6</div>
            <div class="container_product_contentsList">A7</div>
            <div class="container_product_contentsList">A8</div>
            <div class="container_product_contentsList">A1</div>
            <div class="container_product_contentsList">A2</div>
            <div class="container_product_contentsList">A3</div>
            <div class="container_product_contentsList">A4</div>
            <div class="container_product_contentsList">A5</div>
            <div class="container_product_contentsList">A6</div>
            <div class="container_product_contentsList">A7</div>
            <div class="container_product_contentsList">A8</div>
            <div class="container_product_contentsList">A1</div>
            <div class="container_product_contentsList">A2</div>
            <div class="container_product_contentsList">A3</div>
            <div class="container_product_contentsList">A4</div>
            <div class="container_product_contentsList">A5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A7</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A8</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A1</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A2</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A3</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A5</div>
            <div class="container_product_contentsList">A6</div>
            <div class="container_product_contentsList">A4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A6</div>
            <div class="container_product_contentsList">A4</div>
            <div class="container_product_contentsList">A5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">A4</div>
            <div class="container_product_contentsList">A5</div>
            <div class="container_product_contentsList">A6</div>
            <div class="container_product_contentsList">A4</div>
            <div class="container_product_contentsList">A5</div>
            <div class="container_product_contentsList">A6</div>
            <div class="container_product_contentsList">A4</div>
            <div class="container_product_contentsList">A5</div>
            <div class="container_product_contentsList">A6</div>
            <div class="container_product_contentsList">A6</div>
            <div class="container_product_contentsList">A4</div>
            <div class="container_product_contentsList">A5</div>
            <div class="container_product_contentsList container_product_contentsList--red">A6</div>
            <div class="container_product_contentsList container_product_contentsList--red">A6</div>
            <div class="container_product_contentsList container_product_contentsList--red">A4</div>
            <div class="container_product_contentsList container_product_contentsList--red">A5</div>
            <div class="container_product_contentsList container_product_contentsList--red">A6</div>
            <div class="container_product_contentsList container_product_contentsList--red">A4</div>
            <div class="container_product_contentsList container_product_contentsList--red">A5</div>
            <div class="container_product_contentsList container_product_contentsList--red">A6</div>
        </div>
        <div class="container_product_contentsLists " data-tab="2">
            <div class="container_product_contentsList">B1</div>
            <div class="container_product_contentsList">B2</div>
            <div class="container_product_contentsList">B3</div>
            <div class="container_product_contentsList">B4</div>
            <div class="container_product_contentsList">B5</div>
            <div class="container_product_contentsList">B6</div>
            <div class="container_product_contentsList">B7</div>
            <div class="container_product_contentsList">B8</div>
            <div class="container_product_contentsList">B1</div>
            <div class="container_product_contentsList">B2</div>
            <div class="container_product_contentsList">B3</div>
            <div class="container_product_contentsList">B4</div>
            <div class="container_product_contentsList">B5</div>
            <div class="container_product_contentsList">B6</div>
            <div class="container_product_contentsList">B7</div>
            <div class="container_product_contentsList">B8</div>
            <div class="container_product_contentsList">B1</div>
            <div class="container_product_contentsList">B2</div>
            <div class="container_product_contentsList">B3</div>
            <div class="container_product_contentsList">B4</div>
            <div class="container_product_contentsList">B5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B7</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B8</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B1</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B2</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B3</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B5</div>
            <div class="container_product_contentsList">B6</div>
            <div class="container_product_contentsList">B4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B6</div>
            <div class="container_product_contentsList">B4</div>
            <div class="container_product_contentsList">B5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">B4</div>
            <div class="container_product_contentsList">B5</div>
            <div class="container_product_contentsList">B6</div>
            <div class="container_product_contentsList">B4</div>
            <div class="container_product_contentsList">B5</div>
            <div class="container_product_contentsList">B6</div>
            <div class="container_product_contentsList">B4</div>
            <div class="container_product_contentsList">B5</div>
            <div class="container_product_contentsList">B6</div>
            <div class="container_product_contentsList">B6</div>
            <div class="container_product_contentsList">B4</div>
            <div class="container_product_contentsList">B5</div>
            <div class="container_product_contentsList container_product_contentsList--red">B6</div>
            <div class="container_product_contentsList container_product_contentsList--red">B6</div>
            <div class="container_product_contentsList container_product_contentsList--red">B4</div>
            <div class="container_product_contentsList container_product_contentsList--red">B5</div>
            <div class="container_product_contentsList container_product_contentsList--red">B6</div>
            <div class="container_product_contentsList container_product_contentsList--red">B4</div>
            <div class="container_product_contentsList container_product_contentsList--red">B5</div>
            <div class="container_product_contentsList container_product_contentsList--red">B6</div>
        </div>
        <div class="container_product_contentsLists " data-tab="3">
            <div class="container_product_contentsList">C1</div>
            <div class="container_product_contentsList">C2</div>
            <div class="container_product_contentsList">C3</div>
            <div class="container_product_contentsList">C4</div>
            <div class="container_product_contentsList">C5</div>
            <div class="container_product_contentsList">C6</div>
            <div class="container_product_contentsList">C7</div>
            <div class="container_product_contentsList">C8</div>
            <div class="container_product_contentsList">C1</div>
            <div class="container_product_contentsList">C2</div>
            <div class="container_product_contentsList">C3</div>
            <div class="container_product_contentsList">C4</div>
            <div class="container_product_contentsList">C5</div>
            <div class="container_product_contentsList">C6</div>
            <div class="container_product_contentsList">C7</div>
            <div class="container_product_contentsList">C8</div>
            <div class="container_product_contentsList">C1</div>
            <div class="container_product_contentsList">C2</div>
            <div class="container_product_contentsList">C3</div>
            <div class="container_product_contentsList">C4</div>
            <div class="container_product_contentsList">C5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C7</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C8</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C1</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C2</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C3</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C5</div>
            <div class="container_product_contentsList">C6</div>
            <div class="container_product_contentsList">C4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C6</div>
            <div class="container_product_contentsList">C4</div>
            <div class="container_product_contentsList">C5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C4</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C5</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C6</div>
            <div class="container_product_contentsList container_product_contentsList--yello">C4</div>
            <div class="container_product_contentsList">C5</div>
            <div class="container_product_contentsList">C6</div>
            <div class="container_product_contentsList">C4</div>
            <div class="container_product_contentsList">C5</div>
            <div class="container_product_contentsList">C6</div>
            <div class="container_product_contentsList">C4</div>
            <div class="container_product_contentsList">C5</div>
            <div class="container_product_contentsList">C6</div>
            <div class="container_product_contentsList">C6</div>
            <div class="container_product_contentsList">C4</div>
            <div class="container_product_contentsList">C5</div>
            <div class="container_product_contentsList container_product_contentsList--red">C6</div>
            <div class="container_product_contentsList container_product_contentsList--red">C6</div>
            <div class="container_product_contentsList container_product_contentsList--red">C4</div>
            <div class="container_product_contentsList container_product_contentsList--red">C5</div>
            <div class="container_product_contentsList container_product_contentsList--red">C6</div>
            <div class="container_product_contentsList container_product_contentsList--red">C4</div>
            <div class="container_product_contentsList container_product_contentsList--red">C5</div>
            <div class="container_product_contentsList container_product_contentsList--red">C6</div>
        </div>







        <div class="container_product_contentsInfo--chair">
            <div class="container_product_contentsInfo--chair">
                <div class="container_product_contentsListChair container_product_contentsList--red"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                        <style>
                            svg {
                                fill: #ffffff
                            }
                        </style>
                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg></div>
                <span>Đã đặt</span>
            </div>
            <div class="container_product_contentsInfo--chair">
                <div class="container_product_contentsListChair container_product_contentsList--blur"></div>
                <span>Ghế đã chọn</span>
            </div>
            <div class="container_product_contentsInfo--chair">
                <div class="container_product_contentsListChair container_product_contentsList--black"></div>
                <span>Ghế thường</span>
            </div>
            <div class="container_product_contentsInfo--chair">
                <div class="container_product_contentsListChair container_product_contentsList--yello"></div>
                <span>Ghế víp</span>
            </div>
            <div class="container_product_contentsInfo--chair">
                <div class="container_product_contentsListChair container_product_contentsList--red"></div>
                <span>Ghế đôi</span>
            </div>
        </div>
        <div class="container_product_contentsInfo--bottom">
            <div class="container_product_contentsInfo--bottomPay">
                <p>Ghế đã chọn: J11</p>
                <p>Tổng tiền: 80.000</p>
            </div>
            <div class="container_product_contentsInfo--bottomBtn">
                <button class="login_cente_bottom--btn container_pay_conten_bottom--btn" type="submit"><a href="">Quay lại</a></button>
                <button class="login_cente_bottom--btn" type="submit">Thanh toán</button>
            </div>
        </div>
    </div>

</div>
</div>
<!-- END CONTAINER -->

<!-- FOOTER -->

</div>
<script src="js/slide.js"></script>
<script src="js/productList.js"></script>
<script src="js/time.js"></script>
<script src="js/tab.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.slide').remove;
    })
</script>



</body>

</html>