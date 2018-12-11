<?php 
  //echo "You win".$_POST['dataString'];
   include('config.php');
$uid=$_POST['uid'];
$hand=$_POST['hand'];
$status=$_POST['status'];
$betamt=$_POST['betamt'];
$winnings=$_POST['winnings'];



     $sql = "INSERT INTO pfair (uid,hand,status)
                    VALUES ('".$uid."','".$hand."','".$status."','".$betamt."','".$winnings."')";

if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $db->error;
}





 ?>