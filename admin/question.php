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
                        <a href="question" class="active">
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
                        <a href="benefit">
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
                    <h3 class="content_title">문의하기 답변</h3>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap admin_coin_buy">
                                <div class="table_top">
                                    <div class="input_box">
                                        <select name="bank" id="bank">
                                            <option value="">10개씩 보기</option>
                                            <option value="">50개씩 보기</option>
                                            <option value="">100개씩 보기</option>
                                        </select>
                                    </div>
                                </div>
                                <table class="coinbuy_table admin_table admin_ask_question">
                                    <tr>
                                    	<th>번호</th>
                                        <th>날짜</th>
                                        <th>상태</th>
                                        <th>파트너</th>
                                        <th>아이디</th>
                                        <th>수량</th>
                                        <th></th>
                                    </tr>
                                    <tr class="table_data table_data4">
                                        <td><p>1</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td class="table_btn">
                                            <a href="#">답변대기</a>
                                        </td>
                                        <td><p>kbc</p></td>
                                        <td><p></p></td>
                                        <td><p>입금했는데 언제 충전되나요?</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal02" class="button admin_audio">답변하기</a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data table_data3">
                                    	<td><p>1</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td class="table_btn">
                                            <a href="#">답변완료</a>
                                        </td>
                                        <td><p>kbc</p></td>
                                        <td><p>winner</p></td>
                                        <td><p>문의 있습니다.</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#" class="button button2">수정하기</a>
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
        
        <!-- askquestin view modal 02 area -->
        <div class="coinbuy_modal_wrapper">
            <div class="modal fade" id="exampleModal02">
                <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="logo_text_box">
                            <p>입금처리 언제되나요?</p>
                        </div>
                        <div class="coinbuy_modal_content_wrap">
                            <div class="ask_view_heading">
                                <p class="p1">문의내용</p>
                                <p class="p2"><span class="sp_2">2021.09.20</span>  오전 <span class="sp_2">09:57</span></p>
                            </div>
                            <div class="coinbuy_modal_content coinbuy_modal_content2">
                                <ul class="coinbuy_modal2_list ask_modal_list">
                                    <li>현재 관세법인 우신이란곳에서 2일전부터 문자가 와서</li>
                                    <li>오늘 우신에다가 입금을 했습니다 (관세)가격이 51610원이였고</li>
                                    <li>우신에다가 직접 입금했습니다 (우리은행)</li>
                                    <li>이런 경우나 사례가 있는지 답답해서 문의 올려봅니다</li>
                                    <li>자세히 알려주세요.</li>
                                </ul>
                            </div>
                            <div class="ask_view_heading mt_20">
                                <p class="p1">답변</p>
                                <p class="p2"><span class="sp_2">2021.09.20</span>  오전 <span class="sp_2">09:57</span></p>
                            </div>
                            <div class="coinbuy_modal_content coinbuy_modal_content2">
                                <ul class="coinbuy_modal2_list ask_modal_list1">
                                    <li>안녕하세요</li>
                                    <li>바라관세사무소 문재식입니다.</li>
                                    <li>관세사무소 2군대서 동일한 금액을 입금하라고 연락이 온 것이 제</li>
                                    <li>가 봐도 이상하게 보입니다.</li>
                                    <li>하나의 BL번호에는 한건만 신고가 가능하며 다른 관세사무소에서 </li>
                                    <li>연락이 오는 경우는 없다고 보시면 됩니다.</li>
                                    <li>☆수출입 통관대행 및 관세·무역·FTA 상담자문</li>
                                </ul>
                                <div class="ask_view_link">
                                    <p>* 문의 : <a href="#">jsmoon@baracustoms.co.kr</a></p>
                                    <p>* 카카오톡상담  : <a href="#"> https://pf.kakao.com/_xaXBxgC</a></p>
                                    <p class="p4">수고하세요</p>
                                </div>
                            </div>
                            <div class="ask_view_img pt_20">
                                    <img src="img/img1.png" class="img1 img-fluid" alt="">
                                    <div class="ask_view_img_link">
                                        <img src="img/icon13.svg" alt="">
                                        <a href="#">Screenshot_20220828-214038_Fiverr.jpg (188.41 kB)</a>
                                    </div>
                                </div>
                            <div class="coinbuy_modal_btn2 ask_view_modal_btn d-flex justify-content-center">
                                <a href="#" class="button">답변하기</a>
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