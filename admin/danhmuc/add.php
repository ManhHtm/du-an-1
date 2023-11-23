<div class="tt">
  <h2>--Thêm Danh Mục Mới--</h2>
</div>
        <!-- login-area start -->
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ms-auto me-auto">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="index.php?act=adddm" method="post">
                                        <input type="text" placeholder="Mã loại" name="maloai" disabled>
                                        <input type="text" placeholder="Tên loại" name="tenloai">
                                        
                                        <div class="btn">
                                        <input type="submit" value="Thêm mới" name="themmoi">
                                        <input type="reset" value="Nhập lại">
                                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a><br>
                                      </div>
                                      <?php
                                        if(isset($thongbao)&&($thongbao)) 
                                        echo  "<font color='red'>".$thongbao."</font>"; 
                                      ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<!-- <div class="tt">
  <h2>--Thêm Danh Mục Mới--</h2>
</div>
<div class="box">
  <form action="index.php?act=adddm" method="post">
    <div class="box-text">
      Nhập mã loại <br>
      <input type="text" placeholder="Mã loại" name="tenloai">
    </div>
    <div class="btn">
      <input type="submit" value="Thêm mới" name="themmoi">
      <input type="reset" value="Nhập lại">
      <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a><br>
    </div>
    <?php
    if(isset($thongbao)&&($thongbao)) 
    echo  "<font color='red'>".$thongbao."</font>"; 
    ?>
  </form>
</div> -->


