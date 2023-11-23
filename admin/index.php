
<?php
session_start();
ob_start();
if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
    include "../model/conectdb.php";
    include "../model/taikhoan.php";
    
    include "header.php";
    
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            //thoát trang admin
            case 'thoat':
                if(isset($_SESSION['role'])) unset($_SESSION['role']);
                header('Location: login.php');
            //danh  mục
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    $sql="insert into danhmuc(name) values('$tenloai')";
                    pdo_execute($sql);
                    $thongbao="Thêm thành công!";
                }
                
                include "danhmuc/add.php";
                break;
            
            case 'listdm':
                $sql="select * from danhmuc order by id desc ";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;


            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql="delete from danhmuc where id=".$_GET['id'];
                    pdo_execute($sql);
                }
                $sql="select * from danhmuc order by name";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql="select * from danhmuc where id=".$_GET['id'];
                    $dm=pdo_query_one($sql);
                }
                
                include "danhmuc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    $sql="update danhmuc set name='".$tenloai."' where id=".$id;
                    pdo_execute($sql);
                    $thongbao="Cập nhật thành công!";
                }
                $sql="select * from danhmuc order by id desc ";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;
                
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";
}else{
    header('Location: index.php');
}
?>