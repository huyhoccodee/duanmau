<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$ma_hh=$_REQUEST['ma_hh'];
$dsbl= loadall_binhluan($ma_hh);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
    .binhluan table {
        width: 90%;
        margin-left: 5%;
    }
    .binhluan table td:nth-child(1){
        width: 50%;
    }
    .binhluan table td:nth-child(2){
        width: 20%;
    }
    .binhluan table td:nth-child(3){
        width: 30%;
    }
    </style>
</head>

<body>
    <div class="row mb">
        <div class="boxtitle">Bình luận</div>
        <div class="boxcontent2 binhluan">
        <div class="list-group">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                  extract($bl);
                  echo '<tr><td>'.$noi_dung.'</td>';
                  echo '<td>'.$ma_kh.'</td>';
                  echo '<td>'.$ngay_bl.'</td></tr>';
                }
                ?>
            </table>
        </div>
        </div>
        <div class="boxfooter binhluanform">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
                <input type="hidden" name="ma_kh" value="<?=$id?>">
                <input type="text" name="noidung" />
                <input type="submit" name="guibinhluan" value="Gửi">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
          $noi_dung=$_POST['noidung'];
          $ma_hh=$_POST['ma_hh'];
          $ma_kh=$_SESSION['user']['id'];
          $ngay_bl=date('h:i:sa d/m/Y');
          insert_binhluan($noi_dung,$ma_hh,$ma_kh,$ngay_bl);
          header("Location: ".$_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>