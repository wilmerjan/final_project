<?php
include "db.php";  
if(isset($_GET['id']))
{
$id=$_GET['id'];
$q=mysqli_query($con, "DELETE FROM `subscribers_tbl` WHERE `subs_id` ='$id'");  
if($q)
echo "success"; 
 else
echo "error";
}

if(isset($_GET['food_id']))
{
$food_id=$_GET['food_id'];
$q=mysqli_query($con, "DELETE FROM `food_tbl` WHERE `food_id` ='$food_id'");  
if($q)
echo "success"; 
 else
echo "error";
}

if(isset($_GET['ticket_del']))
{
$id=$_GET['id'];
$q=mysqli_query($con, "DELETE FROM `ticket_tbl` WHERE  `ticket_id` ='$id'") or die(mysqli_error($con));  
if($q)
echo "success"; 
 else
echo "error";
}

?>
