<div class="row">
            <div class="row formtitle">
                <h1>
                    Danh Sách Tài Khoản
                </h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formlist">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã TK</th>
                            <th>Tên Đăng Nhập</th>
                            <th>Mật Khẩu</th>
                            <th>EMAIL</th>                     
                            <th>Điện Thoại</th>
                            <th>Vai Trò</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
                                $suatk="index.php?act=suadm&id=".$id;
                                $xoatk="index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td>
                                   <a href="'.$suatk.'"><input type="button" value="Sửa"></a> 
                                   <a href="'.$xoatk.'"><input type="button" value="Xóa"></a> 
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
                <a href="index.php?act=adddm">
                    <input type="button" value="Nhập Thêm ">
                </a> 
                </div>
            </div>
        </div>