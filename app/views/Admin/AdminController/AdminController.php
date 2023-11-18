<?php
 include "../layout/header.php";
include "../layout/navbar.php";
include "../layout/boxleft.php";
include "../../../models/danhmuc.php";
include "../../../models/sanpham.php";
include "../../../models/pdo.php";

if (isset($_GET['act']) && ($_GET['act']!="")) {
$act = $_GET['act'];
switch ($act){
    case 'danhmuc':
        include "../danhmuc/index.php";
        break;

    case 'adddm' :
        if (isset($_POST['themdm'])) {
            $tendm = $_POST['tendm'];
            $mota = $_POST['mota'];
            $trangthai = $_POST['trangthai'];

            $filename = $_FILES['img']['name'];
            $target_dir = "../images";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);

            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                echo "Thêm ảnh thành công";
            } else {
                echo "Không thêm được ảnh";
            }
            insert_danhmuc($tendm, $filename, $mota, $trangthai);
            $thongbao = "Thêm thành công";
        }
        include "../danhmuc/add.php";
        break;
     
    case 'updm' :
        include "../danhmuc/update.php";
        break;    

    case 'banner':
        include '../banner/index.php';
        break;

    case 'addbn':
        include '../banner/add.php';
        break;  
    
    case 'upbn':
        include '../banner/update.php';
        break;  

    case 'khachhang':
        include '../khachhang/index.php';
         break;

    case 'addkh':
        include '../khachhang/add.php';
        break;
        
    case 'upkh':
        include '../khachhang/update.php';
        break;    

    case 'baiviet':
        include '../baiviet/index.php';
        break;

    case 'addbv':
        include '../baiviet/add.php';
        break;

    case 'upbv':
        include '../baiviet/update.php';
        break;

    case 'sanpham': 
        include '../sanpham/index.php';  
        break;

    case 'addsp': 
        if (isset($_POST['themsp'])) {
            $iddm = $_POST['iddm'];
            $tensp = $_POST['tensp'];
            $mota = $_POST['mota'];
            $ngaynhap = $_POST['ngaynhap'];
            $soluong = $_POST['soluong'];
            $trangthai = $_POST['trangthai'];

            $filename = $_FILES['img']['name'];
            $target_dir = "../images";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);

            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                echo "Thêm ảnh thành công";
            } else {
                echo "Không thêm được ảnh";
            }

            insert_sanpham($tensp, $filename, $mota, $ngaynhap, $soluong,  $iddm, $trangthai);
            $thongbao = "Thêm thành công";
        }
        $indexdm = loadAll();
        include '../sanpham/add.php';  
        break;
        
    case 'upsp': 
        include '../sanpham/update.php';  
        break;    

    case 'donhang':
        include '../donhang/index.php';
        break;

    case 'adddh':
        include '../donhang/add.php';
        break;
        
    case 'updh':
        include '../donhang/update.php';
        break;    

    case 'khuyenmai':
        include '../khuyenmai/index.php';
        break;

    case 'addkm':
        include '../khuyenmai/add.php';
        break;
        
    case 'upkm':
        include '../khuyenmai/update.php';
        break;    

    case 'bienthe':
        include '../bienthe/index.php';
        break;  

    case 'addbt':
        include '../bienthe/add.php';
        break;
    
    case 'upbt':
        include '../bienthe/update.php';
        break;      

    case 'chitietdonhang':
        include '../chitietdonhang/index.php';
        break; 

    case 'addctdh':
        include '../chitietdonhang/add.php';
        break; 

    case 'upctdh':
        include '../chitietdonhang/update.php';
        break; 

    case 'phanquyen':
        include '../phanquyen/index.php';
        break; 

    case 'addpq':
        include '../phanquyen/add.php';
        break;

    case 'uppq':
        include '../phanquyen/update.php';
        break;    

    case 'lienhe':
        include '../lienhe/index.php';
        break;

    case 'addlh':
        include '../lienhe/add.php';
        break;
        
    case 'uplh':
        include '../lienhe/update.php';
        break;    

    case 'nguoidung':
        include '../nguoidung/index.php';
        break;  

    case 'addnd':
        include '../nguoidung/add.php';
        break;
    
    case 'upnd':
        include '../nguoidung/update.php';
        break;    

    case 'binhluan':
        include '../binhluan/index.php';
        break;
    
    case 'addbl':
        include '../binhluan/add.php';
        break; 
    
    case 'upbl':
        include '../binhluan/update.php';
        break;    
        

    case 'hethong':
        include '../hethong/index.php';
        break; 

    case 'addht':
        include '../hethong/add.php';
        break; 
     
    case 'upht':
        include '../hethong/update.php';
        break;     
}
} else {
    include "../layout/content.php";
}


include "../layout/footer.php";
?>
