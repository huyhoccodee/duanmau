<div class="boxphai demo">
    <div class="row mb">
        <div class="boxtitle">Tài khoản</div>
        <div class="boxcontent form-tk">
            <?php
          if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
?>
            <div class="wc row mb10">
                Xin chào: <br />
                <?=$user?>
            </div>
            <div class="row mb10">
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu?</a>
            </li>
            <li>
                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            </li>
            <?php
            if ($vai_tro==1) {
            ?>
            <li>
                <a href="admin/index.php">Đăng nhập Admin</a>
            </li>
            <?php } ?>
            <li>
                <a href="index.php?act=thoat">Thoát</a>
            </li>
            </div>
            <?php
          }else{
          ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập<br />
                    <input type="text" name="user" />
                </div>
                <div class="row mb10">
                    Mật khẩu
                    <input type="password" name="pass" />
                </div>
                <div class="row mb10">
                    <input type="checkbox" name="" id="" />Ghi nhớ tài khoản
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap" />
                </div>
            </form>
            <li>
                <a href="#">Quên mật khẩu?</a>
            </li>
            <li>
                <a href="index.php?act=dangky">Đăng ký thành viên</a>
            </li>
            <?php 
            }
            ?>
        </div>
    </div>
    <div class="row mb">
        <div class="boxtitle">Danh mục</div>
        <div class="boxcontent2">
            <div class="list-group">
                <?php
                foreach ($dsdm as $dm) {
                  extract($dm);
                  $linkdm="index.php?act=sanpham&id=".$ma_loai;
                  echo '<a href="'.$linkdm.'" class="list-group-item">'.$ten_loai.'</a>';
                }
                ?>
                <!-- <a href="#" class="list-group-item">Son môi</a>
                <a href="#" class="list-group-item">Mặt nạ</a>
                <a href="#" class="list-group-item">Kem dưỡng</a>
                <a href="#" class="list-group-item">Kem chống nắng</a> -->
            </div>
        </div>
        <div class="boxfooter searchbox">
            <form action="index.php?act=sanpham" method="post">
                <input type="text" name="kyw" id="" />
                <input type="submit" name="timkiem" value="Tìm kiếm">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="boxtitle">Top 10 yêu thích</div>
        <div class="row boxcontent">
            <?php
              foreach ($dstop10 as $sp) {
                extract($sp);
                $linksp="index.php?act=sanphamct&id=".$ma_hh;
                $img=$img_path.$hinh;
                echo 
              '<div class="toptt row mb10 top10">
              <a href="'.$linksp.'"><img src="'.$img.'" alt="" /></a>
                <a href="'.$linksp.'">'.$ten_hh.'</a>
              </div>';
              }
              ?>
            <!-- <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Kem Chống Nắng La Roche-Posay</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div>
              <div class="row mb10 top10">
                <img src="./image/Merzy1.webp" alt="" />
                <a href="">Merzy Noir In The Mellow Tint</a>
              </div> -->
        </div>
    </div>
</div>