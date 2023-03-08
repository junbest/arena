<?php

include 'functions.php';
// When form submitted, check and create user session.
if (isset($_POST['username'])) {

    $username = stripslashes($_REQUEST['username']);    // removes backslashes
    $password = stripslashes($_REQUEST['password']);

    $status = login($username, $password);
    //echo '<script>alert("W'.$status.'")</script>';
    if ($status == 'success') {
        header('location: /buy');
    } else {
        echo '<script type="text/javascript">
        window.onload = function () {
            OpenBootstrapPopup();
        };
        function OpenBootstrapPopup() {
            $("#exampleModal").modal("show");
        }
    </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
    <meta name="author" content="web-themes">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1">

    <!-- title -->
    <title>Coin Arena</title>

    <!-- favicon -->
    <link href="img/favicon.png" type="image/png" rel="icon">

    <!-- all css here -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/nice-select.css" rel="stylesheet" type="text/css" />  
    <link href="css/nice-number.min.css" rel="stylesheet" type="text/css" />  
    <link href="css/helper.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
</head>
    <!-- main area -->
    <main>
        <!-- login form --> 
        <div class="login_wrappper">
            <div class="login_box">
                <div class="login_header">
                    <a href="#" class="logo_box">
                        <img src="img/logo.svg" alt="">
                        <div class="logo_text_box">
                            <span>COIN<span class="logo_text">TRADER</span></span> 
                        </div> 
                    </a>
                    <a href="/register" class="member_text">MEMBER</a>
                </div>
                <form method="post" class="login_form">
                    <div class="input_box">
                        <label for="id">아이디</label>
                        <input type="text" id="username" name="username" placeholder="아이디를 입력하세요.">
                    </div>
                    <div class="input_box">
                        <label for="pass">비밀번호</label>
                        <div class="pass_box">
                            <input type="password" id="password" name="password" placeholder="비밀번호를 입력하세요.">
                            <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="check_box">
                        <input id="check" type="checkbox">
                        <label for="check">자동로그인</label>
                    </div>
                    <div class="login_btn text-center">
                    <input type="submit" name="submit" class="button alert_modal_audio" data-toggle="modal" value="로그인"><br>
                        <a href="/register">코인트레이더 회원가입</a> 
                    </div>  
                </form>
            </div>
        </div>
        <!-- login alert -->
        <!-- Modal -->
        <div class="login_modal">
            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                       <div class="logo_text_box">
                            <span>COIN<span class="logo_text">TRADER</span></span> 
                        </div>
                        <p>아이디, 비밀번호를 확인해주세요.</p>
                        <div class="text-right">
                            <button class="button" data-dismiss="modal">확 인</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--====== BACK TO TOP START ======-->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--====== BACK TO TOP ENDS ======-->
    
    <!-- all js here -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>