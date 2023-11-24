<?php

include "admin/model/danhmucphim.php";
include "admin/model/pdo.php";
include "admin/model/phim.php";
include "admin/model/taikhoan.php";
include "global.php";

include "view/header.php";
$phim_new = loadall_phim_home();
$phim_sapchieu = loadall_phim_home2();
$phim_hot = loadall_phim_top5();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "phim_ct":
            if (isset($_GET['maphim']) && ($_GET['maphim'])) {
                $load_one = loadone_phim($_GET['maphim']);
                $lichchieu = loadall_lichchieu_by_maphim($_GET['maphim']);

            }
            include "view/chitietsanpham.php";
            break;

            case "lichchieu":
                $phim_lichchieu = loadall_lichchieu();
                if (!empty($phim_lichchieu) && is_array($phim_lichchieu)) {
                    include "view/lichchieu.php";
                } else {
                    
                    echo "Không có dữ liệu lịch chiếu hoặc dữ liệu không hợp lệ.";
                }
                break;
            
    
        case "chinhsach":
            include "view/chinhsach.php";
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "hoidap":
            include "view/hoidap.php";
            break;
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "lichchieu":
            include "view/lichchieu.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && !empty($_POST['dangnhap'])) {
                $tentaikhoan = $_POST['tentaikhoan'];
                $matkhau = $_POST['matkhau'];
                $taikhoan = dangnhap($tentaikhoan, $matkhau);
                if (is_array($taikhoan)) {
                    $_SESSION['user'] = $taikhoan;
                    Header('Location: index.php');
                } else {
                    $thongbao = "Thông tin tài khoản hoặc mât khẩu không chính xác!";
                }
            }
            include "view/login/dangnhap.php";
            break;
        case "dangky":
            if (isset($_POST['dangky']) && !empty($_POST['dangky'])) {
                $ho = $_POST['ho'];
                $ten = $_POST['ten'];
                $tentaikhoan = $_POST['tentaikhoan'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                $xacnhanmk = $_POST['xacnhanmk'];
                if (($matkhau == $xacnhanmk) && ($xacnhanmk != "")) {
                    insert_taikhoan($ho, $ten, $tentaikhoan, $sodienthoai, $email, $matkhau);
                    $thongbao = 'Đăng ký thành công' . '<i class="fa-regular fa-circle-check icon"></i>';
                } else {
                    $thongbaoErorr = 'Vui lòng nhập lại mật khẩu' . '<i class="fa-solid fa-circle-exclamation icon"></i>';
                }
            }
            include "view/login/dangky.php";
            break;
        case "dangxuat":
            dangxuat();
            header('location: index.php');
            break;
        case "quenmatkhau":
            if (isset($_POST["datlaimk"])) {
                $email = $_POST['email'];
                $laylaimk = laylaimk($email);
                if (is_array($laylaimk)) {
                    $thongbao = "Mật khẩu của bạn là:" . $laylaimk['matkhau'];
                } else {
                    $thongbao = "Gmail này không tồn tại";
                }
            }
            ;
            include "view/login/quenmatkhau.php";
            break;
        case "doimatkhau":
            if (isset($_POST['doiamatkhau']) && !empty($_POST['doiamatkhau'])) {
                $matkhau = $_POST['matkhau'];
                $mataikhoan = $_POST['mataikhoan'];
                $matkhauhientai = $_POST['matkhauhientai'];
                $matkhaumoi = $_POST['matkhaumoi'];
                $xacnhanmatkhaumoi = $_POST['xacnhanmatkhaumoi'];
                if (($matkhau == $matkhauhientai) && ($matkhaumoi == $xacnhanmatkhaumoi)) {
                    update_taikhoan($mataikhoan, $matkhauhientai, $matkhaumoi);
                } else {
                    $thongbao = "Thông tin mật khẩu không hợp lệ";
                }
                ;
            }
            ;
            include "view/login/doimatkhau.php";
            break;
        case "userinfo":
            if (isset($_POST['luuthongtin']) && !empty($_POST['luuthongtin'])) {
                $mataikhoan = $_POST['mataikhoan'];
                $ho = $_POST['ho'];
                $ten = $_POST['ten'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                echo $mataikhoan;
                update_info($mataikhoan, $ho, $ten, $sodienthoai, $email);
                echo  $thongbao = "Thay đổi thông tin thành công";
                $_SESSION['user'] = dangnhap($tentaikhoan, $matkhau);
            }
            ;
            include "view/userinfo.php";
            break;
    }
} else {
    include "view/home.php";
}



include "view/footer.php";
