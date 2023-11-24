<?php
function loadall_phim_home()
{
    $sql = "SELECT * FROM `phim` WHERE phim.namsannxuat < CURDATE()";
    $listphim = pdo_query($sql);
    // var_dump($listphim);
    return $listphim;
}

function loadall_phim_home2()
{
    $sql = "SELECT theloai.tentheloai,phim.anh,phim.tenphim,phim.namsannxuat,phim.maphim FROM `theloai` INNER JOIN `phim` ON phim.matheloai = theloai.matheloai
    ORDER BY phim.namsannxuat DESC limit 0,4";
    // $sql = "SELECT * FROM `phim` WHERE namsannxuat > CURDATE() ORDER BY namsannxuat DESC limit 0,8";
    // GROUP BY phim.namsannxuat > CURDATE() ORDER BY phim.namsannxuat DESC limit 0,8
    $listphim = pdo_query($sql);
    return $listphim;
}


function loadall_phim($kyw = "", $iddm = 0)
{
    $sql = "SELECT phim.*, theloai.tentheloai FROM `phim` INNER JOIN `theloai` ON phim.matheloai = theloai.matheloai WHERE 1";


    if ($kyw != "") {
        $sql .= " AND phim.tenphim LIKE '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND phim.matheloai = '" . $iddm . "'";
    }

    $sql .= " ORDER BY phim.maphim desc";

    $listphim = pdo_query($sql);
    return $listphim;
}


function loadall_phim_top5()
{

    $sql = "SELECT * FROM phim where 1 order by hot desc limit 0,7";

    $listphim = pdo_query($sql);
    return $listphim;
}


function loadone_phim($maphim)
{
    $sql = "SELECT phim.*, lichchieu.giochieu, lichchieu.ngaychieu,theloai.tentheloai
            FROM phim
            LEFT JOIN lichchieu ON phim.maphim = lichchieu.maphim
            INNER JOIN theloai ON phim.matheloai = theloai.matheloai
            WHERE phim.maphim=\"" . $maphim . "\"";

    $sp = pdo_query_one($sql);
//     var_dump($sp);
    return $sp;
 }



function delete_phim($maphim)
{
    $sql = "DELETE FROM phim WHERE maphim=\"" . $maphim . "\"";
    pdo_execute($sql);
}

function insert_phim($tenphim, $daodien, $thoiluong, $nuocsanxuat, $noidung, $namsannxuat, $matheloai, $tendienvien, $giave, $hinh, $canhbao)
{
    $count = "SELECT COUNT(*) FROM phim";
    $newId = "";
    if (pdo_query($count)[0][0] = 0) {
        $newId = "f1";
    } else {
        $newId = "f" . pdo_query($count)[0][0] + 1;
    }

    $sql = "INSERT INTO phim (maphim,tenphim,daodien,thoiluong,nuocsanxuat,noidung,namsannxuat,matheloai,tendienvien,giave,anh,canhbao) 
    VALUES ('$newId', '$tenphim', '$daodien', '$thoiluong','$nuocsanxuat','$noidung','$namsannxuat','$matheloai','$tendienvien','$giave','$hinh','$canhbao')";
    pdo_execute($sql);
}



function update_phim($maphim, $tenphim, $daodien, $thoiluong, $nuocsanxuat, $noidung, $namsannxuat, $tendienvien, $giave, $anh, $canhbao)
{
    if ($anh != "")
        $sql = "UPDATE phim SET tenphim ='" . $tenphim . "', daodien = '" . $daodien . "',thoiluong = '" . $thoiluong . "',nuocsanxuat = '" . $nuocsanxuat . "', noidung = '" . $noidung . "',namsannxuat = '" . $namsannxuat . "',tendienvien = '" . $tendienvien . "',giave = '" . $giave . "',anh = '" . $anh . "',canhbao= '" . $canhbao . "' WHERE maphim=\"" . $maphim . "\"";
    else
        $sql = "UPDATE phim SET tenphim ='" . $tenphim . "', daodien = '" . $daodien . "',thoiluong = '" . $thoiluong . "',nuocsanxuat = '" . $nuocsanxuat . "', noidung = '" . $noidung . "',namsannxuat = '" . $namsannxuat . "',tendienvien = '" . $tendienvien . "',giave = '" . $giave . "', canhbao= '" . $canhbao . "' WHERE maphim=\"" . $maphim . "\"";
    pdo_execute($sql);
}




// function update_phim($maphim, $tenphim, $daodien, $thoiluong, $nuocsanxuat, $noidung, $namsannxuat, $tendienvien, $giave, $anh)
// {
//     if ($anh != "")
//         $sql = "UPDATE phim SET tenphim ='" . $tenphim . "', daodien = '" . $daodien . "',thoiluong = '" . $thoiluong . "',nuocsanxuat = '" . $nuocsanxuat . "', noidung = '" . $noidung . "',namsannxuat = '" . $namsannxuat . "',tendienvien = '" . $tendienvien . "',giave = '" . $giave . "',anh = '" . $anh . "' WHERE maphim=\"" . $maphim . "\"";
//     else
//         $sql = "UPDATE phim SET tenphim ='" . $tenphim . "', daodien = '" . $daodien . "',thoiluong = '" . $thoiluong . "',nuocsanxuat = '" . $nuocsanxuat . "', noidung = '" . $noidung . "',namsannxuat = '" . $namsannxuat . "',tendienvien = '" . $tendienvien . "',giave = '" . $giave . "' WHERE maphim=\"" . $maphim . "\"";
//     pdo_execute($sql);
// }





