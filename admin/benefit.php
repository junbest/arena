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
                                            홍길동 님
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="admin_profile.html">프로필</a>
                                            <a class="dropdown-item" href="/admin/logout.php">로그아웃</a>
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
                                <span class="hide_text">구매 처리</span>
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
                                <span class="hide_text">판매 처리</span>
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
                                <span class="hide_text">문의하기 답변</span>
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
                                <span class="hide_text">계좌 설정</span>
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
                                <span class="hide_text">에이전시</span>
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
                                <span class="hide_text">에이전트</span>
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
                                <span class="hide_text">파트너</span>
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
                                <span class="hide_text">회원</span>
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
                                <span class="hide_text">코인 전송내역</span>
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
                        <a href="benefit" class="active">
                            <div>
                                <img src="img/icon18.svg" class="img-fluid" alt="">
                                <span class="hide_text">수익금 현황</span>
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
                                <span class="hide_text">수수료 현황</span>
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
                                <span class="hide_text">수수료 지급</span>
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
                                            홍길동 님
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="profile">프로필</a>
                                            <a class="dropdown-item" href="/admin/logout.php">로그아웃</a>
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
                    <div class="d-flex justify-content-between">
                        <h3 class="content_title">수익금 현황</h3>
                        <p class="content_title_p">5,136,620,000원</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap agency_table_wrap">
                                <div class="table_top pt_20">
                                    <div class="table_top_right table_top_right1">
                                        <div class="d-flex">
                                            <div class="input_box year_select">
                                                <select name="bank" id="bank">
                                                    <option value="">2023.01.09</option>
                                                    <option value="">2023.01 월</option>
                                                    <option value="">전체기간</option>
                                                </select>
                                            </div>
                                            <div class="input_box ml_20">
                                                <select name="bank" id="bank">
                                                    <option value="">10개씩 보기</option>
                                                    <option value="">50개씩 보기</option>
                                                    <option value="">100개씩 보기</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a href="#" class="button admin_audio" data-toggle="modal" data-target="#exampleModal02">수익금 정산하기</a>
                                    </div>
                                </div>
                                <table class="agency_table agency_table_month admin_benefit_table td_height">
                                    <tr>
                                    	<th>번호</th>
                                        <th>에이전시</th>
                                        <th>에이전트</th>
                                        <th>파트너</th>
                                        <th>일일 구매금액</th><!-- 월별 구매금액, 누적 구매금액 -->
                                        <th>일일 수수료</th><!-- 월별 수수료, 누적 수수료 -->
                                        <th>일일 수익금</th><!-- 월별 수익금, 누적 수익금 -->
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>mimiya - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p>2명</p>
                                        </td>
                                        <td>
                                            <p>5명</p>
                                        </td>
                                        <td><p>263,620,000원</p></td>
                                        <td><p>263,620,000원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>263,620,000원 (<span class="green">0.8%</span>)</p></td>
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td rowspan="4">popit - <span class="green">0.5%</span></td>
                                        <td>
                                            <p>3명</p>
                                        </td>
                                        <td><p>157,620,000원</p></td>
                                        <td><p>157,620,000원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>157,620,000원 (<span class="green">0.8%</span>)</p></td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">kbc - <span class="green">0.8%</span></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg"></td>
                                        <td class="td_bg"></td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">bq - <span class="green">0.7%</span></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg"></td>
                                        <td class="td_bg"></td>
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">opmr - <span class="green">0.8%</span></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg"></td>
                                        <td class="td_bg"></td>
                                    </tr>
                                    <!--  -->
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td rowspan="3">happy51 - <span class="green">0.7%</span></td>
                                        <td>
                                            <p>2명</p>
                                        </td>
                                        <td><p>172,620,000원</p></td>
                                        <td><p>172,620,000원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>172,620,000원 (<span class="green">0.8%</span>)</p></td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">seven - <span class="green">0.8%</span></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg"></td>
                                        <td class="td_bg"></td>
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">rocket - <span class="green">1.0%</span></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg"></td>
                                        <td class="td_bg"></td>
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>naver - <span class="green">0.5%</span></p>
                                        </td>
                                        <td>
                                            <p>1명</p>
                                        </td>
                                        <td>
                                            <p>1명</p>
                                        </td>
                                        <td><p>263,620,000원</p></td>
                                        <td><p>263,620,000원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>263,620,000원 (<span class="green">0.8%</span>)</p></td>
                                    </tr>
                                    
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2">poll - <span class="green">0.6%</span></td>
                                        <td>
                                            <p>1명</p>
                                        </td>
                                        <td><p>36,620,000원</p></td>
                                        <td><p>36,620,000원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>36,620,000원 (<span class="green">0.8%</span>)</p></td>
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">lose - <span class="green">0.9%</span></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg"></td>
                                        <td class="td_bg"></td> 
                                    </tr>
                                </table>
                                <table class="agency_table td_height admin_benefit_table agency_table2 admin_benefit_table2 td_height mt_5">
                                    <tr class="table_data agency_last_tr">
                                        <td><p>합계</p></td>
                                        <td>
                                           <p>2명</p>
                                        </td>
                                        <td><p>3명</p></td>
                                        <td><p>7명</p></td>
                                        <td><p>5,136,620,000원</p></td>
                                        <td><p>5,136,620,000원</p></td>
                                        <td><p>5,136,620,000원 (<span class="green">0.8%</span>)</p></td> 
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- admin benefit alert 01 area -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal02">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <div class="d-flex benefit_to justify-content-between">
                                <p>누적 수익금 :</p>
                                <p>412,405,147 원</p>
                            </div>
                            <div class="d-flex benefit_to justify-content-between">
                                <p>정산가능 수익금 :</p>
                                <p class="pink">32,140,452 원</p>
                            </div>
                            <div class="benefit_total">
                                <p>신청금액 :</p>
                                <p>32,100,000 원</p>
                            </div>
                            <div class="text-right alert_btn">
                                <a href="#" class="button button1">취 소</a>
                                <a href="#" class="button">확 인</a>
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