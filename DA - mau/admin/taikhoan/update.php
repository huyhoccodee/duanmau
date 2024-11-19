<?php
if(is_array($tk)){
    extract($tk);
}
?>
<main class="row">
        <div class="row frmtitle"><h1>CẬP NHẬT TÀI KHOẢN</h1></div>
        <div class="row frmcontent">
          <form action="index.php?act=updatetk" method="post">
            <div class="row mb10">
              Mã tài khoản<br />
              <input type="text" name="matk" disabled />
            </div>
            <div class="row mb10">
              Tên đăng nhập<br />
              <input type="text" name="user" value="<?php if(isset($user)&&($user!=" ")) echo $user;?>"/>
            </div>
            <div class="row mb10">
              Mật khẩu<br />
              <input type="text" name="pass" value="<?php if(isset($mat_khau)&&($mat_khau!=" ")) echo $mat_khau;?>"/>
            </div>
            <div class="row mb10">
              Email<br />
              <input type="text" name="email" value="<?php if(isset($email)&&($email!=" ")) echo $email;?>"/>
            </div>
            <div class="row mb10">
              Địa chỉ<br />
              <input type="text" name="address" value="<?php if(isset($address)&&($address!=" ")) echo $address;?>"/>
            </div>
            <div class="row mb10">
              Số điện thoại<br />
              <input type="text" name="tel" value="<?php if(isset($tel)&&($tel!=" ")) echo $tel;?>"/>
            </div>
            <div class="row mb10">
              Vai trò<br />
              <input type="text" name="vai_tro" value="<?php if(isset($vai_tro)&&($vai_tro!=" ")) echo $vai_tro;?>"/>
            </div>
            <div class="row mb10">
              <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>"/>
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" value="Nhập lại" />
              <a href="index.php?act=dskh"
                ><input type="button" value="Danh sách"
              /></a>
            </div>
            <?php 
            if(isset($thongbao)&&($thongbao)) echo $thongbao;
            ?>
          </form>
        </div>
      </main>
    </div>