<?php
include "db.php";  if(isset($_GET['id']))
{
$id=$_GET['id'];
$q=mysqli_query($con, "DELETE FROM `subscribers_tbl` WHERE `subs_id` ='$id'");  
if($q)
echo "success"; 
 else
echo "error";
}
?>
