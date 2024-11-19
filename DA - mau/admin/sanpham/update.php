<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
  $hinhpath = "<img src='" . $hinhpath . "' width='100px' height='100px'>";
} else {
  $hinhpath = "No file image!";
}

?>
<main class="row">
  <div class="row frmtitle">
    <h1>CẬP NHẬT LOẠI HÀNG</h1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="row mb10">
        Mã Sản phẩm<br />
        <select name="ma_loai" id="">
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc as $key=>$value) {
            if($ma_loai==$value['ma_loai']){
            echo '<option value="'.$value['ma_loai'].'"selected>'.$value['ten_loai'].'</option>';
            }else{
              echo '<option value="'.$value['ma_loai'].'">'.$value['ten_loai'].'</option>';
            }
          }
          ?>
        </select>
      </div>
      <div class="row mb10">
        Tên sản phẩm<br />
        <input type="text" name="tensp" value="<?= $ten_hh ?>" />
      </div>
      <div class="row mb10">
        Giá<br />
        <input type="text" name="giasp" value="<?= $don_gia ?>" />
      </div>
      <div class="row mb10">
        Hình<br />
        <?= $hinhpath?>
        <input type="file" class="imgud" name="hinh" id="" />
      </div>
      <div class="row mb10">
        Mô tả<br />
        <textarea name="mota" id="" cols="30" rows="10"><?=$mo_ta?></textarea>
      </div>
      <!-- <div class="row mb10">
              Mã loại<br />
              <input type="text" name="maloai" />
            </div> -->
      <div class="row mb10">
        <input type="hidden" name="id" value="<?= $ma_hh?>">
        <input type="submit" name="capnhat" value="Cập nhật" />
        <input type="reset" value="Nhập lại" />
        <a href="index.php?act=listsp"><input type="button" value="Danh sách" /></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao)) echo $thongbao;
      ?>
    </form>
  </div>
</main>
</div>