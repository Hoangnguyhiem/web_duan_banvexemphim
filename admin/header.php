<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">

</head>

<body>

    <header>
        <div class="img" style="text-align: center;">
            <img src="../upload/Admin-designstyle-jungle-m.png" alt="">
        </div>

        <div class="menu">
            <ul>
                <!-- Trang chủ -->
                <li>
                    <a href="index.php">Trang chủ</a>
                </li>
                <!-- Người dùng -->
                <li>
                    <a href="#">User</a>
                    <ul class="submenu">
                        <li><a href="index.php?act=listkh">Danh sách User</a></li>
                    </ul>
                    <ul class="submenu">
                    </ul>
                </li>
                <!-- Danh mục phim -->
                <li>
                    <a href="#">Danh mục</a>
                    <ul class="submenu">
                        <li><a href="index.php?act=listtheloai">Danh mục phim</a></li>
                    </ul>
                </li>
                <!-- Phim -->
                <li>
                    <a href="#">Film</a>
                    <ul class="submenu">
                        <li><a href="index.php?act=listfilm">Danh sách phim</a></li>
                        <li><a href="index.php?act=listlichchieu">Danh sách Lịch Chiếu</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>