
<main class="row mb">
        <div class="boxtrai mr demo">
          <div class="boxtitle">Đăng ký thành viên</div>
          <div class="boxcontent form-tk">
            <form action="index.php?act=dangky" method="post">
              <div class="row mb10">
                Email<br />
                <input type="email" name="email" placeholder="email" />
              </div>
              <div class="row mb10">
                Tên đăng nhập
                <input type="text" name="user" placeholder="user" />
              </div>
              <div class="row mb10">
                Mật khẩu
                <input type="password" name="pass" placeholder="pass" />
              </div>
              <input type="submit" value="Đăng ký" name="dangky" />
              <input type="reset" value="Nhập lại" />
            </form>
            <div class="thongbao">
            <?php
            if (isset($thongbao)&&($thongbao!="")) {
                echo $thongbao;
            }
            ?>
            </div>
          </div>
        </div>
        <?php
        include "./view/boxphai.php";
        ?>
      </main>
     