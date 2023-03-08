<?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') {

                $type = $_POST['post'];
                if($type=="put"){
                    $id = $_POST['ids'];
                    $memo = $_POST['memo']; 
                    $agent = $_POST['agent'];
                    $partner = $_POST['partner'];
                    $status = edit_agency($id, $memo, $agent, $partner);
    
                    // if ($status == 'success'){
                    //     echo '<script language="javascript">alert("Successfully saved.");</script>';
                    // }
                }

            }
         ?>
         
         <!-- view modal edit -->
         <div class="coinbuy_modal_wrapper">
            <div class="modal fade" id="edit<?php echo $array[0]?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                       <div class="logo_text_box">
                            <p>구매전 확인사항</p>
                            <span>COIN<span class="logo_text">TRADER</span></span>
                        </div>
                        
                        <div class="coinbuy_modal_content_wrap">
                            <form id="contactForm" method="POST" class="login_form account_form" role="form">
                                <input type="hidden" name="post" id="post" value="put">
                                <div class="row reg_row">   
                                <input type="hidden" name="ids" id="ids" value="<?php echo $array[0];?>">                         
                                    <div class="col-lg-12">
                                        <div class="input_box input_box1">
                                            <label for="id">아이디</label>
                                            <input type="text" value="<?php echo $array[1];?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input_box input_box1">
                                            <label for="id">Full Name</label>
                                            <input type="text" value="<?php echo $array[3];?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="bank">Bank Name</label>
                                            <input type="text" value="<?php echo $array[4];?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="account">Bank Account</label>
                                            <input type="text" value="<?php echo $array[5];?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input_box input_box1">
                                            <label for="id">Memo</label>
                                            <input type="text" name="memo" id="memo" value="<?php echo $array[7];?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="bank">Partner</label>
                                            <select name="partner" id="partner">
                                            <?php
                                                $querys="SELECT * from partner ORDER BY `creation_date` DESC";
                                                $results=mysqli_query($con,$querys);?>
                                                <?php if ($results->num_rows > 0): ?>
                                                <?php while($arrays=mysqli_fetch_row($results)): ?>
                                                <option value="<?php echo $arrays[0];?>"><?php echo $arrays[3];?></option>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <?php mysqli_free_result($results); ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input_box">
                                            <label for="bank">Agent</label>
                                            <select name="agent" id="agent">
                                            <?php
                                                $queryss="SELECT * from agent ORDER BY `creation_date` DESC";
                                                $resultss=mysqli_query($con,$queryss);?>
                                                <?php if ($resultss->num_rows > 0): ?>
                                                <?php while($arrayss=mysqli_fetch_row($resultss)): ?>
                                                <option value="<?php echo $arrayss[0];?>"><?php echo $arrayss[3];?></option>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <?php mysqli_free_result($resultss); ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="login_btn text-center">
                                    <button class="button" id="submit_button" type="submit">Save</button>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>