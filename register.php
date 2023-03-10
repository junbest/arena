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
                        <img src="img/logo.svg" alt="">
                        <div class="logo_text_box">
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div> 
                    </a>
                    <a href="#" class="member_text">REGISTER</a>
                </div>
                <form action="#" class="login_form">
                    <div class="row reg_row">
                        <div class="col-lg-12">
                            <div class="input_box">
                                <label for="id">?????????</label>
                                <input type="text" id="id" placeholder="???????????? ???????????????.">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input_box">
                                <label for="conpass">????????????</label>
                                <div class="pass_box">
                                    <input type="password" id="conpass" placeholder="???????????? ??????">
                                    <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input_box confirm_pass">
                                <label for="pass">???????????? ??????</label>
                                <div class="pass_box">
                                    <input type="password" id="pass" placeholder="???????????? ??????">
                                    <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input_box">
                                <label for="bank">?????????</label>
                                <input type="text" id="bank" placeholder="???????????? ???????????????.">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input_box">
                                <label for="account">????????????</label>
                                <input type="text" id="account" placeholder="??????????????? ???????????????.">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input_box">
                                <label for="name">?????????</label>
                                <input type="text" id="name" placeholder="???????????? ???????????????.">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input_box">
                                <label for="partid">?????????</label>
                                <input type="text" readonly="" id="partid" placeholder="partner_id">
                            </div>
                        </div>
                    </div>
                    <div class="login_btn text-center">
                        <button class="button alert_modal_audio" data-toggle="modal" data-target="#exampleModal" type="button">????????????</button>
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
                        <p>??????????????? ?????????????????????.</p>
                        <div class="text-right">
                            <button class="button" type="submit" onclick="location.href='member_coinbuy.html'">??? ???</button>
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