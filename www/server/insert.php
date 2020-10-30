<?php
include "db.php";  if(isset($_POST['insert']))
{
$name=$_POST['sub-name'];
$contact_number=$_POST['sub-contact'];
$q=mysqli_query($con,"INSERT INTO `subscribers_tbl`(`name`, `contact_number`) VALUES ('$name','$contact_number')");
if($q)
echo "success";  else
echo "error";
}
?>
