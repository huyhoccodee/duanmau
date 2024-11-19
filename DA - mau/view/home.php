<main class="row mb">
    <div class="boxtrai mr demo">
        <div class="row">
        <div class="slieshow">
              <img src="./image/img/home_slider_2_d_master.webp" alt="" id="anh"/>
              <button class="previousImg" onclick="previousImg()">&#10094;</button>
              <button class="nextImg" onclick="nextImg()">&#10095;</button>
            </div>
        </div>
        <div class="row">
            <?php
            $i=0;
            foreach ($spnew as $sp) {
              extract($sp);
              $linksp="index.php?act=sanphamct&id=".$ma_hh;
              $img=$img_path.$hinh;
              if(($i==2)||($i==5)||($i==8)||($i==11) ){
                  $mr="";
              }else{
                $mr="mr";
              }
              echo '
            <div class="boxsp '.$mr.'">
              <div class="image"><a href="'.$linksp.'"><img src="'.$img.'" alt="" /></a></div>
              <p class="price">'.$don_gia.'</p>
              <a href="'.$linksp.'">'.$ten_hh.'</a>
            </div>';
            $i+=1;
            }
            ?>
            <!-- <div class="boxsp mr">
              <div class="image"><img src="image/Test.jpeg" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">Merzy</a>
            </div>
            <div class="boxsp mr">
              <div class="image"><img src="image/baner_445.png" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">BlackRouge</a>
            </div>
            <div class="boxsp">
              <div class="image"><img src="image/Merzy_li.webp" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">Merzy lì</a>
            </div>
            <div class="boxsp mr">
              <div class="image">
                <img src="image/Romand_tint2.webp" alt="" />
              </div>
              <p class="price">159.000đ</p>
              <a href="#">Romand tint</a>
            </div>
            <div class="boxsp mr">
              <div class="image"><img src="image/Romand1.webp" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">Romand</a>
            </div>
            <div class="boxsp">
              <div class="image"><img src="image/3ce_.png" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">3CE</a>
            </div>
            <div class="boxsp mr">
              <div class="image">
                <img src="image/Romand_tint2.webp" alt="" />
              </div>
              <p class="price">159.000đ</p>
              <a href="#">Romand tint </a>
            </div>
            <div class="boxsp mr">
              <div class="image"><img src="image/Romand1.webp" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">Romand</a>
            </div>
            <div class="boxsp">
              <div class="image"><img src="image/3ce_.png" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">3CE</a>
            </div>
            <div class="boxsp mr">
              <div class="image">
                <img src="image/Romand_tint2.webp" alt="" />
              </div>
              <p class="price">159.000đ</p>
              <a href="#">Romand tint </a>
            </div>
            <div class="boxsp mr">
              <div class="image"><img src="image/Romand1.webp" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">Romand</a>
            </div>
            <div class="boxsp">
              <div class="image"><img src="image/3ce_.png" alt="" /></div>
              <p class="price">159.000đ</p>
              <a href="#">3CE</a>
            </div> -->
        </div>
    </div>
    <?php 
        include "./view/boxphai.php";
        ?>
</main>