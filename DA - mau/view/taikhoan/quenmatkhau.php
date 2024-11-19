<main class="row mb">
        <div class="boxtrai mr demo">
          <div class="boxtitle">Quên mật khẩu</div>
          <div class="boxcontent form-tk">
            <form action="index.php?act=quenmk" method="post">
              <div class="row mb10">
                Email<br />
                <input type="email" name="email" placeholder="email" />
              </div>
              <input type="submit" value="Gửi" name="guiemail" />
              <input type="reset" value="Nhập lại" />
            </form>
            <h4 class="thongbao">
                <?php
            if (isset($thongbao)&&($thongbao!="")) {
                echo $thongbao;
            }
            ?>
            </h4>
          </div>
        </div>
        <?php
        include "./view/boxphai.php";
        ?>
      </main>