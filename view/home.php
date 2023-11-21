<?php
include "view/slide.php"
    ?>
</header>
<!-- END HEADER -->
<!-- CONTAINER -->
<div class="container containerApp">
    <div class="container_top">
        <div class="container_header">
            <div class="container_header_dot"></div>

            <!-- MODULE PHIM ĐANG CHIẾU -->

            <div class="container_header_text">Phim đang chiếu</div>
        </div>
        <div class="container_content">
            <div class="product" style="height: 450px;">
                <?php
                $i = 0;
                foreach ($phim_new as $phim) {
                    extract($phim);
                    $hinh = $hinh_path . $anh;
                    $link = "index.php?act=phim_ct&maphim=$maphim";
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<a href="' . $link . '" class="item">
                        <div class="content" ' . $mr . '>
                           <img src="' . $hinh . '" alt="" class="img">
                           <img src="' . $hinh . '" alt="" class="reflection">
                           <div class="content_text">' . $tenphim . '</div>
                       </div>
                       </a>';
                    $i += 1;
                }
                ?>
                <button id="next"> > </button>
                <button id="prev">
                    < </button>
            </div>
        </div>

        <!-- MODULE PHIM SẮP CHIẾU -->

        <div class="container_header">
            <div class="container_header_dot"></div>
            <div class="container_header_text">Phim Sắp chiếu</div>
        </div>
        <div class="container_content_product">
            <?php
            $i = 0;
            foreach ($phim_sapchieu as $sapchieu) {
                extract($sapchieu);
                $hinh = $hinh_path . $anh;
                $link = "index.php?act=phim_ct&maphim=$maphim";
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<a href="' . $link . '" class="container_content_product_item">
                    <div class="container_content_product_itemImg" style="background-image: url(' . $hinh . ');" ' . $mr . '></div>
                    <div class="container_content_product_itemText" style="font-size: 11px;">
                       <p class="container_content_product_itemText1">' . $tentheloai . '</p>
                       <p class="container_content_product_itemText1">' . $namsannxuat . '</p>
                   </div>
                   <div class="container_content_product_itemTextnName">' . $tenphim . '</div>
                   </a>';
                $i += 1;
            }
            ?>
        </div>
    </div>

    <!-- MODULE TOP ƯA THÍCH -->

    <div class="container_bottom" style="height: 830px; padding-left:20px">
        <div class="container_header container_bottom_text">
            <div class="container_header_dot"></div>
            <div class="container_header_text">Top phim ưu thích</div>
        </div>
        <div class="container_bottom_item">
            <?php
            foreach ($phim_hot as $hot) {
                extract($hot);
                $hinh = $hinh_path . $anh;
                $link = "index.php?act=phim_ct&maphim=$maphim";
                echo '<a class="container_bottom_itemList" href="'.$link.'">
                <div class="container_bottom_itemList--number">0</div>
                   <img src="' . $hinh . '" alt="" class="container_bottom_itemList--img">
                   <div class="container_bottom_itemList--text">' . $tenphim . '</div>
               </a>';
            }
            ?>
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<?php
?>