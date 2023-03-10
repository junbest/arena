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
            $type = 'member';
    
            //$create_wallet = new wallet();
            try{
                $status = create_wallet($user, $pass, $name, $bank_n, $bank_account, $address, $key, $pub, $type);

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
                    <h3 class="content_title">??????</h3>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap agency_table_wrap admin_coin_buy">
                                <div class="table_top pt_20">
                                    <div class="table_top_right table_top_right1">
                                        <div class="d-flex">
                                            <div class="input_box year_select">
                                                <select name="bank" id="bank">
                                                    <option value="">2023.01.09</option>
                                                    <option value="">2023.01 ???</option>
                                                    <option value="">????????????</option>
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
                                        <a href="#" data-toggle="modal" data-target="#exampleModal02" class="button">?????? ??????</a>
                                    </div>
                                </div>
                                <table class="coinbuy_table admin_transfer_table">
                                    <tr>
                                    	<th>??????</th>
                                        <th>?????????</th>
                                        <th>?????????</th>    
                                        <th>?????????</th>
                                        <th>????????????</th>
                                        <th>????????????</th>
                                        <th>
                                            <div class="d-flex align-items-center">
                                                <div class="mr_5">
                                                    <div class="up_triangle"></div>
                                                    <div class="down_triangle"></div>
                                                </div>
                                                ?????? ????????????
                                            </div>
                                        </th>
                                        <th>
                                            <div class="d-flex align-items-center">
                                                <div class="mr_5">
                                                    <div class="up_triangle"></div>
                                                    <div class="down_triangle"></div>
                                                </div>
                                                ????????????
                                            </div>
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr class="table_data">
                                            <?php
                                            //$query="SELECT * from members WHERE type='member' ORDER BY `creation_date` DESC";
                                            $query = "SELECT members1.id, members1.name, members1.username, partner1.name, members1.type, agent1.name, agency1.name, members1.bank_name, members1.bank_account
                                            FROM   ((arena.members members1 LEFT OUTER JOIN arena.agent agent1 ON members1.agent_id=agent1.id) LEFT OUTER JOIN arena.partner partner1 ON members1.partner_id=partner1.id) LEFT OUTER JOIN arena.agency agency1 ON members1.agency_id=agency1.id
                                            WHERE  members1.type='member'";
                                            $result=mysqli_query($con,$query);
                                            ?>
                                            <?php if ($result->num_rows > 0): ?>
                                            <?php while($array=mysqli_fetch_row($result)): ?>

                                        <td><p><?php echo $array[0];?></p></td>
                                        <td>
                                           <p><?php echo $array[1];?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $array[2];?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $array[3];?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $array[5];?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $array[6];?></p>
                                        </td>
                                        <td><p>28,840,000???</p></td>
                                        <td><p>2021.09.20  ?????? 09:57</p></td>
                                        <td class="admin_table_btn">
                                            <div class="line"></div>
                                            <a href="#"  data-toggle="modal" data-target="#edit<?php echo $array[0]; ?>" class="button admin_audio">?????? ????????????</a>
                                        </td> 
                                        <?php include '../admin/update_member.php';?>
                                    </tr>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                        <td colspan="3" rowspan="1" headers="">No Data Found</td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php mysqli_free_result($result); ?>
                                </table>
                                <table class="agency_table member_table td_height agency_table2 td_height mt_5">
                                    <tr class="table_data agency_last_tr">
                                        <td><p>??????</p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p>5,136,620,000???</p></td>
                                        <td class="admin_table_btn">
                                        </td>
                                        <td></td> 
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
        <!-- agent modal -->
        <!-- askquestin view modal 02 area -->
        <div class="coinbuy_modal_wrapper">
            <div class="modal fade" id="exampleModal02">
                <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="logo_text_box">
                            <p>????????? ????????????</p>
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div>
                        
                        <div class="coinbuy_modal_content_wrap">
                            <form id="contactForm" method="POST" class="login_form account_form" role="form">
                                <div class="row reg_row">
                                    <div class="col-lg-12">
                                    <input type="hidden" name="post" id="post" value="post">
                                        <div class="input_box input_box1">
                                            <label for="id">?????????</label>
                                            <input type="text" name="username" id="username" placeholder="???????????? ???????????????.">
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
                                                <input type="password" name="pass" id="pass" placeholder="???????????? ??????">
                                                <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="conpass">Verify Password</label>
                                            <div class="pass_box">
                                                <input type="password" name="conpass" id="conpass" placeholder="???????????? ??????">
                                                <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                            </div>
                                        </div>
                                        <div style="margin-top: 7px;" id="CheckPasswordMatch"></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="bank">Bank Name</label>
                                            <input type="text" name="bank_n" id="bank_n" placeholder="?????? ??????">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="account">Bank Account</label>
                                            <input type="text" name="bank_account" id="bank_account" placeholder="??????????????? ???????????????.">
                                        </div>
                                    </div>
                                </div>
                                <div class="login_btn text-center">
                                    <button class="button" id="submit_button" type="submit">????????????</button>
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