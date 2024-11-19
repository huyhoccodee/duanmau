<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm';
            //kiểm tra xem ng dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "thêm thành công";
            }
            include "danhmuc/add.php";
            break;

        case 'listdm';
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'xoadm';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'suadm';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm';
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenloai = $_POST['tenloai'];
                update_danhmuc($id, $tenloai);
                $thongbao = "cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            /* controller sam pham */

        case 'addsp';
            //kiểm tra xem ng dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $targetDir = "../upload/";
                $targetFile = $targetDir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $targetFile)) {
                    echo "Upload thành công!";
                } else {
                    echo "Upload không thành công!";
                }
                $mota = $_POST['mota'];
                $ma_loai = $_POST['ma_loai'];
                insert_sanpham($tensp, $giasp, $hinh, $mota, $ma_loai);
                $thongbao = "thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp';
            if (isset($_POST['search']) && ($_POST['search'])) {
                $keyw = $_POST['keyw'];
                $id = $_POST['ma_loai'];
            } else {
                $keyw = "";
                $id = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($keyw, $id);
            include "sanpham/list.php";
            break;

        case 'xoasp';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case 'suasp';
            
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp';
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $targetDir = "../upload/";
                $targetFile = $targetDir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $targetFile)) {
                    echo "Upload thành công!";
                } else {
                    echo "Upload không thành công!";
                }
                $mo_ta = $_POST['mota'];
                $ma_loai = $_POST['ma_loai'];
                update_sanpham($id,$tensp,$giasp,$hinh,$mo_ta,$ma_loai);
                $thongbao = "cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
        case 'dskh';
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'suatk';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tk = loadone_taikhoan($_GET['id']);
            }
            include "taikhoan/update.php";
            break;
        case 'updatetk';
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id= $_POST['id'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $rol = $_POST['vai_tro'];
                update_taikhoanad($id,$user,$pass,$email,$tel,$address,$rol);
                $thongbao = "cập nhật thành công";
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

            /* controller sam pham */

        case 'xoatk';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case 'dsbl';
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;


        case 'xoabl';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'bieudo';
            include "bieudo.php";
            break;
        default:
            include "listsp.php";
    }
} else {
}
include "footer.php";
