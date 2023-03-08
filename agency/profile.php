<?php
    include ('header.php');
?>
                <!-- body area -->
                <div class="content_body">
                    <h3 class="content_title">프로필</h3>
                    <div class="row">
                        <div class="col-lg-4 pt_25">
                            <div class="arena_coin_box arenacoin_profile_box">
                                <div class="row arena_row">
                                    <div class="col-lg-12">
                                        <form action="#" class="login_form admin_coin_buy">
                                            <div class="row reg_row">
                                                <div class="col-lg-12">
                                                    <div class="input_box input_box1">
                                                        <label for="id">아이디</label>
                                                        <input type="text" readonly="" id="partid" placeholder="admin">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input_box">
                                                        <label for="conpass">비밀번호</label>
                                                        <div class="pass_box">
                                                            <input type="password" id="conpass" placeholder="************">
                                                            <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input_box">
                                                        <label for="conpass1">비밀번호 확인</label>
                                                        <div class="pass_box">
                                                            <input type="password" id="conpass1" placeholder="************">
                                                            <button type="button" class="toggler"><i class="far fa-eye"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input_box">
                                                        <label for="partid">전송할 지갑주소</label>
                                                        <input type="text" readonly="" id="partid" placeholder="MTT2vhdBw5ZYYJvUyrI9Lb8rJDkS3UaUe6310412">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="login_btn text-center">
                                                <button class="button mb_30" type="submit">정보변경</button>
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
    </main>
    <!--====== BACK TO TOP START ======-->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--====== BACK TO TOP ENDS ======-->
    
    <!-- all js here -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>