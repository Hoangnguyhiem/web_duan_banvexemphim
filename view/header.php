<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="app">
        <!-- HEADER -->
        <header>
            <div class="header_nav">
                <div class="header_nav1">
                    <div class="header_nav1_top">
                        <a href="index.php"><img src="img/logo.png" alt="" class="header_nav_logo"></a>
                        <ul class="header_nav_menu">
                            <li class="header_nav_menuList"><a href="index.php" class="header_nav_menuList--link">TRANG
                                    CHỦ</a></li>
                            <li class="header_nav_menuList"><a href="index.php?act=lichchieu"
                                    class="header_nav_menuList--link">LỊCH CHIẾU</a></li>
                            <!-- <li class="header_nav_menuList"><a href="index?act=" class="header_nav_menuList--link">TIN TỨC</a></li> -->
                            <li class="header_nav_menuList"><a href="index.php?act=giave"
                                    class="header_nav_menuList--link">GIÁ VÉ</a></li>
                            <li class="header_nav_menuList"><a href="index.php?act=gioithieu"
                                    class="header_nav_menuList--link">GIỚI THIỆU</a></li>
                        </ul>
                    </div>

                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                        // var_dump($_SESSION['user']);
                        echo ' <div class="header_nav_user">
                        <i class="fa-solid fa-user header_nav_user--icon"></i>
                        <div class="header_nav_user--name">' . $tentaikhoan . '</div>
                        <i class="fa-solid fa-caret-right fa-rotate-90 header_nav_userClose90"></i>
                        <div class="header_nav_user--bf">
                            <div class="header_nav_user--bfInfo"><a href="index.php?act=userinfo" class="header_nav_user--bfInfoLink">Thông tin cá nhân</a></div>
                            <div class="header_nav_user--bfInfo"><a href="index.php?act=dangxuat" class="header_nav_user--bfInfoLink">Đăng xuất</a></div>
                        </div>
                    </div>';
                    } else {
                        echo '<div class="header_nav_btn">
                    <a href="index.php?act=dangky"><button class="btn">ĐĂNG KÝ</button></a>
                   <a href="index.php?act=dangnhap"> <button class="btn btnColor">ĐĂNG NHẬP</button></a>
                 </div>';
                    }
                    ?>
                </div>
            </div>
           