<?php
session_start();
ob_start();

include "../model/conectdb.php";

include "../model/taikhoan.php";
if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $role=checkuser($user,$pass);
    $_SESSION['role']=$role;
    if($role==1) header('Location: index.php');
    else {
        $txt_erro = "TÀI KHOẢN NÀY KHÔNG TỒN TẠI!";
    }

}
?>
<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from htmldemo.net/ezone/ezone/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 16:03:01 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ezone - eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        < <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="../assets/css/icofont.css">
        <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="../assets/css/bundle.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <script src="../assets/js/vendor/modernizr-3.11.7.min.js"></script> 
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        
        <!-- header end -->
		<div class="section-title text-center mb-60">
            <h2>Đăng nhập</h2>
        </div>
        <!-- login-area start -->
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-6 col-xl-6 ms-auto me-auto">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                        <input type="text" name="user" placeholder="Username">
                                        <input type="password" name="pass" placeholder="Password">
                                        <div class="button-box">
                                            
                                        <input class="default-btn floatright" type="submit" name="dangnhap" value="Đăng nhập">
                                            
                                        </div>
                                        
                                        <?php
                                        if(isset($txt_erro)&&($txt_erro!="")){
                                            echo "<font color='red'>".$txt_erro."</font>";
                                        }
                                        ?>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>