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
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk="index.php?act=suatk&id=".$id;
                        $xoatk="index.php?act=xoatk&id=".$id;
                        echo '
                    <tr>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$mat_khau.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.'</td>
                    <td>'.$vai_tro.'</td>
                    <td>
                      <a href="'.$suatk.'"><input type="button" value="Sửa" /></a>

                      <a href="'.$xoatk.'"><input type="button" value="Xóa" /></a>
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