//đây là về lịch chiếu nhé anh em



function themlichchieu($maphim)
{
    $sql = "select * from phim where maphim=" . $maphim;
    $dm = pdo_query_one($sql);
    return $dm;
}


// function insert_lichchieu($maphim, $tenphim, $daodien, $thoiluong, $nuocsanxuat, $noidung, $namsannxuat, $matheloai, $tendienvien, $giave, $anh)
// {
//     $sql = "INSERT INTO phim (maphim,tenphim,daodien,thoiluong,nuocsanxuat,noidung,namsannxuat,matheloai,tendienvien,giave,anh) 
//     VALUES ('$maphim', '$tenphim', '$daodien', '$thoiluong',' $nuocsanxuat',' $noidung',' $namsannxuat','$matheloai',' $tendienvien',' $giave',' $anh')";

//     pdo_execute($sql);
// }

function sualichchieu($maphim)
{
    $sql = "select * from phim WHERE maphim=\"" . $maphim . "\"";
    $sp = pdo_query_one($sql);
    return $sp;
}

function insert_lichchieu($maphim, $ngaybatdau, $giochieu, $ngayketthuc)
{
    $sql = "INSERT INTO `lichchieu` (maphim,ngaychieu,giochieu,ngayketthuc) 
    VALUES ('$maphim', '$ngaybatdau', '$giochieu', '$ngayketthuc')";

    pdo_execute($sql);
}

function list_lichchieu()
{
    $sql = "SELECT lichchieu.*, phim.tenphim FROM `lichchieu` INNER JOIN `phim` ON lichchieu.maphim = phim.maphim ORDER BY lichchieu.maphim DESC";
    $listlichchieu = pdo_query($sql);
    return $listlichchieu;
}

function delete_lichchieu($idLichChieu)
{
    $sql = "DELETE FROM lichchieu WHERE idLichChieu =" . $idLichChieu;
    pdo_execute($sql);
}


function sua_lichchieu($idLichChieu)
{
    $sql = "select * from lichchieu where idLichChieu=" . $idLichChieu;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_lichchieu($idLichChieu, $ngaybatdau, $giochieu, $ngayketthuc)
{
    // $sql = "UPDATE lichchieu SET maphim ='".$maphim"',ngaychieu = '".$ngaybatdau."',giochieu='".$giochieu."',ngayketthuc='".$ngayketthuc."' WHERE idLichChieu=\"" . $idLichChieu . "\"";

    $sql = "UPDATE lichchieu SET  ngaychieu = '" . $ngaybatdau . "',giochieu = '" . $giochieu . "',ngayketthuc = '" . $ngayketthuc . "' WHERE idLichChieu=\"" . $idLichChieu . "\"";
    pdo_execute($sql);
}



// function loadall_lichchieu()
// {
//     $sql = "SELECT lichchieu.*, phim.*
//     FROM `phim` INNER JOIN `lichchieu` ON lichchieu.maphim = phim.maphim  where 1 order by phim.maphim desc limit 0,9";
    
//     $lichchieu = pdo_query($sql);
//     return $lichchieu;
// }


// function loadall_lichchieu()
// {
//     $sql = "SELECT phim.*,theloai.tentheloai,lichchieu.*
//             FROM `phim` 
//             INNER JOIN `theloai` ON phim.matheloai = theloai.matheloai
//             INNER JOIN `lichchieu` ON phim.maphim = lichchieu.maphim
//             WHERE phim.namsannxuat < CURDATE()";
    
//     $lichchieu = pdo_query($sql);
//     return $lichchieu;
// }


// function loadall_lichchieu()
// {
//     $sql = "SELECT phim.*, theloai.tentheloai, lichchieu.*, GROUP_CONCAT(DISTINCT lichchieu.ngaychieu ORDER BY lichchieu.ngaychieu) AS ngaychieu
//             FROM `phim`
//             INNER JOIN `theloai` ON phim.matheloai = theloai.matheloai
//             INNER JOIN `lichchieu` ON phim.maphim = lichchieu.maphim
//             WHERE phim.namsannxuat < CURDATE()
//             GROUP BY phim.tenphim, theloai.tentheloai, lichchieu.giochieu
//             ORDER BY phim.tenphim, lichchieu.giochieu";

//     $lichchieu = pdo_query($sql);
//     // var_dump($lichchieu);
//     return $lichchieu;
// }


function loadall_lichchieu()
{
    $sql = "SELECT phim.*, theloai.tentheloai, lichchieu.ngaychieu, GROUP_CONCAT(lichchieu.giochieu ORDER BY lichchieu.giochieu) AS giochieu
            FROM `phim`
            INNER JOIN `theloai` ON phim.matheloai = theloai.matheloai
            INNER JOIN `lichchieu` ON phim.maphim = lichchieu.maphim
            WHERE phim.namsannxuat < CURDATE()
            GROUP BY phim.maphim, phim.tenphim, phim.thoiluong, phim.nuocsanxuat, phim.namsannxuat, theloai.tentheloai, lichchieu.ngaychieu
            ORDER BY phim.tenphim, lichchieu.ngaychieu, giochieu";

    $lichchieu = pdo_query($sql);
    // var_dump($lichchieu);
    return $lichchieu;
}
