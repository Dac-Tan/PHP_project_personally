<div class="row mb  ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle"> Đăng ký thành viên </div>
            <div class="row boxcontent">
                <form action="index.php?act=dangky" method="post">
                    Email
                    <input type="email" name="email" placeholder="nhập email"> <br>
                    Tên
                    <input type="text" name="user" placeholder="nhập tên "> <br>
                    Mật khẩu
                    <input type="pass" name="pass" placeholder="nhập mật khẩu"> <br>
                    <input type="submit" value="Đăng ký" name="dangky">
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