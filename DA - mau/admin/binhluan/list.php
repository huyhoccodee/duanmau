<main class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <form action="#" method="post">
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG</th>
                        <th>USER</th>
                        <th>MẶT HÀNG</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $xoabl="index.php?act=xoabl&id=".$ma_bl;
                        echo '
                    <tr>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>'.$ma_bl.'</td>
                    <td>'.$noi_dung.'</td>
                    <td>'.$ma_kh.'</td>
                    <td>'.$ma_hh.'</td>
                    <td>'.$ngay_bl.'</td>
                    <td>
                      <a href="'.$xoabl.'"><input type="button" value="Xóa" /></a>
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
            </div>
        </form>
    </div>
</main>
</div>
