<?php
if(is_array($dm)){
    extract($dm);
}
?>
<main class="row">
        <div class="row frmtitle"><h1>CẬP NHẬT LOẠI HÀNG</h1></div>
        <div class="row frmcontent">
          <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
              Mã loại<br />
              <input type="text" name="maloai" disabled />
            </div>
            <div class="row mb10">
              Tên loại<br />
              <input type="text" name="tenloai" value="<?php if(isset($ten_loai)&&($ten_loai!=" ")) echo $ten_loai;?>"/>
            </div>
            <div class="row mb10">
              <input type="hidden" name="id" value="<?php if(isset($ma_loai)&&($ma_loai>0)) echo $ma_loai; ?>"/>
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" value="Nhập lại" />
              <a href="index.php?act=listdm"
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