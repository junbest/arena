<?php
    include 'functions.php';
    include ('include/db.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: /');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        unset ($_SESSION['wallet_address']);
        unset ($_SESSION['name']);
        unset ($_SESSION['name']);
        unset ($_SESSION['id']);
        unset ($_SESSION['partner_id']);
        header("location: /");
    }

    $address = $_SESSION['wallet_address'];
    $partner_id = $_SESSION['partner_id'];
    //$balance = balance($address);
    $partner_info = query_partner_id($partner_id);
    $balance = 200;

    //if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //echo '<script language="javascript">alert("It works.");</script>';
        // $qty = $_POST['final_qty_arena'];
        // $amount = $_POST['final_qty_krw'];
        // $partner = $_POST['partner_name'] ;
        // $member = $_POST['account_name'] ;
        // $member_address = $_POST['account_address'] ;
        // $partner_address = $_POST['partner_address'] ;

        // $status = insert_purchase($qty, $amount, $partner, $member, $member_address, $partner_address);
        // if ($status =='success'){
        //     echo '<script type="text/javascript">
        //     window.onload = function () {
        //         OpenBootstrapPopup();
        //     };
        //     function OpenBootstrapPopup() {
        //         $("#exampleModal").modal("show");
        //     }
        //     </script>';
        // }else{
            // echo '<script type="text/javascript">
            // window.onload = function () {
            //     OpenBootstrapPopups();
            // };
            // function OpenBootstrapPopups() {
            //     $("#error_modal").modal("show");
            // }
            // </script>';
        // }
    //}
?>

