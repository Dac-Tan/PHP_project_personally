<div class="row">
            <div class="row formtitle mb">
                <h1>
                    Danh Sách Đơn hàng
                </h1>
            </div>
            <form action="index.php?act=listsp" method="post" >
                        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                        <input type="submit" name="listok" value="Chọn">
            </form>
            <div class="row formcontent">
                <div class="row mb10 formlist">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã Đơn hàng</th>
                            <th>Kách hàng</th>
                            <th>Số lượng đơn hàng</th>
                            <th>GIÁ trị đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Thao Tác</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listbill as $bill){
                                extract($bill);
                                $kh=$bill["bill_name"].'
                                <br> '.$bill["bill_email"].' 
                                <br> '.$bill["bill_address"].' 
                                <br> '.$bill["bill_tel"];
                                $ttdh=get_ttdh($bill["bill_status"]);
                                $countsp=loadall_cart_count($bill["id"]);

                                echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>TON-'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td><strong>'.$bill["total"].'</strong>VNĐ</td> 
                                <td>'.$ttdh.'</td>
                                <td>'.$ngaydathang.'</td>
                                <td>
                                   <a href=""><input type="button" value="Sửa"></a> 
                                   <a href=""><input type="button" value="Xóa"></a> 
                                </td>
                            </tr>';;
                            }
                           

                        ?>    
                    </table>                  
                </div>
                <div class="row mb10">
                    <input type="button" value=" Chọn Tất Cả">
                    <input type="button" value="Bỏ Chọn Tất Cả">
                    <input type="button" value="Xóa Các Mục Đã Chọn">
                <a href="index.php?act=addsp">
                    <input type="button" value="Nhập Thêm ">
                </a> 
                </div>
            </div>
        </div>