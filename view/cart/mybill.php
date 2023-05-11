<div class="row mb">
    <div class="boxtrai mr">

        <div class="row mb">

            <div class="boxtitle">Đơn hàng của mày</div>
            <div class="row boxcontent cart">
                <table>          
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Số lượng đặt hàng</th>
                        <th>Tổng giá trị đơn</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    <?php
                    if(is_array($listbill)){
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                            echo  '<tr>
                                <th>TON-'.$bill['id'].'</th>
                                <th>'.$bill['ngaydathang'].'</th>
                                <th>'.$countsp.'</th>
                                <th>'.$bill['total'].'</th>
                                <th>'.$ttdh.'</th>
                            </tr>';
                                
                        }
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
        <div class="boxphai">
            <?php
                include "view/boxright.php";
            ?>
        </div>
    
</div>