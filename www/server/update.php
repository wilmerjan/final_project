<?php
include "db.php";  if(isset($_POST['update']))
{
$id=$_POST['subs-id'];
$name=$_POST['sub-name'];
$contact=$_POST['sub-contact'];
$q=mysqli_query($con,"UPDATE `subscribers_tbl` SET `name`='$name',`contact_number`='$contact' WHERE `subs_id` = '$id'");  if($q)
echo "success";
else
echo "error";
}
?>
