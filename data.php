<?php
 
include ('include/db.php');

//saving data from member here
if ( !empty($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST' ) {
 
    $status='';
    $type = $_POST['type'];

    if ($type=='insert'){

        $id = $_POST['id'];
        $qty = $_POST['qty'];
        $amount = $_POST['amount'];
        $partner = $_POST['partner'] ;
        $member = $_POST['member'] ;
        $member_address = $_POST['member_address'];
        $partner_address = $_POST['partner_address'];

        
        $sql = "INSERT INTO purchases (quantity, amount, partner_name,  member_name, partner_address, member_address, member_id)
        VALUES ('$qty', '$amount', '$partner', '$member', '$partner_address', '$member_address', '$id')";
    
        $result = mysqli_query($con, $sql);
    }else{
        $status = 'Waiting for deposit';
        $member = $_POST['id'] ;
        $sql = "DELETE FROM purchases WHERE status = '$status' AND member_id='$member'";
        $result = mysqli_query($con, $sql);
    }


}

?>