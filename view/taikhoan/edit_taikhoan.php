<div class="row mb  ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle"> Cập Nhập Tài Khoản </div>
            <div class="row boxcontent">
                <?php
                if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    Email
                    <input type="email" name="email" placeholder="nhập email" value="<?=$email?>">  <br>
                    Tên
                    <input type="text" name="user" placeholder="nhập tên" value="<?=$user?>"> <br>
                    Mật khẩu
                    <input type="pass" name="pass" placeholder="nhập mật khẩu" value="<?=$pass?>"> <br> 
                    Điện thoại
                    <input type="pass" name="pass" placeholder="nhập mật khẩu" value="<?=$tel?>"> <br> 
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="Cập Nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                </form>
                <?php
                    if (isset($thongbao)&&($thongbao!="")) {
                        echo $thongbao;
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>