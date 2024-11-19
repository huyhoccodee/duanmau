<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$ma_loai){
    $sql="INSERT INTO `hang_hoa`(`ten_hh`,`don_gia`,`hinh`,`mo_ta`,`ma_loai`) values('$tensp','$giasp','$hinh','$mota','$ma_loai');";
        pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="DELETE FROM hang_hoa WHERE ma_hh=".$id;
            pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="SELECT * FROM hang_hoa WHERE 1 ORDER BY ma_hh desc limit 0,12";
    // where 1 tuc la dung
        $listsanpham = pdo_query($sql);
        return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="SELECT * FROM hang_hoa WHERE 1 ORDER BY so_luot_xem desc limit 0,10";
    // where 1 tuc la dung
        $listsanpham = pdo_query($sql);
        return $listsanpham;
}
function loadall_sanpham($keyw="",$id=0){
    $sql="SELECT * FROM hang_hoa WHERE 1";
    // where 1 tuc la dung
    if($keyw!=""){
        $sql.=" and ten_hh like '%".$keyw."%'";
    }
    if($id>0){
        $sql.=" and ma_loai = '".$id."'";
    }
    $sql.=" order by ma_hh desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
}

function loadone_sanpham($id){
    $sql ="SELECT * FROM hang_hoa WHERE ma_hh=".$id;
            $sp = pdo_query_one($sql);
            return $sp;
}

function load_ten_dm($id){
    if ($id>0) { 
    $sql ="SELECT * FROM loai_hang WHERE ma_loai=".$id;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $ten_loai;
    }else{
        return "";
    }
}

function load_sanpham_cungloai($id,$ma_loai){
    $sql ="SELECT * FROM hang_hoa WHERE ma_loai=".$ma_loai." AND ma_hh <> ".$id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id,$tensp,$giasp,$hinh,$mo_ta,$ma_loai){
    if($hinh!="")
    $sql="UPDATE hang_hoa SET ten_hh='".$tensp."',don_gia='".$giasp."',hinh='".$hinh."',mo_ta='".$mo_ta."',ma_loai='".$ma_loai."' WHERE ma_hh=".$id;
    else
    $sql="UPDATE hang_hoa SET ten_hh='".$tensp."',don_gia='".$giasp."',mo_ta='".$mo_ta."',ma_loai='".$ma_loai."' WHERE ma_hh=".$id;
    pdo_execute($sql);
}

?>