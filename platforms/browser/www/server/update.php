<?php
include "db.php";  
if(isset($_POST['update']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$q=mysqli_query($con,"UPDATE `subscribers_tbl` SET `name`='$name',`contact_number`='$contact' WHERE `subs_id` = '$id'");  if($q)
echo "success";
else
echo "error";
}

if(isset($_POST['regis_update']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$class=$_POST['classification'];
$type=$_POST['type'];
$stock=$_POST['stock'];
$rq=mysqli_query($con,"UPDATE `food_tbl` SET `food_name`='$name',`food_price`='$price',`food_classification`='$class',`food_type`='$type',`stock_qty`='$stock' WHERE `food_id` = '$id'");  if($rq)
echo "success";
else
echo "error";
}

?>
