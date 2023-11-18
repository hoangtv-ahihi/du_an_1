<?php

function insert_danhmuc($tendm, $filename, $mota, $trangthai)
{
    $sql = "INSERT INTO danhmuc(ten_dm, img_dm, mota, trang_thai) VALUES ('$tendm', '$filename', '$mota', '$trangthai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id= '$id'";
    pdo_query($sql);
}

function loadAll()
{
    $sql = "SELECT * FROM danhmuc ORDER BY id_dm  DESC";
    $indexdm = pdo_query($sql);
    return $indexdm;
}

// function loadOne($id)
// {
//     $sql = "SELECT * FROM danhmuc WHERE id = '$id'";
//     $dm = pdo_query_one($sql);
//     return $dm;
// }

// function update_danhmuc($id, $tenloai)
// {
//     $sql = "UPDATE danhmuc SET name='$tenloai' WHERE id = '$id'";
//     pdo_execute($sql);
// }
// ?>