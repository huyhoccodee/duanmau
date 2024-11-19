<?php
function insert_taikhoan($pass,$user,$email){
    $sql="INSERT INTO `tai_khoan`(`mat_khau`,`user`,`email`) values('$pass','$user','$email');";
     pdo_execute($sql);
}

function check_user($user,$pass){
    $sql ="SELECT * FROM tai_khoan WHERE user='".$user."'AND mat_khau='".$pass."'";
            $sp = pdo_query_one($sql);
            return $sp;
}

function update_taikhoan($id,$user,$pass,$email,$tel,$address){
    $sql="UPDATE tai_khoan SET mat_khau='".$pass."',user='".$user."',email='".$email."',address='".$address."',tel='".$tel."' WHERE id=".$id;
    pdo_execute($sql);
}

function update_taikhoanad($id,$user,$pass,$email,$tel,$address,$rol){
    $sql="UPDATE tai_khoan SET mat_khau='".$pass."',user='".$user."',email='".$email."',address='".$address."',tel='".$tel."',vai_tro='".$rol."' WHERE id=".$id;
    pdo_execute($sql);
}

function check_email($email){
    $sql ="SELECT * FROM tai_khoan WHERE email='".$email."'";
            $sp = pdo_query_one($sql);
            return $sp;
}

function loadall_taikhoan(){
    $sql="SELECT * FROM tai_khoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
}

function loadone_taikhoan($id){
    $sql ="SELECT * FROM tai_khoan WHERE id=".$id;
            $tk = pdo_query_one($sql);
            return $tk;
}

function delete_taikhoan($id){
    $sql="DELETE FROM tai_khoan WHERE id=".$id;
            pdo_execute($sql);
}
?>