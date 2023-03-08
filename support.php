<?php
    include 'header.php';
?>

                <!-- body area -->
                <div class="content_body">
                    <h3 class="content_title">문의하기</h3>
                    <div class="row">
                        <div class="col-lg-4 pt_25">
                            <div class="arena_coin_box arenacoin_transfer_box d-sm-block d-none">
                                <div class="row arena_row">
                                    <div class="col-lg-12">
                                        <form action="#" class="arena_form ask_form">
                                            <div class="input_box">
                                                <label for="title">제목</label>
                                                <input type="text" id="title" placeholder="제목을 입력하세요.">
                                            </div>
                                            <div class="input_box">
                                                <label for="text">내용</label>
                                                <textarea name="" id="text" cols="30" rows="10" placeholder="내용을 입력하세요."></textarea>
                                            </div>
                                            <div class="input_box">
                                                <div class="file_name">
                                                    <p class="p1"><label for="text">파일첨부</label></p>
                                                    <p class="p2"><span>jpg, gif, png</span> 파일만 첨부가능합니다.</p>
                                                </div>
                                                <label class="uploadFile">
                                                    <span class="filename">선택된 파일없음</span>
                                                    <input type="file" class="inputfile form-control" name="file" >
                                                    <div class="upload_btn">파일선택</div>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="button alert_modal_audio" data-toggle="modal" data-target="#exampleModal02">
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
                                    <p>문의이력</p>
                                    <div class="table_top_right">
                                       <div class="input_box">
                                            <select name="bank" id="bank">
                                                <option value="">10개씩 보기</option>
                                                <option value="">50개씩 보기</option>
                                                <option value="">100개씩 보기</option>
                                            </select>
                                        </div>
                                        <a href="#" class="button">문의하기</a>
                                    </div>
                                    
                                </div>
                                <table class="coinbuy_table">
                                    <tr>
                                        <th>날짜</th>
                                        <th>상태</th>
                                        <th>제목</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr class="table_data table_data4">
                                        <td>
                                           <p>2021. 09. 20</p>
                                           <p><span>오전 </span>09:57</p>
                                        </td>
                                        <td>
                                            <a href="#">답변대기</a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p>입금했는데 언제 충전되나요?</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td></td>
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
                                            <a href="#">답변완료</a>
                                        </td>
                                        <td>
                                            <div class="line"></div>
                                            <p>문의 있습니다.</p>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td></td>
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
        <!-- askquestin view modal 02 area -->
        <div class="coinbuy_modal_wrapper">
            <div class="modal fade" id="exampleModal02">
                <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="logo_text_box">
                            <p>입금처리 언제되나요?</p>
                        </div>
                        <div class="coinbuy_modal_content_wrap">
                            <div class="ask_view_heading">
                                <p class="p1">문의내용</p>
                                <p class="p2"><span class="sp_2">2021.09.20</span>  오전 <span class="sp_2">09:57</span></p>
                            </div>
                            <div class="coinbuy_modal_content coinbuy_modal_content2">
                                <ul class="coinbuy_modal2_list ask_modal_list">
                                    <li>현재 관세법인 우신이란곳에서 2일전부터 문자가 와서</li>
                                    <li>오늘 우신에다가 입금을 했습니다 (관세)가격이 51610원이였고</li>
                                    <li>우신에다가 직접 입금했습니다 (우리은행)</li>
                                    <li>이런 경우나 사례가 있는지 답답해서 문의 올려봅니다</li>
                                    <li>자세히 알려주세요.</li>
                                </ul>
                            </div>
                            <div class="ask_view_heading mt_20">
                                <p class="p1">답변</p>
                                <p class="p2"><span class="sp_2">2021.09.20</span>  오전 <span class="sp_2">09:57</span></p>
                            </div>
                            <div class="coinbuy_modal_content coinbuy_modal_content2">
                                <ul class="coinbuy_modal2_list ask_modal_list1">
                                    <li>안녕하세요</li>
                                    <li>바라관세사무소 문재식입니다.</li>
                                    <li>관세사무소 2군대서 동일한 금액을 입금하라고 연락이 온 것이 제</li>
                                    <li>가 봐도 이상하게 보입니다.</li>
                                    <li>하나의 BL번호에는 한건만 신고가 가능하며 다른 관세사무소에서 </li>
                                    <li>연락이 오는 경우는 없다고 보시면 됩니다.</li>
                                    <li>☆수출입 통관대행 및 관세·무역·FTA 상담자문</li>
                                </ul>
                                <div class="ask_view_link">
                                    <p>* 문의 : <a href="#">jsmoon@baracustoms.co.kr</a></p>
                                    <p>* 카카오톡상담  : <a href="#"> https://pf.kakao.com/_xaXBxgC</a></p>
                                    <p class="p4">수고하세요</p>
                                </div>
                            </div>
                            <div class="ask_view_img pt_20">
                                    <img src="img/img1.png" class="img1 img-fluid" alt="">
                                    <div class="ask_view_img_link">
                                        <img src="img/icon13.svg" alt="">
                                        <a href="#">Screenshot_20220828-214038_Fiverr.jpg (188.41 kB)</a>
                                    </div>
                                </div>
                            <div class="coinbuy_modal_btn2 ask_view_modal_btn d-flex justify-content-center">
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- askquestion alert 01 area -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="exampleModal_arlet1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>코인트레이더 지원은 자원봉사자들이 처리합니다.</p>
                            <p class="pt_5">신속하게 응답해 드리고자 노력하지만,</p>
                            <p class="pt_5">다소 시간이 걸릴 수 있습니다.</p>
                            <div class="text-right transfer_alert_btn">
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
                <div class="modal fade" id="exampleModal_arlet02">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>문의 글을 등록하시겠습니까?</p>
                            <div class="text-right alert_btn">
                                <a href="#" class="button button1">취 소</a>
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>문의 글이 등록되었습니다.</p>
                            <div class="text-right">
                                <a href="#" class="button">확 인</a>
                            </div>
                        </div>
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>문의이력을 삭제하시겠습니까?</p>
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
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>