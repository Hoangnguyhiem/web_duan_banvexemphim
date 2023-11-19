<?php
// function loadall_phim()
// {
//     $sql = "SELECT * FROM `phim` ORDER BY maphim desc";
//     $listphim = pdo_query($sql);
//     return $listphim;
// }


function loadall_phim()
{
    $sql = "SELECT phim.*, theloai.tentheloai FROM `phim` INNER JOIN `theloai` ON phim.matheloai = theloai.matheloai WHERE 1";


   

    $sql .= " ORDER BY phim.maphim desc";

    $listphim = pdo_query($sql);
    return $listphim;
}






function delete_phim($maphim)
{
    $sql = "DELETE FROM phim WHERE maphim=\"" . $maphim . "\"";
    pdo_execute($sql);
}

function insert_phim($tenphim, $daodien, $thoiluong, $nuocsanxuat, $noidung, $namsannxuat, $matheloai, $tendienvien, $giave, $hinh)
{
    $sql = "INSERT INTO phim (maphim,tenphim,daodien,thoiluong,nuocsanxuat,noidung,namsannxuat,matheloai,tendienvien,giave,anh) 
    VALUES (generate_maphim(), '$tenphim', '$daodien', '$thoiluong','$nuocsanxuat','$noidung','$namsannxuat','$matheloai','$tendienvien','$giave','$hinh')";

    pdo_execute($sql);
}

function loadone_phim($maphim)
{
    $sql = "select * from phim WHERE maphim=\"" . $maphim . "\"";
    $sp = pdo_query_one($sql);
    return $sp;
}




function update_phim($maphim, $tenphim, $daodien, $thoiluong, $nuocsanxuat, $noidung, $namsannxuat, $tendienvien, $giave, $anh)
{
    if ($anh != "")
        $sql = "UPDATE phim SET tenphim ='" . $tenphim . "', daodien = '" . $daodien . "',thoiluong = '" . $thoiluong . "',nuocsanxuat = '" . $nuocsanxuat . "', noidung = '" . $noidung . "',namsannxuat = '" . $namsannxuat . "',tendienvien = '" . $tendienvien . "',giave = '" . $giave . "',anh = '" . $anh . "' WHERE maphim=\"" . $maphim . "\"";
    else
        $sql = "UPDATE phim SET tenphim ='" . $tenphim . "', daodien = '" . $daodien . "',thoiluong = '" . $thoiluong . "',nuocsanxuat = '" . $nuocsanxuat . "', noidung = '" . $noidung . "',namsannxuat = '" . $namsannxuat . "',tendienvien = '" . $tendienvien . "',giave = '" . $giave . "' WHERE maphim=\"" . $maphim . "\"";
    pdo_execute($sql);
}





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
