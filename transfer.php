<?php
    include 'header.php';
?>

                <!-- body area -->
                <div class="content_body">
                    <h3 class="content_title">코인 전송하기</h3>
                    <div class="row">
                        <div class="col-lg-4 pt_25">
                            <div class="arena_coin_box arenacoin_transfer_box">
                                <div class="arena_coin_header arenacoin_transfer_header">
                                    <div></div>
                                    <div class="arena_coin_left">
                                        <img src="img/a.svg" class="img-fluid" alt="">
                                        <p>아레나코인</p>
                                    </div>
                                    <div class="arena_coin_right">
                                        <div class="arena_coin_right_icon">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle"data-toggle="dropdown" aria-expanded="false">
                                                    <img src="img/icon6.svg" class="img-fluid" alt="">
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">코인정보</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row arena_row">
                                    <div class="col-lg-12">
                                        <div class="transfer_arean_price">
                                            <h3><span>30</span> ARENA</h3>
                                            <p class="p1">300,000 KRW</p>
                                            <p class="p2">MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                        </div>
                                        <form action="#" class="arena_form arena_transfer_form">
                                            <div class="increment_box input_box">
                                                <label>전송할 수량</label>
                                                <input type="number" class="quantity" value="30">
                                            </div>
                                            <div class="input_box">
                                                <label for="partid">전송할 지갑주소</label>
                                                <input type="text" readonly="" id="partid" placeholder="MTT2vhdBw5ZYYJvUyrI9Lb8rJDkS3UaUe6310412">
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="button alert_modal_audio" data-toggle="modal" data-target="#exampleModal_arlet1">
                                                문의하기
                                            </button>
                                            </div>
                                        </form>
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
                                    <tr class="table_data table_data4">
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td>
                                            <a href="#">전송중</a>
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
                                        <td>
                                            <p>30</p>
                                        </td>
                                        <td><p>3,000,000</p></td>
                                        <td>
                                            <div class="line"></div>
                                            <a href="#">
                                                <img src="img/icon10.svg" alt="">
                                            </a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data table_data3">
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td>
                                            <a href="#">전송완료</a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p>MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                            <p><img src="img/icon7.svg" alt="">MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="img/icon8.svg" class="img-fluid" alt="">
                                                <img src="img/icon9.svg" class="img-fluid icon9" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <p>30</p>
                                        </td>
                                        <td><p>100,000</p></td>
                                        <td>
                                            <div class="line"></div>
                                            <a href="#">
                                                <img src="img/icon10.svg" alt="">
                                            </a>
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
        <!-- transfer alert 01 area -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal_arlet1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>입금대기중인 코인구매가 있습니다.</p>
                            <div class="text-right transfer_alert_btn">
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p><span class="sp_1">30 ARENA (<span class="sp_2">300,000원</span>)</span>를 전송하시겠습니까?</p>
                            <div class="text-right alert_btn transfer_alert_btn">
                                <a href="#" class="button button1">아니오</a>
                                <a href="#" class="button">예</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>코인 전송이 완료되었습니다.</p>
                            <div class="text-right transfer_alert_btn">
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>전송할 지갑주소를 확인해주세요.</p>
                            <div class="text-right transfer_alert_btn">
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>코인 전송이력을 삭제하시겠습니까?</p>
                            <div class="text-right alert_btn transfer_alert_btn">
                                <a href="#" class="button button1">아니오</a>
                                <a href="#" class="button">예</a>
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