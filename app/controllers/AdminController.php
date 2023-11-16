<?php
include "../views/Admin/layout/header.php";

include "../views/Admin/layout/navbar.php";

include "../views/Admin/layout/boxleft.php";

if (isset($_GET['act']) && ($_GET['act']!="")) {
$act = $_GET['act'];
switch ($act){
    case 'danhmuc':
        include '../views/Admin/danhmuc/index.php';
        break;
    case 'sanpham':
        include '../Admin/sanpham/index.php';
        break;
    case 'donhang':
        include '../Admin/donhang/index.php';
        break;
    case 'khachhang':
        include '../Admin/khachhang/index.php';
        break;

}
} else {
    include "../views/Admin/layout/content.php";
}


include "../views/Admin/layout/footer.php";
?>
