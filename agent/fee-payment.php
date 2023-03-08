<?php
    include ('header.php');
?>
                <!-- body area -->
                <div class="content_body">
                    <h3 class="content_title">수수료 지급</h3>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap admin_fee_payment admin_coin_buy">
                                <div class="table_top">
                                    <div class="table_top_right table_top_right1">
                                        <div class="d-flex w-100">
                                            <div class="input_box mr_10">
                                                <select name="bank" id="bank">
                                                    <option value="">에이전시</option>
                                                    <option value="">agencyid_01</option>
                                                    <option value="">agencyid_02</option>
                                                    <option value="">agencyid_03</option>
                                                </select>
                                            </div>
                                            <div class="input_box mr_10">
                                                <select name="bank" id="bank">
                                                    <option value="">에이전트</option>
                                                    <option value="">agentid_01</option>
                                                    <option value="">agentid_02</option>
                                                    <option value="">agentid_03</option>
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
                                <table class="coinbuy_table admin_transfer_table admin_fee_payment_table">
                                    <tr>
                                        <th>번호</th>
                                        <th>날짜</th>
                                        <th>상태</th>
                                        <th>등급</th>
                                        <th>아이디</th>
                                        <th>은행</th>
                                        <th>계좌번호</th>
                                        <th>예금주</th>
                                        <th>금액</th>
                                        <th></th>
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td class="table_btn">
                                            <div class="line"></div>
                                            <a href="#">지급대기</a>
                                        </td>
                                        <td><p>agency</p></td>
                                        <td><p>mimiya</p></td>
                                        <td>
                                            <p class="pink">국민은행</p>
                                        </td>
                                        <td>
                                            <p class="pink">251-044123-03-220</p>
                                        </td>
                                        <td>
                                            <p class="pink">홍길동</p>
                                        </td>
                                        <td><p class="green">300,000원</p></td>
                                        <td>
                                            <div class="line"></div>
                                            <a href="#" data-toggle="modal"
                                            data-target="#exampleModal_arlet1" class="button button2 admin_audio">입금확인</a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>1</p></td>
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td class="table_btn">
                                            <div class="line"></div>
                                            <a href="#">지급완료</a>
                                        </td>
                                        <td><p>agency</p></td>
                                        <td><p>mimiya</p></td>
                                        <td>
                                            <p>국민은행</p>
                                        </td>
                                        <td>
                                            <p>251-044123-03-220</p>
                                        </td>
                                        <td>
                                            <p>홍길동</p>
                                        </td>
                                        <td><p>300,000원</p></td>
                                        <td>
                                            <div class="line"></div>
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
        <!-- coinsell alert 01 area -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal_arlet1">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content fee_Payment_modal">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p class="pink">국민은행 <span class="fee_payment_sp">251-044123-03-220</span> 홍길동</p>
                            <p><span class="sp_2">300,000 </span>원에 대해 입금이 완료되었습니까? </p>
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