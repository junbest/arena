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
                        <a href="coinbuy">
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
                        <a href="member" class="active">
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
                    <h3 class="content_title">????????????</h3>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap agency_table_wrap">
                                <div class="table_top pt_20">
                                    <div class="table_top_right table_top_right1">
                                        <div class="d-flex">
                                            <div class="input_box year_select">
                                                <select name="bank" id="bank">
                                                    <option value="">????????????</option>
													<option value="">2023.01.09</option>
                                                    <option value="">2023.01 ???</option>
                                                </select>
                                            </div>
                                            <div class="input_box ml_20">
                                                <select name="bank" id="bank">
                                                    <option value="">10?????? ??????</option>
                                                    <option value="">50?????? ??????</option>
                                                    <option value="">100?????? ??????</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a href="#" class="button">???????????? ??????</a>
                                    </div>
                                </div>
                                <table class="agency_table td_height">
                                    <tr>
                                    	<th>??????</th>
                                        <th>????????????</th>
                                        <th>??????</th>
                                        <th>????????????</th>
                                        <th>?????????</th>
                                        <th>?????????</th>
                                        <th>?????? ????????????</th><!-- ?????? ????????????, ?????? ???????????? -->
                                        <th></th>
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>mimiya - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p>???????????????</p>
                                        </td>
                                        <td>
                                            <p>2???</p>
                                        </td>
                                        <td><p>6???</p></td>
                                        <td><p>6,923???</p></td>
                                        <td><p>263,620,000???</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal02" class="button alert_modal_audio">????????????</a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2">
                                            <p>direct</p>
                                        </td>
                                        <td><p>1???</p></td>
                                        <td><p>6,923???</p></td>
                                        <td><p>263,620,000???</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1???</p></td>
                                        <td class="td_bg"><p>6,923???</p></td>
                                        <td class="td_bg"><p>263,620,000???</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="4">
                                            <p>direct</p>
                                        </td>
                                        <td><p>1???</p></td>
                                        <td><p>6,923???</p></td>
                                        <td><p>263,620,000???</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1???</p></td>
                                        <td class="td_bg"><p>6,923???</p></td>
                                        <td class="td_bg"><p>263,620,000???</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1???</p></td>
                                        <td class="td_bg"><p>6,923???</p></td>
                                        <td class="td_bg"><p>263,620,000???</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1???</p></td>
                                        <td class="td_bg"><p>6,923???</p></td>
                                        <td class="td_bg"><p>263,620,000???</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <!--  -->
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="3">
                                            <p>direct</p>
                                        </td>
                                        <td><p>1???</p></td>
                                        <td><p>6,923???</p></td>
                                        <td><p>263,620,000???</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1???</p></td>
                                        <td class="td_bg"><p>6,923???</p></td>
                                        <td class="td_bg"><p>263,620,000???</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1???</p></td>
                                        <td class="td_bg"><p>6,923???</p></td>
                                        <td class="td_bg"><p>263,620,000???</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>mimiya - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p>???????????????</p>
                                        </td>
                                        <td>
                                            <p>2???</p>
                                        </td>
                                        <td><p>6???</p></td>
                                        <td><p>6,923???</p></td>
                                        <td><p>263,620,000???</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal02" class="button alert_modal_audio">????????????</a>
                                        </td> 
                                    </tr>
                                    
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2">
                                            <p>direct</p>
                                        </td>
                                        <td><p>1???</p></td>
                                        <td><p>6,923???</p></td>
                                        <td><p>263,620,000???</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1???</p></td>
                                        <td class="td_bg"><p>6,923???</p></td>
                                        <td class="td_bg"><p>263,620,000???</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>mimiya - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p>???????????????</p>
                                        </td>
                                        <td><p>1???</p></td>
                                        <td><p>6???</p></td>
                                        <td><p>6,923???</p></td>
                                        <td><p>263,620,000???</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                </table>
                                <table class="agency_table agency_table2 td_height mt_5">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr class="table_data agency_last_tr">
                                        <td><p>??????</p></td>
                                        <td>
                                           <p>2???</p>
                                        </td>
                                        <td></td>
                                        <td><p>3???</p></td>
                                        <td><p>7???</p></td>
                                        <td><p>40,284???</p></td>
                                        <td><p>5,136,620,000???</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- agency modal -->
        <div class="coinbuy_modal_wrapper">
            <div class="modal fade" id="exampleModal02">
                <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="logo_text_box">
                            <p>????????? ????????????</p>
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div>
                        <div class="coinbuy_modal_content_wrap">
                            <form action="#" class="login_form account_form">
                                <div class="row reg_row">
                                    <div class="col-lg-12">
                                        <div class="input_box input_box1">
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
                                            <label for="pass">????????????</label>
                                            <div class="pass_box">
                                                <input type="password" id="pass" placeholder="???????????? ??????">
                                                <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="bank">????????????</label>
                                            <select name="bank" id="bank">
                                                <option value="">????????? ???????????????.</option>
                                                <option value="">????????? ???????????????.</option>
                                                <option value="">????????? ???????????????.</option>
                                                <option value="">????????? ???????????????.</option>
                                            </select>
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
                                        <div class="input_box agency_modal_input">
                                            <label for="bank">????????????</label>
                                            <select name="bank" id="bank">
                                                <option value="">????????? ???????????????.</option>
                                                <option value="">????????? ???????????????.</option>
                                                <option value="">????????? ???????????????.</option>
                                                <option value="">????????? ???????????????.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="login_btn text-center">
                                    <button class="button" data-toggle="modal" data-target="#exampleModal" type="submit">????????????</button>
                                </div>  
                            </form>
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