<?php
    include 'functions.php';

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: /');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: /");
    }

    $address = $_SESSION['wallet_address'];
    $balance = balance($address);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
    <meta name="author" content="web-themess">
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
        <!-- overlay area -->
        <div class="overlay"></div>
        <!-- coinbuy wrapper area -->
        <div class="coinbuy_wrapper">
            <div class="coinbuy_left">
                <div class="d-lg-block d-none">
                    <a href="#" class="logo_box">
                        <img src="img/logo.svg" alt="">
                        <div class="logo_text_box">
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div> 
                    </a>
                </div>
                <div class="d-lg-none mb_menu_list">
                    <ul class="menu_list">
                        <li>
                            <span><?php echo $balance;?></span>
                            <p class="arena_p">Arena</p>
                        </li>
                        <li>
                            <div class="menu_drop">
                                <div class="menu_drop_left">
                                    <img src="img/icon5.svg" class="img-fluid" alt="">
                                    <p><?php echo $_SESSION['wallet_address'];?></p>
                                </div>
                                <div class="menu_drop_right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $_SESSION['name'];?>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="member_profile.html">?????????</a>
                                            <a class="dropdown-item" href="#logout">????????????</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <p class="sidebar_heading">COINTRADER</p>
                <ul class="menu_area">
                    <li>
                        <a href="/buy" class="">
                            <div>
                                <img src="img/icon1.svg" class="icon1 img-fluid" alt="">
                                <span class="hide_text">?????? ????????????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/sell">
                            <div>
                                <img src="img/icon2.svg" class="img-fluid" alt="">
                                <span class="hide_text">?????? ????????????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/transfer">
                            <div>
                                <img src="img/icon3.svg" class="img-fluid" alt="">
                                <span class="hide_text">?????? ????????????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                </ul>
                <p class="sidebar_heading">CONTACT US</p>
                <ul class="menu_area menu_area2">
                    <li>
                        <a href="/support">
                            <div>
                                <img src="img/icon4.svg" class="img-fluid" alt="">
                                <span class="hide_text">????????????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="coinbuy_right w-100">
                <!-- start header -->
                <header>
                    <div class="d-lg-none">
                        <a href="#" class="logo_box">
                            <img src="img/logo.svg" alt="">
                            <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div> 
                        </a>
                    </div>
                    <ul class="menu_list">
                        <li>
                            <span><?php echo $balance;?></span>
                            <p class="arena_p">Arena</p>
                        </li>
                        <li>
                            <div class="menu_drop">
                                <div class="menu_drop_left">
                                    <img src="img/icon5.svg" class="img-fluid" alt="">
                                    <p><?php  echo $_SESSION['wallet_address'];?></p>
                                </div>
                                <div class="menu_drop_right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $_SESSION['name'];?>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/profile">?????????</a>
                                            <a class="dropdown-item" href="/buy?logout='1'">????????????</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- humbergar menu -->
                    <div class="hamburger-menu"></div>
                </header>
                <!-- body area -->
                <div class="content_body">
                    <h3 class="content_title">?????????</h3>
                    <div class="row">
                        <div class="col-lg-4 pt_25">
                            <div class="arena_coin_box arenacoin_profile_box">
                                <div class="row arena_row">
                                    <div class="col-lg-12">
                                        <form action="#" class="login_form">
                                            <div class="row reg_row">
                                                <div class="col-lg-12">
                                                    <div class="input_box input_box1">
                                                        <label for="id">?????????</label>
                                                        <input type="text" id="id" placeholder="???????????? ???????????????.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input_box">
                                                        <label for="pass">????????????</label>
                                                        <div class="pass_box">
                                                            <input type="password" id="pass" placeholder="**********">
                                                            <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input_box confirm_pass">
                                                        <label for="conpass">???????????? ??????</label>
                                                        <div class="pass_box">
                                                            <input type="password" id="conpass" placeholder="**********">
                                                            <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input_box">
                                                        <label for="bank">????????????</label>
                                                        <select name="bank" id="bank">
                                                            <option value="">????????????</option>
                                                            <option value="">????????????</option>
                                                            <option value="">????????????</option>
                                                            <option value="">????????????</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input_box">
                                                        <label for="account">????????????</label>
                                                        <input type="text" id="account" placeholder="001-3019-31-2394">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input_box">
                                                        <label for="name">?????????</label>
                                                        <input type="text" id="name" placeholder="?????????">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input_box">
                                                        <label for="partid">?????????</label>
                                                        <input type="text" readonly="" id="partid" placeholder="partner_id">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input_box">
                                                        <label for="partid">?????? ????????????</label>
                                                        <input type="text" readonly="" id="partid" placeholder="MTT2vhdBw5ZYYJvUyrI9Lb8rJDkS3UaUe6310412">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="login_btn text-center">
                                                <button class="button mb_30 alert_modal_audio" data-toggle="modal" data-target="#exampleModal_arlet01" type="button">????????????</button>
                                            </div>  
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pt_25">
                            <div class="table_wrap d-lg-block d-none">
                                <div class="profile_img">
                                    <img src="img/img2.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile alert 01 area -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal_arlet01">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>??????????????? ???????????????????</p>
                            <div class="text-right alert_btn">
                                <a href="#" class="button button1">??? ???</a>
                                <a href="#" class="button">??? ???</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>??????????????? ?????????????????????.</p>
                            <div class="text-right">
                                <a href="#" class="button">??? ???</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>??????????????? ???????????? ????????????.</p>
                            <div class="text-right">
                                <a href="#" class="button">??? ???</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>???????????? ???????????????????</p>
                            <div class="text-right alert_btn">
                                <a href="#" class="button button1">??? ???</a>
                                <a href="#" class="button">??? ???</a>
                            </div>
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