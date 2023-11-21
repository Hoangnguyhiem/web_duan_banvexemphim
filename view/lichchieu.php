<style>
    .slide {
        display: none;
    }
</style>

<!-- CONTAINER -->
<div class="container">
    <div class="container_showtime">
        <div class="container_header container_showtimeHeader">
            <div class="container_header_dot"></div>
            <div class="container_header_text">Phim đang chiếu</div>
        </div>
        <div class="container_showtime_child">
            <div class="container_showtime_childList active" data-tab="1">3-7-72023</div>
            <div class="container_showtime_childList" data-tab="2">3-7-72023</div>
            <div class="container_showtime_childList" data-tab="3">3-7-72023</div>
        </div>
        <div class="container_product_headerText">
            <strong>Lưu ý:</strong> Khán giả dưới 13 tuổi chỉ chọn suất chiếu kết thúc trước 22h và Khán giả dưới 16 tuổi chỉ chọn suất chiếu kết thúc trước 23h.
        </div>
        <div class="container_showtime_content active" data-tab="1">

            <?php
            if (!is_null($phim_lichchieu) && is_array($phim_lichchieu) && !empty($phim_lichchieu)) {
                foreach ($phim_lichchieu as $lich) {
                    extract($lich);
                    $hinh = $hinh_path . $anh;
                    $link = "index.php?act=phim_ct&maphim=$maphim";
                    echo '
                    <div class="container_showtime_contentItem">
                        <div class="container_showtime_contentItemleft">
                           <a href="' . $link . '">
                                <div class="container_showtime_contentItemImg" style="background-image: url(' . $hinh . ');"></div>
                            </a>
                        </div>
                        <div class="container_showtime_contentItemInfo">
                            <div class="container_showtime_contentItemInfo--category">
                                <p class="container_showtime_contentItemInfo--category1">' . $tentheloai . '</p>
                                <p class="container_showtime_contentItemInfo--categoryTime">' . $thoiluong . '</p>
                            </div>
                            <p class="container_showtime_contentItemInfo--name"><strong>' . $tenphim . '</strong></p>
                            <p class="container_showtime_contentItemInfo--madin">Xuất xứ: ' . $nuocsanxuat . '</p>
                            <p class="container_showtime_contentItemInfo--time">Khởi chiếu: ' . $ngaychieu . '</p>
                            <p class="container_showtime_contentItemInfo--showtime">Lịch chiếu:</p>
                            <div class="container_showtime_contentItemInfo--showtimeInput">';

                                   $giochieuArray = explode(",", $giochieu);
                                    foreach ($giochieuArray as $time) {
                                    echo '<div class="container_showtime_contentItemInfo--showtimeInputList">' . $time . '</div>';
                                                        }

                            echo '</div>
                        </div>
                    </div>';
                }
            } else {
                echo "Không có dữ liệu lịch chiếu.";
            }
            ?>

        </div>

    </div>
</div>
<!-- END CONTAINER -->





