<?php
include "db.php";
$login_data=array();
$lq=mysqli_query($con, "SELECT * FROM `owner_tbl` ");  while ($login_row=mysqli_fetch_object($lq)){
$login_data[]=$login_row;
}
echo json_encode($login_data);
?>