<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="app, landing, corporate, Creative, Html Template, Template">
    <meta name="author" content="web-themes">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1">

    <!-- title -->
    <title>Coinbuy</title>

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
                                            <a class="dropdown-item" href="member_profile.html">프로필</a>
                                            <a class="dropdown-item" href="#logout">로그아웃</a>
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
                                <span class="hide_text">코인 구매하기</span>
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
                                <span class="hide_text">코인 판매하기</span>
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
                                <span class="hide_text">코인 전송하기</span>
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
                                <span class="hide_text">문의하기</span>
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
                                            <a class="dropdown-item" href="/profile">프로필</a>
                                            <a class="dropdown-item" href="/buy?logout='1'">로그아웃</a>
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
                    <h3 class="content_title">코인 구매하기</h3>
                    <div class="row">
                        <div class="col-lg-4 pt_25">
                            <div class="arena_coin_box">
                                <div class="arena_coin_header">
                                    <div class="arena_coin_left">
                                        <img src="img/a.svg" class="img-fluid" alt="">
                                    </div>
                                    <div class="arena_coin_right">
                                        <div class="arena_coin_right_text">
                                            <div class="arena_coin_text_heading">
                                                <p class="p1">아레나코인</p>
                                                <p class="p2">(ARENA/KRW)</p>
                                            </div>
                                            <h4><?php echo $balance; ?></h4>
                                            <input type="hidden" id="balance" name="balance" value="<?php echo $balance; ?>">
                                            <p class="p3">전일대비 <span>0.00%</span></p>      
                                        </div>
                                        <div class="arena_coin_right_icon">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle"data-toggle="dropdown" aria-expanded="false">
                                                    <img src="img/icon6.svg" class="img-fluid" alt="">
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="https://metascan.io/token/2233/tx" target="_blank">코인정보</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row arena_row">
                                    <div class="col-5 pt_20">
                                        <div class="progress_box">
                                            <div class="progress_bar" style="width:20%;"></div>
                                            <div class="progress_content">
                                                <div class="progress_left">
                                                    <p class="p1">10,020</p>
                                                    <p class="p2">+ 0.20%</p>
                                                </div>
                                                <div class="progress_right">
                                                    <p>413.938</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress_box">
                                            <div class="progress_bar" style="width:33%;"></div>
                                            <div class="progress_content">
                                                <div class="progress_left">
                                                    <p class="p1">10,010</p>
                                                    <p class="p2">+ 0.10%</p>
                                                </div>
                                                <div class="progress_right">
                                                    <p>913.938</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress_box active">
                                            <div class="progress_bar" style="width:40%;"></div>
                                            <div class="progress_content">
                                                <div class="progress_left">
                                                    <p class="p1">10,000</p>
                                                    <p class="p2">+ 0.00%</p>
                                                </div>
                                                <div class="progress_right">
                                                    <p>52,913.938</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress_box progress_box2">
                                            <div class="progress_bar" style="width:33%;"></div>
                                            <div class="progress_content">
                                                <div class="progress_left">
                                                    <p class="p1">9,990</p>
                                                    <p class="p2">- 0.10%</p>
                                                </div>
                                                <div class="progress_right">
                                                    <p>913.938</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress_box progress_box2">
                                            <div class="progress_bar" style="width:10%;"></div>
                                            <div class="progress_content">
                                                <div class="progress_left">
                                                    <p class="p1">9,980</p>
                                                    <p class="p2">- 0.20%</p>
                                                </div>
                                                <div class="progress_right">
                                                    <p>413.938</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress_box progress_box2">
                                            <div class="progress_bar" style="width:20%;"></div>
                                            <div class="progress_content">
                                                <div class="progress_left">
                                                    <p class="p1">9,970</p>
                                                    <p class="p2">- 0.30%</p>
                                                </div>
                                                <div class="progress_right">
                                                    <p>613.938</p>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-7 pt_20">
                                        <!-- <form action="#" class="arena_form" method="post"> -->
                                        <div class="arena_form">
                                            <div class="increment_box">
                                                <input type="number" name="qty" id="qty" value="1" min="1" max="<?php  echo $balance; ?>">
                                            </div>
                                            <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                                            <div class="radio_box_wrap row form-row">
                                                <div class="col-4">
                                                    <button style="border-color:white; height: 100%;width: 100%;background-color: #EEF2F7;border-radius: 0.5rem;" id="choose1"><span>1K </span>KRW</button>
                                                </div>
                                                <div class="col-4">
                                                    <button style="border-color:white; height: 100%;width: 100%;background-color: #EEF2F7;border-radius: 0.5rem;" id="choose2"><span>50K </span>KRW</button>
                                                </div>
                                                <div class="col-4">
                                                    <button style="border-color:white; height: 100%;width: 100%;background-color: #EEF2F7;border-radius: 0.5rem;" id="choose3"><span>100K </span>KRW</button>
                                                </div>
                                            </div>
                                            <div class="radio_box_wrap row form-row">
                                                <div class="col-4">
                                                    <button style="border-color:white; height: 100%;width: 100%;background-color: #EEF2F7;border-radius: 0.5rem;" id="choose4"><span>500K </span>KRW</button>
                                                </div>
                                                <div class="col-4">
                                                    <button style="border-color:white; height: 100%;width: 100%;background-color: #EEF2F7;border-radius: 0.5rem;" id="choose5"><span>1M </span>KRW</button>
                                                </div>
                                            </div>
                                            </br>
                                            <div class="input_box">
                                                <label>총액</label>
                                                <input type="text" style="font-weight: bold;font-size: 13px; text-align: center;" id="total_order" value="10,000.00">
                                            </div>
                                            <!-- <div class="total_box" id="total_order">
                                                <p class="p1">총액</p>
                                                <p class="p2">원</p>
                                            </div> -->
                                            <!-- <form id="contactForm" method="POST" role="form"> -->
                                                
                                                <input type="hidden" id="member_id" name="member_id" value="<?php echo $_SESSION['id'];?>">
                                                <input type="hidden" id="final_qty_arena" name="final_qty_arena">
                                                <input type="hidden" id="final_qty_krw" name="final_qty_krw">
                                                <input type="hidden" id="partner_name" name="partner_name" value="<?php echo $partner_info['name'];?>">
                                                <input type="hidden" id="account_name" name="account_name" value="<?php echo $_SESSION['name'];?>">
                                                <input type="hidden" id="account_address" name="account_address" value="<?php echo $_SESSION['wallet_address'];?>">
                                                <input type="hidden" id="partner_address" name="partner_address" value="<?php echo $partner_info['wallet_address'];?>">
                                                <button type="hidden" id="buy_button" class="button alert_modal_audio" type="submit">구매하기</button>
                                            <!-- </form> -->
                                        </div>    
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pt_25">
                            <div class="table_wrap">
                                <div class="table_top">
                                    <p>구매이력</p>
                                    <div class="input_box">
                                        <select name="bank" id="bank">
                                            <option value="">10개씩 보기</option>
                                            <option value="">50개씩 보기</option>
                                            <option value="">100개씩 보기</option>
                                        </select>
                                    </div>
                                </div>
                                <table class="coinbuy_table">
                                    <tr>
                                        <th>날짜</th>
                                        <th>상태</th>
                                        <th>트랜잭션</th>
                                        <th></th>
                                        <th>수량</th>
                                        <th>금액</th>
                                        <th></th>
                                    </tr>
                                    <tr class="">
                                    <?php
                                            $memb_id = $_SESSION['id'];
                                            $query="SELECT * from purchases WHERE `member_id` = '$memb_id'  ORDER BY `date` DESC ";
                                            $result=mysqli_query($con,$query);
                                            ?>
                                            <?php if ($result->num_rows > 0): ?>
                                            <?php while($array=mysqli_fetch_row($result)): ?>
                                    
                                        <td>
                                           <p><?php echo $array[1];?></p>
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal"  data-target="#show_info<?php echo $array[0]; ?>">
                                                <?php $status = $array[2];
                                                
                                                    if ($status == "Waiting for deposit"){
                                                        //Detect waiting for deposit
                                                        
                                                    echo '<p style="background-color: #f44336;border-radius: 0.5rem;font-size: 1.4rem;padding: 1rem;color: white;">입금대기</p>
                                                          <input type="hidden" id="count_deposit" name="count_deposit" value="1">';
                                                    }else if ($status == "Coin recovery"){
                                                        echo '<p style="background-color: #008CBA;border-radius: 0.5rem;font-size: 1.4rem;padding: 1rem;color: white;">코인회수</p>';
                                                    }else if ($status == "Purchase completed"){
                                                        echo '<p style="background-color: #FFAE42;border-radius: 0.5rem;font-size: 1.4rem;padding: 1rem;color: white;">구매완료</p>';
                                                    }else if ($status == "Undeposited"){
                                                        echo '<p style="background-color: #555555;border-radius: 0.5rem;font-size: 1.4rem;padding: 1rem;color: white;">미입금</p>';
                                                    }else if ($status == "Processing"){
                                                        echo '<p style="background-color: #555555;border-radius: 0.5rem;font-size: 1.4rem;padding: 1rem;color: white;">미입금</p>';
                                                    }
                                                ?>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p><?php echo $array[3];?></p>
                                            <p><img src="img/icon7.svg" alt=""><?php echo $array[4];?></p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="img/icon8.svg" class="img-fluid" alt="">
                                                <img src="img/icon9.svg" class="img-fluid icon9" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <p><?php echo $array[7];?></p>
                                        </td>
                                        <td><p><?php echo $array[8];?></p></td>
                                        <td>
                                            <div class="line"></div>
                                            <!-- <a href="/delete_buy.php?id=<?php //echo $array[0];?>"> -->
                                            <a href="#"  data-toggle="modal"  data-target="#delete_alert<?php echo $array[0]; ?>">
                                                <img src="img/icon10.svg" alt="">
                                            </a>
                                        </td> 
                                        <?php include 'buy_info.php';?>
                                    </tr>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                        <td colspan="3" rowspan="1" headers="">No Data Found</td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php mysqli_free_result($result); ?>
                                </table>
                                <div class="table_footer">
                                    <div class="table_footer_first">
                                        <p class="p1">입금완료까지 남은 시간 </p>
                                        <p class="p2">미입금시 지급된 코인은 회수됩니다. </p>
                                    </div>
                                    <div class="table_footer_mid">
                                        <h3>10:00</h3>
                                    </div>
                                    <div class="table_footer_last">
                                        <a href="#">판매자 계좌 확인</a>
                                        <div class="table_footer_box">
                                        <p><?php echo $partner_info['bank_name'];?></p>
                                        <p class="p2"><?php echo $partner_info['bank_account'];?></p>
                                        <p><?php echo $partner_info['name'];?></p>
                                        </div>
                                    </div>
                                </div>
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
          
        <!-- coinbuy modal 01 area -->
        <div class="coinbuy_modal_wrapper">
            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="logo_text_box">
                            <p>구매전 확인사항</p>
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div>
                        <div class="coinbuy_modal_content_wrap">
                            <div class="coinbuy_modal_content coinbuy_modal_content2">
                                <div class="coinbuy_modal_text2">
                                    <p><span class="text1"><?php echo $_SESSION['name']; ?></span> 회원님의 지갑주소</p>
                                    <p class="p2"><?php echo $address;?></p>
                                    <p>로 <span class="text2" id="qty_arena">
                                        
                                    </span>가 전송되었습니다.</p>
                                    <p class="p4">입금하지 않으시면 <span class="text1">코인은 자동으로 판매자에게 회수</span>됩니다.</p>
                                </div>
                                <div class="price_box">
                                    <div class="price_left">
                                        <p>판매자 지정계좌</p>
                                    </div>
                                    <div class="price_right">
                                        <p><?php echo $partner_info['bank_name'];?></p>
                                        <p class="p2" id="account_number"><?php echo $partner_info['bank_account'];?></p>
                                        <p><?php echo $partner_info['name'];?></p>
                                    </div>
                                </div>
                                <div class="price_box price_box2">
                                    <div class="price_left price_left2">
                                        <p>입금금액</p>
                                    </div>
                                    <div class="price_right price_right2">
                                        <p class="p2" id="qty_krw"></p>
                                        <!-- <div style="margin-top: 7px;" id="qty_krw"></div> -->
                                    </div>
                                </div>
                                <ul class="coinbuy_modal2_list">
                                    <li>* 등록된 계좌와 입금자명이 불일치 하는 경우 입금취소 처리됨</li>
                                    <li>* 은행점검시간(23시 30분~00시 10분) 입금처리 불가</li>
                                    <li>* 카카오페이, 네이버페이, 토스, 핀크 ATM 입금처리 불가</li>
                                </ul>
                            </div>
                            <div class="coinbuy_modal_btn2 d-flex justify-content-center">
                                <a href="#" id="copy_account" class="button button1">계좌번호 복사하기</a>
                                <a href="#" class="button button2" id="complete_">입금완료</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal Error-->
    <div class="login_modal">
        <div class="modal fade" id="error_modal">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                   <div class="logo_text_box">
                        <span>COIN<span class="logo_text">TRADER</span></span> 
                    </div>
                    <p>There is an error while purchasing, please contact admin.</p>
                    <div class="text-right">
                        <button class="button" data-dismiss="modal">Okay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Auto populate screen -->
    <div class="coinbuy_modal_wrapper">
            <div class="modal fade" id="coinbuy_modal_auto">
                <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="logo_text_box">
                            <p>구매전 확인사항</p>
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div>
                        <div class="coinbuy_modal_content_wrap">
                            <div class="coinbuy_modal_content">
                                <div class="coinbuy_modal_list coinbuy_modal_list1">
                                    <p><span class="text">1.</span> 간편송금서비스를 통한 "<span class="text2">입금불가</span>"</p>
                                    <ul class="coinbuy_modalList_1">
                                        <li>
                                            예) 토스머니 (토스뱅크는 가능)<br>카카오페이, 페이코, 네이버페이 등
                                        </li>
                                        <li>
                                            -  이체확인증 확인 후 반환처리
                                        </li>
                                    </ul>
                                </div>
                                <div class="coinbuy_modal_list">
                                    <p><span class="text">2.</span> 등록된 계좌가 아니면 "<span class="text2">입금불가</span>"</p>
                                    <ul>
                                        <li>
                                            -  등록된 계좌와 입금자명이 불일치 하는 경우 입금취소 처리됨
                                        </li>
                                        <li>
                                            -  이체확인증 확인후 반환처리
                                        </li>
                                    </ul>
                                </div>
                                <div class="coinbuy_modal_list">
                                    <p><span class="text">3.</span> <span class="text">1</span>원 ~ <span class="text">1,000</span>원 단위 "<span class="text2">입금불가</span>"</p>
                                    <ul>
                                        <li>
                                            -  이체확인증 확인후 반환처리
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center coinbuy_modal_btn">
                                <a href="#" data-dismiss="modal" class="button">위의 내용을 확인하였습니다.</a>
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

    <script>
            var buy_button = document.getElementById("buy_button");
            var proceed_purchase = document.getElementById("proceed_purchase");
            var proceed_create = document.getElementById("proceed_create");
            var btn1 = document.getElementById("choose1");
            var btn2 = document.getElementById("choose2");
            var btn3 = document.getElementById("choose3");
            var btn4 = document.getElementById("choose4");
            var btn5 = document.getElementById("choose5");
            var btn5 = document.getElementById("choose5");
            var copy_account = document.getElementById("copy_account");

            //When button purchase
            buy_button.onclick = function() {

                var qty = parseFloat($('#qty').val());
                var bal = parseFloat($('#balance').val());

                if (qty > bal){
                    $("#CheckPasswordMatch").html("Your balance is not enough.").css("color","red");
                }else{
                    var rate = 10000;
                    var order = qty * rate;
                    $("#qty_arena").html(qty + " ARENA");
                    $("#qty_krw").html(order.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                    $("#qty_arena2").html(qty + " ARENA (" + order.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + "원)");
                 
                    $("#final_qty_arena").val(qty);
                    $("#final_qty_krw").val(order);

                    $('#coinbuy_alert3_1').modal('show');
                    
                }
                
            }

            proceed_purchase.onclick = function() {
                
                var count_waitingfordeposit = parseFloat($('#count_deposit').val());
                if (count_waitingfordeposit == '1'){
                    $('#coinbuy_alert3_1').modal('hide');
                    $("#coinbuy_alert3_2").modal("show");
                }else{
                    var type = 'insert';
                    var id = $('#member_id').val();
                    var qty = $('#final_qty_arena').val();
                    var amount = $('#total_order').val();
                    var partner = $('#partner_name').val();
                    var member = $('#account_name').val();
                    var member_address = $('#account_address').val();
                    var partner_address = $('#partner_address').val();

                    $.ajax({
                            type : "POST", 
                            url  : "data.php",  
                            data : { type: type, qty : qty, amount : amount, partner : partner, member : member, member_address : member_address, partner_address : partner_address, id : id, type: type },
                            success: function(response) {
                                $('#coinbuy_alert3_1').modal('hide');
                                $("#exampleModal").modal("show");
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                $("#error_modal").modal("show");
                            }
                    });
                }
            }
            proceed_create.onclick = function() {

                
                var type = 'insert';
                var types = 'delete';
                var id = $('#member_id').val();
                var qty = $('#final_qty_arena').val();
                var amount = $('#total_order').val();
                var partner = $('#partner_name').val();
                var member = $('#account_name').val();
                var member_address = $('#account_address').val();
                var partner_address = $('#partner_address').val();

                //Delete
                $.ajax({
                    type : "POST", 
                    url  : "data.php",  
                    data : { type: types, id : id },
                    success: function(response) {
                        //alert(response);
                        //$("#exampleModal").modal("show");
                    },
                        error: function(jqXHR, textStatus, errorThrown) {
                        $("#error_modal").modal("show");
                    }
                });
                //Insert
                $.ajax({
                        type : "POST", 
                        url  : "data.php",  
                        data : { type: type, qty : qty, amount : amount, partner : partner, member : member, member_address : member_address, partner_address : partner_address, id : id},
                        success: function(response) {
                            $("#coinbuy_alert3_2").modal("hide");
                            $("#exampleModal").modal("show");
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            $("#error_modal").modal("show");
                        }
                });
            }
            //This is key up in numeric button
            $("#qty").bind('keyup mouseup', function () {
                
                var qty = parseFloat($('#qty').val());
                var bal = parseFloat($('#balance').val());

                var rate = 10000;

                if (qty > bal){
                    $("#CheckPasswordMatch").html("Your balance is not enough.").css("color","red");
                }else{
                    $("#CheckPasswordMatch").html("").css("color","red");
                }
                var order = qty * rate;
                $('#total_order').val(order.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                
            });

            btn1.onclick = function() {
                var qty = 1;
                var bal = parseFloat($('#balance').val());
                if (qty > bal){
                    $("#CheckPasswordMatch").html("Your balance is not enough.").css("color","red");
                }else{
                    $('#qty').val("1");
                    $('#total_order').val("10,000.00");
                }
                
            }
            btn2.onclick = function() {
                var qty = 5;
                var bal = parseFloat($('#balance').val());
                if (qty > bal){
                    $("#CheckPasswordMatch").html("Your balance is not enough.").css("color","red");
                }else{
                    $('#qty').val("5");
                    $('#total_order').val("50,000.00");
                }
                
            }
            btn3.onclick = function() {
                var qty = 10;
                var bal = parseFloat($('#balance').val());
                if (qty > bal){
                    $("#CheckPasswordMatch").html("Your balance is not enough.").css("color","red");
                }else{
                    $('#qty').val("10");
                    $('#total_order').val("100,000.00");
                }
                
            }
            btn4.onclick = function() {
                var qty = 50;
                var bal = parseFloat($('#balance').val());
                if (qty > bal){
                    $("#CheckPasswordMatch").html("Your balance is not enough.").css("color","red");
                }else{
                    $('#qty').val("50");
                    $('#total_order').val("500,000.00");
                }
                
            }
            btn5.onclick = function() {
                var qty = 100;
                var bal = parseFloat($('#balance').val());
                if (qty > bal){
                    $("#CheckPasswordMatch").html("Your balance is not enough.").css("color","red");
                }else{
                    $('#qty').val("100");
                    $('#total_order').val("1,000,000.00");
                }
                
            }
            copy_account.onclick = function() {

                //var copyText = document.getElementById("account_number");
                // var copyText = $("#account_number").val();
                let copyText = document.getElementById('account_number').innerHTML;
                // copyText.select();
                // copyText.setSelectionRange(0, 99);
                navigator.clipboard.writeText(copyText);

            }
            //Auto load modal
            $(window).on('load',function(){
                $('#coinbuy_modal_auto').modal('show');
            });

            //This is the timer for 

    </script>
</body>
</html>