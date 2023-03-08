<?php
    include ('header.php');
?>
                <!-- body area -->
                <div class="content_body">
                    <div class="d-flex justify-content-between">
                        <h3 class="content_title">수수료 현황
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pt_25">
                            <div class="table_wrap agency_table_wrap">
                                <div class="table_top">
                                    <div class="table_top_right table_top_right1">
                                        <div class="d-flex">
                                            <div class="input_box year_select">
                                                <select name="bank" id="bank">
                                                    <option value="">전체기간</option>
                                                    <option value="">2023.01 월</option>
                                                    <option value="">2023.01.09</option>
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
                                    </div>
                                </div>
                                <table class="agency_table agency_table_month admin_benefit_table admin_fee_table td_height">
                                    <tr>
                                        <th>번호</th>
                                        <th>에이전시</th>
                                        <th>에이전트</th>
                                        <th>수수료차익</th>
                                        <th>파트너</th>
                                        <th>수수료차익</th>
                                        <th>누적 구매금액</th>
                                        <th>누적 수수료</th>
                                        <th>출금가능 수수료</th>
                                        <th></th>
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>mimiya - <span class="green">0.3%</span></p>
                                        </td>
                                        <td>
                                            <p>2명</p>
                                        </td>
                                        <td><p></p></td>
                                        <td>
                                            <p>5명</p>
                                        </td>
                                        <td><p></p></td>
                                        <td><p>3,620,000원</p></td>
                                        <td><p>315,240원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>315,240원</p></td>
                                        <td><a href="#" data-toggle="modal"
                                        data-target="#exampleModal02" class="button admin_audio">출금신청</a></td>
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td rowspan="4">popit - <span class="green">0.5%</span></td>
                                        <td rowspan="4"><p class="green">0.2%</p></td>
                                        <td>
                                            <p>3명</p>
                                        </td>
                                        <td></td>
                                        <td><p>620,000원</p></td>
                                        <td><p>32,945원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>32,945원</p></td>
                                        <td></td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">kbc - <span class="green">0.8%</span></td>
                                        <td class="td_bg"><p class="green">0.3%</p></td>
                                        <td class="td_bg"><p>620,000원</p></td>
                                        <td class="td_bg"><p>32,945원 (0.3%)</p></td>
                                        <td class="td_bg"></td> 
                                        <td>
                                            <a href="#" data-toggle="modal"
                                        data-target="#exampleModal02" class="button admin_audio">출금신청</a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">bq - <span class="green">0.7%</span></td>
                                        <td class="td_bg"><p class="green">0.2%</p></td>
                                        <td class="td_bg"><p>620,000원</p></td>
                                        <td class="td_bg"><p>32,945원 (0.2%)</p></td>
                                        <td class="td_bg"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg">opmr - <span class="green">0.8%</span></td>
                                        <td class="td_bg"><p class="green">0.3%</p></td>
                                        <td class="td_bg"><p>620,000원</p></td>
                                        <td class="td_bg"><p>32,945원 (0.3%)</p></td>
                                        <td class="td_bg"></td>
                                        <td></td>
                                    </tr>
                                    <!--  -->
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td rowspan="3"><p>happy51 - <span class="green">0.7%</span></p></td>
                                        <td rowspan="3"><p class="green">0.4%</p></td>
                                        <td>
                                            <p>2명</p>
                                        </td>
                                        <td></td>
                                        <td><p>20,000원</p></td>
                                        <td><p>469,000원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>469,000원</p></td>
                                        <td></td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>seven - <span class="green">0.8%</span></p></td>
                                        <td class="td_bg"><p class="green">0.1%</p></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg"><p>32,945원 (0.1%)</p></td>
                                        <td class="td_bg"></td>
                                        <td>
                                            <a href="#" data-toggle="modal"
                                        data-target="#exampleModal02" class="button admin_audio">출금신청</a>
                                        </td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>rocket - <span class="green">1.0%</span></p></td>
                                        <td class="td_bg"><p class="green">0.3%</p></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg">32,945원 (0.3%)</td>
                                        <td class="td_bg"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td><p>2</p></td>
                                        <td>
                                           <p>naver - <span class="green">0.5%</span></p>
                                        </td>
                                        <td>
                                            <p>1명</p>
                                        </td>
                                        <td></td>
                                        <td>
                                            <p>1명</p>
                                        </td>
                                        <td></td>
                                        <td><p>263,620,000원</p></td>
                                        <td><p>32,945원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>32,945원</p></td>
                                        <td><a href="#" data-toggle="modal"
                                        data-target="#exampleModal02" class="button admin_audio">출금신청</a></td>
                                    </tr>
                                    <tr class="table_data agency_td">
                                        <td></td>
                                        <td></td>
                                        <td rowspan="2">poll - <span class="green">0.6%</span></td>
                                        <td rowspan="2"><p class="green">0.1%</p></td>
                                        <td>
                                            <p>1명</p>
                                        </td>
                                        <td></td>
                                        <td><p>36,620,000원</p></td>
                                        <td><p>32,945원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>32,945원</td>
                                        <td></td>
                                    </tr>
                                    <tr class="table_data">
                                        <td></td>
                                        <td></td>
                                        <td class="td_bg"><p>lose - <span class="green">0.9%</span></p></td>
                                        <td class="td_bg"><p class="green">0.3%</p></td>
                                        <td class="td_bg"><p>36,620,000원</p></td>
                                        <td class="td_bg"><p>32,945원 (0.3%)</p></td>
                                        <td class="td_bg"></td>
                                        <td><a href="#" data-toggle="modal"
                                        data-target="#exampleModal02" class="button admin_audio">출금신청</a></td> 
                                    </tr>
                                    <tr class="table_data">
                                        <td><p>합계</p></td>
                                        <td>
                                           <p>2명</p>
                                        </td>
                                        <td>
                                            <p>3명</p>
                                        </td>
                                        <td></td>
                                        <td><p>6명</p></td>
                                        <td></td>
                                        <td><p>5,136,620,000원</p></td>
                                        <td><p>11,842,945원 (<span class="green">0.8%</span>)</p></td>
                                        <td><p>21,842,945원</p></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- admin benefit alert 01 area -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal02">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <div class="d-flex benefit_to justify-content-between">
                                <p>누적 수익금 :</p>
                                <p>412,405,147 원</p>
                            </div>
                            <div class="d-flex benefit_to justify-content-between">
                                <p>정산가능 수익금 :</p>
                                <p class="pink">32,140,452 원</p>
                            </div>
                            <div class="benefit_total">
                                <p>신청금액 :</p>
                                <p>32,100,000 원</p>
                            </div>
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