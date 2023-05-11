<div class="row">
            <div class="row formtitle mb">
                <h1>
                    Danh Sách Loại Hàng 
                </h1>
            </div>
            <form action="index.php?act=listsp" method="post" >
                        <input type="text" name="kyw">
                        <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name="listok" value="Chọn">
                    </form>
            <div class="row formcontent">
                <div class="row mb10 formlist">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên SẢN PHẨM</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>LƯỢT XEM</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $hinhpath="../upload/".$img;
                                if (is_file($hinhpath)) {
                                    $hinh="<img src ='".$hinhpath."'height='80'>";
                                }
                                else {
                                    $hinh="no photo";
                                }
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$gia.'</td>
                                <td>'.$view.'</td>
                                <td>
                                   <a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                                   <a href="'.$xoasp.'"><input type="button" value="Xóa"></a> 
                                </td>
                            </tr>'; 
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