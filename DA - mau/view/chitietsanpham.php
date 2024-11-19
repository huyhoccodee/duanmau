<main class="row mb">
    <div class="boxtrai mr demo">
        <?php
          extract($onesp);
          $img=$img_path.$hinh;
          echo'
          <div class="row mb">
                <div class="boxtitle">'.$ten_hh.'</div>
                <div class="anhct boxcontent">
                  <img src="'.$img.'" style="max-width: 800px; width: 100%;">
                </div>
              </div>
              <div class="row mb">
                <div class="boxtitle">Mô tả</div>
                <div class="boxcontent">
                  <p class="mota" style="float: left;">'.$mo_ta.'</p>
                </div>
              </div>
          ';
          ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         <script>
          $(document).ready(function(){
              $("#binhluan").load("view/binhluan/binhluanform.php", {ma_hh: <?=$id?>});
            });
          </script> 
        <div class="row" id="binhluan">
            
        </div>
        <!-- <div class="row mb">  
          <iframe src="view/binhluan/binhluanform.php?ma_hh=<?=$id?>" frameborder="0" width="90%" height="300px"></iframe> 
        </div>  -->

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="boxcontent">
                <?php
                  foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp="index.php?act=sanphamct&id=".$ma_hh;
                    echo '<li><a href="'.$linksp.'">'.$ten_hh.'</a></li>';
                  }
                  ?>
                <!-- <li><a href="">Sản phẩm 1</a></li>
                  <li><a href="">Sản phẩm 1</a></li>
                  <li><a href="">Sản phẩm 1</a></li>
                  <li><a href="">Sản phẩm 1</a></li>
                  <li><a href="">Sản phẩm 1</a></li> -->
            </div>
        </div>
    </div>
    <?php
        include "boxphai.php";
        ?>
</main>