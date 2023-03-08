<?php
    include ('header.php');
?>
                <!-- body area -->
                <div class="content_body">
                    <h3 class="content_title">코인 전송내역</h3>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap admin_coin_buy">
                                <div class="table_top pt_20">
                                    <div class="table_top_right table_top_right1">
                                        <div class="d-flex">
                                            <div class="input_box mr_10">
                                                <select name="bank" id="bank">
                                                    <option value="">파트너</option>
                                                    <option value="">partnerid_01</option>
                                                    <option value="">partnerid_02</option>
                                                    <option value="">partnerid_03</option>
                                                </select>
                                            </div>
                                            <div class="input_box">
                                               <select name="bank" id="bank">
                                                    <option value="">10개씩 보기</option>
                                                    <option value="">50개씩 보기</option>
                                                    <option value="">100개씩 보기</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="coinbuy_table admin_transfer_table">
                                    <tr>
                                        <th>번호</th>
                                        <th>날짜</th>
                                        <th>상태</th>
                                        <th>트랜잭션</th>
                                        <th></th>
                                        <th>수량</th>
                                        <th>금액</th>
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>1</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td class="table_btn">
                                            <div class="line"></div>
                                            <a href="#">전송완료</a>
                                        </td>
                                        <td>
                                            <p><span class="pink">memberid</span> - MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                            <p><img src="img/icon7.svg" alt=""> <span class="green">partnerid</span> - MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="img/icon8.svg" class="img-fluid tdimg_w" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <p>30</p>
                                        </td>
                                        <td><p>3,000,000원</p></td> 
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
        <!-- coinsell alert 01 area -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal_arlet1">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p><span class="sp_1">30 ARENA (<span class="sp_2">297,000원</span>)</span>를 판매하시겠습니까??</p>
                            <div class="text-right alert_btn">
                                <a href="#" class="button button1">취 소</a>
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>입금대기중인 코인구매가 있습니다.</p>
                            <div class="text-right">
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- coinsell alert 02 area -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal_arlet2">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>코인 판매가 완료되었습니다.</p>
                            <div class="text-right">
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>코인 판매이력을 삭제하시겠습니까?</p>
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
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>