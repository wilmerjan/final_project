<?php
include "db.php";  if(isset($_POST['update']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$q=mysqli_query($con,"UPDATE `subscribers_tbl` SET `name`='$name',`contact_number`='$contact' WHERE `subs_id` = '$id'");  if($q)
echo "success";
else
echo "error";
}
?>
