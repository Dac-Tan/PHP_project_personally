<div class="row mb  ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle"> Quyên mật khẩu </div>
            <div class="row boxcontent">
                <form action="index.php?act=quenmk" method="post">
                    Email
                    <input type="email" name="email" placeholder="nhập email"> <br>
                    
                    <input type="submit" value="Gửi" name="guiemail">
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