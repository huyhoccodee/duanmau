<main class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="#" method="post">
            <div class="row mb10 frmdsloai">
                <div class="searchbox">
                <form action="../index.php?act=listsp" method="post">
                    <input type="text" name="keyw" placeholder="Nhập tên sản phẩm muốn tìm">
                    <select name="ma_loai" id="">
                        <option value="0" >Tất cả</option>
                        <?php
                    foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                     } 
                     ?>
                    </select>
                    <input type="submit" name="search" value="Tìm kiếm">
                </form>
                </div>
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ</th>
                        <th>HÌNH</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $hinhpath="../upload/".$hinh;
                        if(is_file($hinhpath)){
                            $hinhpath="<img src='".$hinhpath."' width='100px' height='100px'>";
                        }else{
                            $hinhpath="No file image!";
                        }
                        $suasp="index.php?act=suasp&id=".$ma_hh;
                        $xoasp="index.php?act=xoasp&id=".$ma_hh;
                        echo '
                    <tr>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>'.$ma_hh.'</td>
                    <td>'.$ten_hh.'</td>
                    <td>'.$don_gia.'</td>
                    <td>'.$hinhpath.'</td>
                    <td>'.$so_luot_xem.'</td>
                    <td>
                      <a href="'.$suasp.'"><input type="button" value="Sửa" /></a>

                      <a href="'.$xoasp.'"><input type="button" value="Xóa" /></a>
                    </td>
                  </tr>';
                    }
                    ?>

                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả" />
                <input type="button" value="Bỏ chọn tất cả" />
                <input type="button" value="Xóa các mục đã chọn" />
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a>
            </div>
        </form>
    </div>
</main>
</div>
