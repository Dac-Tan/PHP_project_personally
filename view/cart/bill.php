<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>
                        <?php
                            if(isset($_SESSION['user'])){
                                $name=$_SESSION['user']['user'];
                                $email=$_SESSION['user']['email'];
                                $address=$_SESSION['user']['address'];
                                $tel=$_SESSION['user']['tel'];
                            }else{
                                $bill_name=""; 
                                $email="";
                                $bill_address="";
                                $tel="";
                            }

                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?=$name?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                            
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked> Thanh toán khi nhận hàng</td>
                            <td><input type="radio" name="pttt" > Chuyển khoảng ngân hàng </td>
                            <td><input type="radio" name="pttt" > Thanh toán online </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table>
                        <?php
                            viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="Tiếp Tục Đặt Hàng" name="dongydathang">
            </div>
        </form>
    </div>
    <div class="boxphai">
            <?php
                include "view/boxright.php";
            ?>
    </div>
</div>
