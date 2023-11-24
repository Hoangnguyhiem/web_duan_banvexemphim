<?php
include "header.php";
include "model/pdo.php";
include "model/taikhoan.php";
include "model/phim.php";
include "model/danhmucphim.php";

// include "global.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // MODULE DANH MỤC PHIM
        case 'listtheloai':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'addtheloai':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {

                $tentheloai = $_POST['tentheloai'];
                add_danhmuc($tentheloai);
                $thongbao = "thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'deletetheloai':
            if (isset($_GET['matheloai'])) {
                delete_danhmuc($_GET['matheloai']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suatheloai':
            if (isset($_GET['matheloai'])) {
                $suadm = sua_danhmuc($_GET['matheloai']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatetheloai':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $matheloai = $_POST['matheloai'];
                $tentheloai = $_POST['tentheloai'];
                update_danhmuc($matheloai, $tentheloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            // MODULE USER

        case 'listkh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            $mataikhoan = $_GET['mataikhoan'];
            delete_taikhoan($mataikhoan);
            $listtaikhoan = loadall_taikhoan();
            $thongbao = "Xóa thành công";
            include "taikhoan/list.php";
            break;

            // MODULE PHIM






        case 'addphim':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $tenphim = $_POST['tenphim'];
                $daodien = $_POST['daodien'];
                $thoiluong = $_POST['thoiluong'];
                $nuocsanxuat = $_POST['nuocsanxuat'];
                $noidung = $_POST['noidung'];
                $namsannxuat = $_POST['namsannxuat'];
                $matheloai = $_POST['matheloai'];
                $tendienvien = $_POST['tendienvien'];
                $giave = $_POST['giave'];
                $canhbao = $_POST['canhbao'];
                $hinh = $_FILES['hinh']['name'];

                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                // echo ('Hinh:' . $hinh);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_phim($tenphim, $daodien, $thoiluong, $nuocsanxuat, $noidung, $namsannxuat, $matheloai, $tendienvien, $giave, $hinh, $canhbao);
                $thongbao = "thêm phim thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/themsp.php";
            break;


        case 'listfilm':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listphim = loadall_phim($kyw, $iddm);
            include "sanpham/listphim.php";
            break;

        case 'xoaphim':
            if (isset($_GET['maphim'])) {
                delete_phim($_GET['maphim']);
            }
            $listphim = loadall_phim();
            $listphim = loadall_phim("", 0);
            include "sanpham/listphim.php";
            break;
        case 'suaphim':

            if (isset($_GET['maphim']) && $_GET['maphim'] > 0) {

                $phim = loadone_phim($_GET['maphim']);
            }
            // $listdanhmuc = loadall_danhmuc();
            $listphim = loadall_phim();
            include "sanpham/updatesp.php";
            break;

        case 'updatephim':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                //    $iddm = $_POST['iddm'];
                $maphim = $_POST['maphim'];
                $tenphim = $_POST['tenphim'];
                $daodien = $_POST['daodien'];
                $thoiluong = $_POST['thoiluong'];
                $nuocsanxuat = $_POST['nuocsanxuat'];
                $noidung = $_POST['noidung'];
                $namsannxuat = $_POST['namsanxuat'];
                $tendienvien = $_POST['tendienvien'];
                $giave = $_POST['giave'];
                $canhbao = $_POST['canhbao'];
                $anh = $_FILES['anh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anh"]["name"]);

                // echo ('Hinh:' . $hinh);

                if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_phim($maphim, $tenphim, $daodien, $thoiluong, $nuocsanxuat, $noidung, $namsannxuat, $tendienvien, $giave, $anh, $canhbao);
                $thongbao = "Cập nhật thành công";
            }
            $kyw = '';
            $listdanhmuc = loadall_danhmuc();
            $listphim = loadall_phim($kyw, 0);
            // include "sanpham/updatesp.php";
            include "sanpham/listphim.php";
            break;





            // LỊCH CHIẾU

        case 'listlichchieu':
            $listlichchieu = list_lichchieu();
            include "sanpham/listlichchieu.php";
            break;

        case 'themlich':
            if (isset($_GET['maphim']) && $_GET['maphim'] > 0) {
                $phim = sualichchieu($_GET['maphim']);
            }
            $listlichchieu = list_lichchieu();
            include "sanpham/themlichchieu.php";
            break;
        case 'themlichchieu':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $maphim = $_POST['maphim'];
                $thoigianbatdau = $_POST['thoigianbatdau'];
                $thoigianketthuc = $_POST['thoigianketthuc'];
                $giochieu = $_POST['giochieu'];

                insert_lichchieu($maphim, $thoigianbatdau, $giochieu, $thoigianketthuc);
            }
            // echo $maphim, $thoigianbatdau, $giochieu, $thoigianketthuc;
            $listlichchieu = list_lichchieu();
            include "sanpham/listlichchieu.php";

            break;

        case 'xoalichchieu':
            if (isset($_GET['idLichChieu']) && $_GET['idLichChieu'] > 0) {
                $phim =  delete_lichchieu($_GET['idLichChieu']);
            }
            $listlichchieu = list_lichchieu();
            include "sanpham/listlichchieu.php";
            break;


        case 'sualichchieu':
            if (isset($_GET['idLichChieu']) && $_GET['idLichChieu'] > 0) {
                $lichchieu = sua_lichchieu($_GET['idLichChieu']);
            }
            $listlichchieu = list_lichchieu();
            include "sanpham/updatelichchieu.php";
            break;

        case 'updatelichchieu':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $idLichChieu = $_POST['idLichChieu'];
                $thoigianbatdau = $_POST['thoigianbatdau'];
                $thoigianketthuc = $_POST['thoigianketthuc'];
                $giochieu = $_POST['giochieu'];

                update_lichchieu($idLichChieu, $thoigianbatdau, $giochieu, $thoigianketthuc);
            }
            $listlichchieu = list_lichchieu();
            include "sanpham/listlichchieu.php";
            break;


            // case 'addfilm':
            //     include "sanpham/themsp.php";
            //     break;
            //     case 'updatefilm';
            //         include "sanpham/updatesp.php";
            //         break;


            // case 'dskh':
            //     $listtaikhoan = hientthi_taikhoan();
            //     // $listtaikhoan = loadall_taikhoan();
            //     include "taikhoan/list.php";


            //     break;

            // case 'addkh':
            //     if (isset($_POST['btn_addkh'])) {
            //         $user = $_POST['username'];
            //         $pass = $_POST['password'];
            //         $email = $_POST['email'];
            //         $address = $_POST['address'];
            //         $tel = $_POST['tel'];
            //         $role = $_POST['role'];
            //         insert_taikhoan_kh_admin($user, $pass, $email, $address, $tel, $role);
            //         $thongbao = "Thêm thành công";
            //     }
            //     include "taikhoan/add.php";
            //     break;
            // case 'xoatk':
            //     if (isset($_GET['id']) && $_GET['id'] > 0) {
            //         delete_taikhoan($_GET['id']);
            //     }
            //     $listtaikhoan = hientthi_taikhoan();
            //     // $listtaikhoan = loadall_taikhoan();
            //     include "taikhoan/list.php";

            //     break;

            // case 'suatk':
            //     if (isset($_POST['btn_updatekh']) && ($_POST['btn_updatekh'])) {
            //         $id = $_GET['id'];
            //         $tk = check_tk_admin($id);
            //     }
            //     include "taikhoan/update.php";
            //     break;

            // case 'editkh':

            //     require 'user.php';
            //     break;
    }
} else {
    include "home.php";
}
include "footer.php";

// include "list.php";
