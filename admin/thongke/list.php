<div class="row">
            <div class="row formtitle">
                <h1>
                    Thống kê
                </h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formlist">
                    <table>
                        <tr>
                            <th>Mã Danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Gía cao nhất</th>
                            <th>Gía thấp nhất</th>                     
                            <th>Gía trung bình</th>
                        </tr>
                        <?php
                            foreach ($listthongke as $thongke) {
                                extract($thongke);
                                echo '<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxgia.'</td>
                                <td>'.$mingia.'</td>
                                <td>'.$avggia.'</td>
                                </tr>';                               
                            }

                         
                        ?>
                    </table>                  
                </div>
                <div class="row mb10">
                    <input type="button" value=" Chọn Tất Cả">
                    <input type="button" value="Bỏ Chọn Tất Cả">
                    <input type="button" value="Xóa Các Mục Đã Chọn">
                <a href="index.php?act=bieudo">
                    <input type="button" value="Biểu đồ ">
                </a> 
                </div>
            </div>
        </div>