<?php

function insert_sanpham($tensp, $filename, $mota, $ngaynhap, $soluong,  $iddm, $trangthai)
{
    $sql = "INSERT INTO sanpham(ten_sp, img_sp, mota_sp, ngay_nhap, soluong_sp, id_dm, trangthai ) VALUES ('$tensp', '$filename', '$mota', '$ngaynhap', '$soluong', '$iddm', '$trangthai')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id= '$id'";
    pdo_query($sql);
}

function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC ";
    $indexsp = pdo_query($sql);
    return $indexsp;
}

?>