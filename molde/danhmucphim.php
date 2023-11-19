<?php
function loadall_danhmuc()
{
    $sql = "SELECT * FROM theloai ORDER BY matheloai DESC ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function add_danhmuc($tentheloai)
{
    $sql = "INSERT INTO theloai (matheloai,tentheloai) VALUES (generate_user_id(),'$tentheloai')";
    pdo_execute($sql);
}

function delete_danhmuc($matheloai)
{
    // $sql = "DELETE FROM theloai WHERE matheloai = '" . $matheloai . "'";
    // pdo_execute($sql);

    $sql = "DELETE FROM theloai WHERE matheloai=\"" . $matheloai . "\"";
    pdo_execute($sql);
}

function sua_danhmuc($matheloai)
{
    $sql = "SELECT * FROM theloai WHERE matheloai=\"" . $matheloai . "\"";
    $suadm = pdo_query_one($sql);
    return $suadm;
}

function update_danhmuc($matheloai, $tentheloai)
{
    $sql = "UPDATE theloai SET tentheloai ='" . $tentheloai . "' WHERE matheloai=\"" . $matheloai . "\"";
    pdo_execute($sql);
}

function loadten_danhmuc($iddm)
{
    if (isset($iddm)) {
        $sql = "SELECT * FROM theloai WHERE matheloai=\"" . $iddm . "\"";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tentheloai;
    } else {
        return "";
    }
}
