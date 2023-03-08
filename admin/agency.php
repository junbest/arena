<?php
    include("../admin/include/auth_session.php");
    include("../admin/include/function.php");
    include '../admin/include/db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $type = $_POST['post'];

        if($type=='post'){
            $user = $_POST['username'];
            $pass = $_POST['pass'];
            $name = $_POST['fullname'];
            $bank_n = $_POST['bank_n'];
            $bank_account = $_POST['bank_account'];

            try{
                $status = create_agency($user, $pass, $name, $bank_n, $bank_account);

                if ($status=='exist'){
                    echo '<script language="javascript">alert("User already exist, please try again.");</script>';
                }else if($status == 'success'){
                    echo '<script language="javascript">alert("Successfully added.");</script>';
                }else{
                    echo '<script language="javascript">alert("'.$status.'");</script>';
                }
            }catch(Exception $e){
            }
        
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
                        <a href="agency" class="active">
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
                    <h3 class="content_title">에이전시</h3>
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
                                        <a href="#" data-toggle="modal" data-target="#exampleModal02" class="button">에이전시 등록</a>
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
                                        <th>일일 구매금액</th>
                                        <th></th>
                                    </tr>
                                    <tr class="table_data">
                                    <?php
                                            $query="SELECT * from agency ORDER BY `creation_date` DESC";
                                            $result=mysqli_query($con,$query);
                                            ?>
                                            <?php if ($result->num_rows > 0): ?>
                                            <?php while($array=mysqli_fetch_row($result)): ?>
                                        <td><p><?php echo $array[0];?></p></td>
                                        <td>
                                           <p><?php echo $array[1];?> - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p><?php echo $array[7];?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $array[0];?></p>
                                        </td>
                                        <td><p><?php echo $array[0];?></p></td>
                                        <td><p><?php echo $array[0];?></p></td>
                                        <td><p><?php echo $array[0];?></p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#"  data-toggle="modal" data-target="#edit<?php echo $array[0]; ?>" class="button admin_audio">계좌 수정하기</a>
                                        </td> 
                                        <?php include '../admin/update_agency.php';?>
                                    </tr>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                        <td colspan="3" rowspan="1" headers="">No Data Found</td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php mysqli_free_result($result); ?>
                                </table>
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
                            <p>구매전 확인사항</p>
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div>
                        
                        <div class="coinbuy_modal_content_wrap">
                            <form id="contactForm" method="POST" class="login_form account_form" role="form">
                                <div class="row reg_row">
                                    <div class="col-lg-12">
                                    <input type="hidden" name="post" id="post" value="post">
                                        <div class="input_box input_box1">
                                            <label for="id">아이디</label>
                                            <input type="text" name="username" id="username" placeholder="아이디를 입력하세요.">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input_box input_box1">
                                            <label for="id">Full Name</label>
                                            <input type="text" name="fullname" id="fullname" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="pass">Password</label>
                                            <div class="pass_box">
                                                <input type="password" name="pass" id="pass" placeholder="비밀번호 입력">
                                                <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="conpass">Verify Password</label>
                                            <div class="pass_box">
                                                <input type="password" name="conpass" id="conpass" placeholder="비밀번호 확인">
                                                <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                            </div>
                                        </div>
                                        <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="bank">Bank Name</label>
                                            <input type="text" name="bank_n" id="bank_n" placeholder="은행 이름">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="account">Bank Account</label>
                                            <input type="text" name="bank_account" id="bank_account" placeholder="계좌번호를 입력하세요.">
                                        </div>
                                    </div>
                                </div>
                                <div class="login_btn text-center">
                                    <button class="button" id="submit_button">회원가입</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#conpass").on('keyup', function(){
                var password = $("#pass").val();
                var confirmPassword = $("#conpass").val();
                if (password != confirmPassword)
                    $("#CheckPasswordMatch").html("Password does not match !").css("color","red");
                else
                    $("#CheckPasswordMatch").html("Password match !").css("color","green");
            });
        });

    </script>
</body>
</html>