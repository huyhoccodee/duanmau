<main class="row mb">
    <div class="boxtrai mr demo">
        <div class="row mb">
            <div class="boxtitle mb10">SẢN PHẨM: <strong><?=$tendm?></strong></div>
            <div class=" mb">
                <?php
                $i=0;
                foreach ($dssp as $sp){
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
                  };
                  ?>
            </div>
        </div>
    </div>
    <?php
        include "boxphai.php";
        ?>
</main>