<?php

$purchase_id = $array[0];
$order_info = query_purchase($purchase_id);

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $type = $_POST['deposit_status'];
    if($type=="put"){
        $status = update_purchase_status($purchase_id);
    }else if($type=='delete'){
        $id = $_POST['id'];
        $sql = "DELETE FROM purchases WHERE id = '$id'";
     
        if (mysqli_query($con, $sql)) {
             //header("Location: /buy ");    
        }
    }
}

?>
           <!-- coinbuy alert 02 area -->
           <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="delete_alert<?php echo $array[0]?>">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content modal_content2">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p>코인 구매이력을 삭제하시겠습니까?</p>
                            <form id="contactForm" method="POST" class="login_form account_form" role="form">
                              <div class="text-right alert_btn">
                                 <a href="#" class="button button1" data-dismiss="modal">취 소</a>
                                 <!-- <a href="#" class="button">확 인</a> -->
                                 <input type="hidden" name="deposit_status" id="deposit_status" value="delete">
                                 <input type="hidden" name="id" id="id" value="<?php echo $array[0]?>">
                                 <button class="button" id="submit_button" type="submit">확 인</button>
                              </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Show status of deposit -->
        <div class="coinbuy_modal_wrapper">
            <div class="modal fade" id="show_info<?php echo $array[0]; ?>">
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
                                    <p>로 <span class="text2">
                                    <?php echo $order_info['quantity'];?>
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
                                        <p class="p2"><?php echo $order_info['amount'];?></p>
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
                                <form id="contactForm" method="POST" class="login_form account_form" role="form">
                                    <input type="hidden" name="deposit_status" id="deposit_status" value="put">
                                    <a href="#" id="set_deposit" class="button button2">입금완료</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Asking to proceed purchasing -->
    <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="coinbuy_alert3_1">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content">
                           <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                            <p><span class="sp_1" id="qty_arena2"></span>를 구매하시겠습니까?</p>
                            <div class="text-right alert_btn">
                                <a href="#" data-dismiss="modal" class="button button1">취 소</a>
                                    <a href="#" id="proceed_purchase" class="button">확 인</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Show this if there is existing purchase order -->
        <div class="coinbuyalter_wrapper">
            <div class="login_modal">
                <div class="modal fade" id="coinbuy_alert3_2">
                    <div class="modal-dialog modal-dialog-centered ">
                        <div class="modal-content modal_content2">
                            <div class="logo_text_box">
                                <span>COIN<span class="logo_text">TRADER</span></span> 
                            </div>
                                <p>입금대기중인 코인구매가 있습니다.</p>
                                <p><span class="sp_2">기존 코인구매를 취소하</span>시겠습니까?</p>
                            <div class="text-right alert_btn">
                                <a href="#" data-dismiss="modal" class="button button1">취 소</a>
                                <a href="#" id="proceed_create" class="button">확 인</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>