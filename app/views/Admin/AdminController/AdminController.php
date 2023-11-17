

<?php
 include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/boxleft.php";

if (isset($_GET['act']) && ($_GET['act']!="")) {
$act = $_GET['act'];
switch ($act){
    case 'danhmuc':
        include "../danhmuc/index.php";
        break;
    case 'banner':
        include '../banner/index.php';
        break;
    case 'khachhang':
        include '../khachhang/index.php';
         break;     
    case 'baiviet':
        include '../baiviet/index.php';
        break; 
    case 'sanpham': 
        include '../sanpham/index.php';  
        break; 
    case 'donhang':
        include '../donhang/index.php';
        break;   
    case 'khuyenmai':
        include '../khuyenmai/index.php';
        break; 
    case 'bienthe':
        include '../bienthe/index.php';
        break;              
       

}
} else {
    include "../layout/content.php";
}


include "../layout/footer.php";
?>
