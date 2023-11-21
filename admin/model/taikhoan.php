<?php
session_start();
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by mataikhoan desc ";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($mataikhoan)
{
    $sql = "DELETE FROM taikhoan WHERE `taikhoan`.`mataikhoan` = $mataikhoan";
    pdo_execute($sql);
}
function insert_taikhoan($ho,$ten,$tentaikhoan,$sodienthoai,$email,$matkhau) {
    $sql = "INSERT INTO taikhoan (ho, ten, tentaikhoan, sodienthoai, email, matkhau) VALUES ('$ho', '$ten', '$tentaikhoan', '$sodienthoai', '$email', '$matkhau');";
    pdo_execute($sql);
};

function laylaimk($email) {
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $email = pdo_query_one($sql);
    return $email; 
};

function dangnhap($tentaikhoan,$matkhau) {
    $sql = "SELECT * FROM taikhoan WHERE tentaikhoan='$tentaikhoan' and matkhau='$matkhau'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan; 
};

function dangxuat() {
    if (isset($_SESSION['user'])) {
        session_destroy();
    }
};

function update_info($mataikhoan,$ho, $ten, $sodienthoai, $email) {
    $sql = "UPDATE taikhoan SET ho='$ho', ten='$ten', sodienthoai='$sodienthoai', email='$email' WHERE mataikhoan= ".$mataikhoan ;
    pdo_execute($sql);
};

function update_taikhoan($mataikhoan,$matkhauhientai, $matkhaumoi) {
    $sql = "UPDATE taikhoan SET matkhau='$matkhaumoi' WHERE matkhau='$matkhauhientai' AND mataikhoan= ".$mataikhoan ;
    pdo_execute($sql);
};

