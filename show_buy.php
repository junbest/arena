
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $type = $_POST['deposit_status'];
    if($type=="put"){

    }
   $id = $_POST['id'];

   $sql = "DELETE FROM purchases WHERE id = '$id'";

   if (mysqli_query($con, $sql)) {
        //header("Location: /buy ");    
   }
}

?>
