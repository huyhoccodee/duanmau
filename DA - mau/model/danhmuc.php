<?php
function insert_danhmuc($tenloai){
    $sql="INSERT INTO loai_hang(ten_loai) values('$tenloai')";
        pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM loai_hang WHERE ma_loai=".$id;
            pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="SELECT * FROM loai_hang order by ma_loai desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql ="SELECT * FROM loai_hang WHERE ma_loai=".$id;
            $dm = pdo_query_one($sql);
            return $dm;
}
function update_danhmuc($id, $tenloai){
    $sql="UPDATE loai_hang SET ten_loai='".$tenloai."' WHERE ma_loai=".$id;
    pdo_execute($sql);
}

?>