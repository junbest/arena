<?php
    include ('header.php');
?>
                <!-- body area -->
                <div class="content_body">
                    <h3 class="content_title">코인 판매하기</h3>
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
                                            <h4>10,000</h4>
                                            <p class="p3">전일대비 <span>0.00%</span></p>      
                                        </div>
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
                                        <form action="#" class="arena_form arena_coinsell_form">
                                            <p class="p3">보유수량 : <span class="sp_1">30 ARENA</span></p>
                                            <div class="increment_box">
                                                <input type="number" class="quantity" value="30">
                                            </div>
                                            <p class="p4">판매수수료 : <span class="sp_1">1.0%</span></p>
                                            <div class="total_box">
                                                <p class="p1">총액</p>
                                                <p class="p2"><span>297,000 </span>원</p>
                                            </div>
                                            <button type="button" class="button alert_modal_audio" data-toggle="modal" data-target="#exampleModal_arlet1">
                                                판매하기
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pt_25">
                            <div class="table_wrap">
                                <div class="table_top">
                                    <p>판매이력</p>
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
                                    <tr class="table_data table_data3">
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td>
                                            <a href="#">판매완료</a>
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
                                            <p>-30</p>
                                        </td>
                                        <td><p>100,000</p></td>
                                        <td>
                                            <div class="line"></div>
                                            <a href="#">
                                                <img src="img/icon10.svg" alt="">
                                            </a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data table_data4">
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td>
                                            <a href="#">판매중</a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p>MTsYiguTXWzFBiKsnwv6F5XGvBvUUwo9c1e9b663</p>
                                            <p><img src="img/icon7.svg" alt=""></p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="img/icon8.svg" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <p>-30</p>
                                        </td>
                                        <td><p>3,000,000</p></td>
                                        <td>
                                            <div class="line"></div>
                                            <a href="#">
                                                <img src="img/icon10.svg" alt="">
                                            </a>
                                        </td> 
                                    </tr>
                                </table>
                                <!-- <div class="table_footer">
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
                                            <p>케이뱅크</p>
                                            <p>100-127-238819</p>
                                            <p>이종윤</p>
                                        </div>
                                    </div>
                                </div> -->
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