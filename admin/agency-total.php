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
                        <a href="member" class="active">
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
                    <h3 class="content_title">에이전시</h3>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap agency_table_wrap">
                                <div class="table_top pt_20">
                                    <div class="table_top_right table_top_right1">
                                        <div class="d-flex">
                                            <div class="input_box year_select">
                                                <select name="bank" id="bank">
                                                    <option value="">전체기간</option>
													<option value="">2023.01.09</option>
                                                    <option value="">2023.01 월</option>
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
                                        <a href="#" class="button">에이전시 등록</a>
                                    </div>
                                </div>
                                <table class="agency_table td_height">
                                    <tr>
                                    	<th>번호</th>
                                        <th>에이전시</th>
                                        <th>메모</th>
                                        <th>에이전트</th>
                                        <th>파트너</th>
                                        <th>회원수</th>
                                        <th>누적 구매금액</th><!-- 일별 구매금액, 월별 구매금액 -->
                                        <th></th>
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>mimiya - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p>남산선생님</p>
                                        </td>
                                        <td>
                                            <p>2명</p>
                                        </td>
                                        <td><p>6명</p></td>
                                        <td><p>6,923명</p></td>
                                        <td><p>263,620,000원</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal02" class="button alert_modal_audio">수정하기</a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2">
                                            <p>direct</p>
                                        </td>
                                        <td><p>1명</p></td>
                                        <td><p>6,923명</p></td>
                                        <td><p>263,620,000원</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1명</p></td>
                                        <td class="td_bg"><p>6,923명</p></td>
                                        <td class="td_bg"><p>263,620,000원</p></td>
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
                                        <td><p>1명</p></td>
                                        <td><p>6,923명</p></td>
                                        <td><p>263,620,000원</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1명</p></td>
                                        <td class="td_bg"><p>6,923명</p></td>
                                        <td class="td_bg"><p>263,620,000원</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1명</p></td>
                                        <td class="td_bg"><p>6,923명</p></td>
                                        <td class="td_bg"><p>263,620,000원</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1명</p></td>
                                        <td class="td_bg"><p>6,923명</p></td>
                                        <td class="td_bg"><p>263,620,000원</p></td>
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
                                        <td><p>1명</p></td>
                                        <td><p>6,923명</p></td>
                                        <td><p>263,620,000원</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1명</p></td>
                                        <td class="td_bg"><p>6,923명</p></td>
                                        <td class="td_bg"><p>263,620,000원</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1명</p></td>
                                        <td class="td_bg"><p>6,923명</p></td>
                                        <td class="td_bg"><p>263,620,000원</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>mimiya - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p>남산선생님</p>
                                        </td>
                                        <td>
                                            <p>2명</p>
                                        </td>
                                        <td><p>6명</p></td>
                                        <td><p>6,923명</p></td>
                                        <td><p>263,620,000원</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#" data-toggle="modal" data-target="#exampleModal02" class="button alert_modal_audio">수정하기</a>
                                        </td> 
                                    </tr>
                                    
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2">
                                            <p>direct</p>
                                        </td>
                                        <td><p>1명</p></td>
                                        <td><p>6,923명</p></td>
                                        <td><p>263,620,000원</p></td>
                                        <td class="admin_table_btn">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>1명</p></td>
                                        <td class="td_bg"><p>6,923명</p></td>
                                        <td class="td_bg"><p>263,620,000원</p></td>
                                        <td class="admin_table_btn td_bg">
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>mimiya - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p>남산선생님</p>
                                        </td>
                                        <td><p>1명</p></td>
                                        <td><p>6명</p></td>
                                        <td><p>6,923명</p></td>
                                        <td><p>263,620,000원</p></td>
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
                                        <td><p>합계</p></td>
                                        <td>
                                           <p>2명</p>
                                        </td>
                                        <td></td>
                                        <td><p>3명</p></td>
                                        <td><p>7명</p></td>
                                        <td><p>40,284명</p></td>
                                        <td><p>5,136,620,000원</p></td>
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
                            <p>구매전 확인사항</p>
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div>
                        <div class="coinbuy_modal_content_wrap">
                            <form action="#" class="login_form account_form">
                                <div class="row reg_row">
                                    <div class="col-lg-12">
                                        <div class="input_box input_box1">
                                            <label for="id">아이디</label>
                                            <input type="text" id="id" placeholder="아이디를 입력하세요.">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="conpass">비밀번호</label>
                                            <div class="pass_box">
                                                <input type="password" id="conpass" placeholder="비밀번호 입력">
                                                <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box confirm_pass">
                                            <label for="pass">비밀번호</label>
                                            <div class="pass_box">
                                                <input type="password" id="pass" placeholder="비밀번호 확인">
                                                <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="bank">비밀번호</label>
                                            <select name="bank" id="bank">
                                                <option value="">은행을 선택하세요.</option>
                                                <option value="">은행을 선택하세요.</option>
                                                <option value="">은행을 선택하세요.</option>
                                                <option value="">은행을 선택하세요.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="account">계좌번호</label>
                                            <input type="text" id="account" placeholder="계좌번호를 입력하세요.">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="name">예금주</label>
                                            <input type="text" id="name" placeholder="예금주를 입력하세요.">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box agency_modal_input">
                                            <label for="bank">비밀번호</label>
                                            <select name="bank" id="bank">
                                                <option value="">은행을 선택하세요.</option>
                                                <option value="">은행을 선택하세요.</option>
                                                <option value="">은행을 선택하세요.</option>
                                                <option value="">은행을 선택하세요.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="login_btn text-center">
                                    <button class="button" data-toggle="modal" data-target="#exampleModal" type="submit">회원가입</button>
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