<div class="row">
<div class="tt">
  <h2>--Danh sách danh mục--</h2>
</div>

    <div class="row frmcontent">                
        <div class="row mb10 frmdsloai">
            <table>
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th></th>
            </tr>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm="index.php?act=suadm&id=".$id;
                $xoadm="index.php?act=xoadm&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
            </tr>';
            }
            ?>
            

            <!-- <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>0001</td>
                <td>Đống hồ</td>
                <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
            </tr>

            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>0001</td>
                <td>Đống hồ</td>
                <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
            </tr>

            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>0001</td>
                <td>Đống hồ</td>
                <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
            </tr>

            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>0001</td>
                <td>Đống hồ</td>
                <td><input type="button" value="Sửa"> <input type="button" value="Xóa"></td>
            </tr> -->
            </table>
        </div>
        
        <div class="btn">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>   
        
    </div>
</div>