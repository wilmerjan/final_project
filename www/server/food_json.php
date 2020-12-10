<?php
include "db.php";
$food_data=array();
$fq=mysqli_query($con, "SELECT * FROM `food_tbl` ");  while ($food_row=mysqli_fetch_object($fq)){
$food_data[]=$food_row;
}
echo json_encode($food_data);
?>