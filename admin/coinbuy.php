<?php
    include("../admin/include/auth_session.php");
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
    <link href="img/logo.svg" type="image/svg" rel="icon">
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
                            <span>20</span>
                            <p class="arena_p">Arena</p>
                        </li>
                        <li>
                            <div class="menu_drop">
                                <div class="menu_drop_left">
                                    <img src="img/icon5.svg" class="img-fluid" alt="">
                                    <p>0x8DFF...92C0</p>
                                </div>
                                <div class="menu_drop_right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown" aria-expanded="false">
                                            ????????? ???
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="admin_profile.html">?????????</a>
                                            <a class="dropdown-item" href="/admin/logout.php">????????????</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <p class="sidebar_heading">MANAGEMENT</p>
                <ul class="menu_area">
                    <li>
                        <a href="coinbuy" class="active">
                            <div>
                                <img src="img/icon1.svg" class="icon1 img-fluid" alt="">
                                <span class="hide_text">?????? ??????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="coinsell">
                            <div>
                                <img src="img/icon2.svg" class="img-fluid" alt="">
                                <span class="hide_text">?????? ??????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="question">
                            <div>
                                <img src="img/icon4.svg" class="img-fluid" alt="">
                                <span class="hide_text">???????????? ??????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="setting">
                            <div>
                                <img src="img/icon22.svg" class="img-fluid" alt="">
                                <span class="hide_text">?????? ??????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                </ul>
                <p class="sidebar_heading">MEMBERS</p>
                <ul class="menu_area menu_area2">
                    <li>
                        <a href="agency">
                            <div>
                                <img src="img/icon14.svg" class="img-fluid" alt="">
                                <span class="hide_text">????????????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="agent">
                            <div>
                                <img src="img/icon15.svg" class="img-fluid" alt="">
                                <span class="hide_text">????????????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="partner">
                            <div>
                                <img src="img/icon16.svg" class="img-fluid" alt="">
                                <span class="hide_text">?????????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="member">
                            <div>
                                <img src="img/icon17.svg" class="img-fluid" alt="">
                                <span class="hide_text">??????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="transfer">
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
                <p class="sidebar_heading">PROFIT</p>
                <ul class="menu_area">
                    <li>
                        <a href="benefit">
                            <div>
                                <img src="img/icon18.svg" class="img-fluid" alt="">
                                <span class="hide_text">????????? ??????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="fee">
                            <div>
                                <img src="img/icon19.svg" class="img-fluid" alt="">
                                <span class="hide_text">????????? ??????</span>
                            </div>
                            <div>
                                <i class="far fa-angle-right"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="fee-payment">
                            <div>
                                <img src="img/icon20.svg" class="img-fluid" alt="">
                                <span class="hide_text">????????? ??????</span>
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
                <header class="d-flex justify-content-between">
                    <div class="d-lg-none">
                        <a href="#" class="logo_box">
                            <img src="img/logo.svg" alt="">
                            <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div> 
                        </a>
                    </div>
                	<ul class="admin_list">
                        <li><a href="#">Admin</a></li>
                    </ul>
                    <ul class="menu_list">
                        <li>
                            <span>20</span>
                            <p class="arena_p">Arena</p>
                        </li>
                        <li>
                            <div class="menu_drop">
                                <div class="menu_drop_left">
                                    <img src="img/icon5.svg" class="img-fluid" alt="">
                                    <p>0x8DFF...92C0</p>
                                </div>
                                <div class="menu_drop_right">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown" aria-expanded="false">
                                            ????????? ???
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="profile">?????????</a>
                                            <a class="dropdown-item" href="/admin/logout.php">????????????</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- humbergar menu -->
                    <div class="d-lg-none">
                    	<div class="admin_link_box">
	                    	<div class="admin_mb_link">
		                    	<a href="#">ADMIN</a>
		                    </div>
		                    <div class="hamburger-menu"></div>
		                </div>
                    </div>
                </header>
                <!-- body area -->
                <div class="content_body">
                    <h3 class="content_title">?????? ??????</h3>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap admin_coin_buy">
                                <div class="table_top pt_20">
                                    <div class="input_box">
                                        <select name="bank" id="bank">
                                            <option value="">10?????? ??????</option>
                                            <option value="">50?????? ??????</option>
                                            <option value="">100?????? ??????</option>
                                        </select>
                                    </div>
                                </div>
                                <table class="coinbuy_table admin_table">
                                    <tr>
                                    	<th>??????</th>
                                        <th>??????</th>
                                        <th>??????</th>
                                        <th>????????????</th>
                                        <th></th>
                                        <th>?????????</th>
                                        <th>?????????</th>
                                        <th>??????</th>
                                        <th>??????</th>
                                        <th>?????????</th>
                                        <th></th>
                                    </tr>
                                    <tr class="table_data table_data3">
                                    	<td><p>2</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>?????? </span>09:57</p>
                                        </td>
                                        <td class="table_btn">
                                            <a href="#">????????????</a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p>MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                            <p><img src="img/icon7.svg" alt="">MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="img/icon8.svg" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td><p>kbc</p></td>
                                        <td><p>winner</p></td>
                                        <td>
                                            <p>30</p>
                                        </td>
                                        <td><p>300,000???</p></td>
                                        <td><p>?????????</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#" class="button button2">????????????</a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                    	<td><p>1</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>?????? </span>09:57</p>
                                        </td>
                                        <td>
                                            <a href="#">????????????</a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p>MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                            <p><img src="img/icon7.svg" alt="">MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="img/icon8.svg" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td><p>kbc</p></td>
                                        <td><p>winner</p></td>
                                        <td>
                                            <p>-30</p>
                                        </td>
                                        <td><p>300,000???</p></td>
                                        <td><p>?????????</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                        </td> 
                                    </tr>
                                    <tr class="table_data table_data2">
                                    	<td><p>1</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>?????? </span>09:57</p>
                                        </td>
                                        <td class="table_btn">
                                            <a href="#">?????????</a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p>MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                            <p><img src="img/icon7.svg" alt="">MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="img/icon8.svg" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td><p>kbc</p></td>
                                        <td><p>winner</p></td>
                                        <td>
                                            <p>30</p>
                                        </td>
                                        <td><p>300,000???</p></td>
                                        <td><p>?????????</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                        </td> 
                                    </tr>
                                    <tr class="table_data table_data4">
                                    	<td><p>1</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>?????? </span>09:57</p>
                                        </td>
                                        <td class="table_btn">
                                            <a href="#">????????????</a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p>MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                            <p><img src="img/icon7.svg" alt="">MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="img/icon8.svg" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td><p>kbc</p></td>
                                        <td><p>winner</p></td>
                                        <td>
                                            <p>30</p>
                                        </td>
                                        <td><p>300,000???</p></td>
                                        <td><p>?????????</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal_arlet01" class="button admin_audio">????????????</a>
                                        </td> 
                                    </tr>
                                </table>
                                <ul class="pagination_list">
                                    <li>
                                        <a href="#">
                                            <i class="far fa-angle-double-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-angle-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile alert 01 area -->
        <div class="coinbuyalter_wrapper admin_coinbuy_alert">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal_arlet01">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p class="p1"><span class="sp_1">????????? <span class="sp_2">300,000???</span></span></p>
                            <p>??????????????? ???????????????????</p>
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