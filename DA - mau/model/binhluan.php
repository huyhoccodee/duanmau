<?php
function insert_binhluan($noi_dung,$ma_hh,$ma_kh,$ngay_bl){
    $sql="INSERT INTO binh_luan(noi_dung,ma_hh,ma_kh,ngay_bl) values('$noi_dung','$ma_hh','$ma_kh','$ngay_bl')";
        pdo_execute($sql);
}

function loadall_binhluan($ma_hh){
    $sql="SELECT * FROM binh_luan where 1";
    if ($ma_hh>0){
    $sql.=" and ma_hh='".$ma_hh."'";
    }
    $sql.=" order by ma_bl desc";
        $dsbl = pdo_query($sql);
        return $dsbl;
}

function delete_binhluan($ma_bl){
    $sql="DELETE FROM binh_luan WHERE ma_bl=".$ma_bl;
            pdo_execute($sql);
}
?>