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
    <title>Login</title>

    <!-- favicon -->
    <link href="../img/logo.svg" type="image/svg" rel="icon">

    <!-- all css here -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/fontawesome.min.css" rel="stylesheet" type="text/css" /> 
    <link href="../css/helper.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader3">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- main area -->
    <main>
        <!-- login form --> 
        <div class="login_wrappper">
            <div class="login_box">
                <div class="login_header">
                    <a href="#" class="logo_box">
                        <img src="../img/logo.svg" alt="">
                        <div class="logo_text_box">
                            <span>COIN<span class="logo_text">TRADER</span></span> 
                        </div> 
                    </a>
                    <a href="registration.html" class="member_text">AGENCY</a>
                </div>
                <form action="#" class="login_form">
                    <div class="input_box">
                        <label for="id">아이디</label>
                        <input type="text" id="id" placeholder="아이디를 입력하세요.">
                    </div>
                    <div class="input_box">
                        <label for="pass">비밀번호</label>
                        <div class="pass_box">
                            <input type="password" id="pass" placeholder="비밀번호를 입력하세요.">
                            <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="check_box">
                        <input id="check" type="checkbox">
                        <label for="check">자동로그인</label>
                    </div>
                    <div class="login_btn text-center">
                        <button class="button alert_modal_audio" data-toggle="modal" data-target="#exampleModal" type="button">로그인</button><br>
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
                            <button class="button" type="submit">확 인</button>
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
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>