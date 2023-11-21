<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            padding-left: 490px;
            padding-top: 10px;
            color: #EEB422;
        }

        .image>img {
            /* max-width: 100%; */

            height: 250px;
            width: 250px;
            margin: 80px;
            border-radius: 30px;
        }

        .avatar {
            display: flex;
            margin: 30px;
        }

        .tieude {
            font-size: 15.5px;
        }

        .text>p {
            text-align: center;
        }



        .user-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .user-info img {
            height: 250px;
            width: 250px;
            border-radius: 30px;
            margin-bottom: 20px;
        }

        .user-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: rgb(205 133 63);
        }

        .user-id,
        .user-major,
        .user-subject {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="all">
        <div class="tieude">
            <h1>Quản trị Website</h1>
        </div>
        <div class="avatar">
            <!-- <div class="image">
                <img src="./img/avatar/z4868760919234_5ab8e4ceef8507ec2713aec8cb2a2f08.jpg" alt="">
                <div class="text">
                    <p>Nguyễn Minh Ngọc</p>
                    <p>PH37362</p>
                    <p>Lập Trình Web</p>
                    <p>Dự Án 1</p>
                </div>
            </div> -->
            <div class="user-info">
                <img src="../upload/avatar/z4868760919234_5ab8e4ceef8507ec2713aec8cb2a2f08.jpg" alt="User Image" style="margin: 70px;">
                <h2 class="user-name">Nguyễn Minh Ngọc</h2>
                <p class="user-id">Mã sinh viên: PH37362</p>
                <p class="user-subject">Môn học: Dự án 1</p>
                <p class="user-major">Chuyên ngành: Lập trình web</p>
            </div>
            <div class="user-info">
                <img src="../upload/avatar/z4868756178889_aa1a8bcfe477012ea9fec895e1376a40.jpg" alt="User Image" style="margin: 70px;">
                <h2 class="user-name">Lê Hoàng Anh</h2>
                <p class="user-id">Mã sinh viên: PH35226</p>
                <p class="user-subject">Môn học: Dự án 1</p>
                <p class="user-major">Chuyên ngành: Lập trình web</p>
            </div>
            <div class="user-info">
                <img src="../upload/avatar/z4868757804355_aa84a07c96d95e29f613d8c5abc6a83f.jpg" alt="User Image" style="margin: 70px;">
                <h2 class="user-name">Lê Văn Long</h2>
                <p class="user-id">Mã sinh viên: PH39054</p>
                <p class="user-subject">Môn học: Dự án 1</p>
                <p class="user-major">Chuyên ngành: Lập trình web</p>
            </div>
            <!-- <div class="image">
                <img src="./img/avatar/z4868756178889_aa1a8bcfe477012ea9fec895e1376a40.jpg" alt="">
                <div class="text">
                    <p>Lê Hoàng Anh</p>
                    <p>PH35226</p>
                    <p>Lập Trình Web</p>
                    <p>Dự Án 1</p>
                </div>
            </div>
            <div class="image">
                <img src="./img/avatar/z4868757804355_aa84a07c96d95e29f613d8c5abc6a83f.jpg" alt="">
                <div class="text">
                    <p>Lê Văn Long</p>
                    <p>PH39054</p>
                    <p>Lập Trình Web</p>
                    <p>Dự Án 1</p>
                </div>
            </div> -->
        </div>
    </div>
</body>

</html>