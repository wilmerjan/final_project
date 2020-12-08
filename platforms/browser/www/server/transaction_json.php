<?php
include "db.php";
$transac_data=array();
$tq=mysqli_query($con, "SELECT * FROM `transaction_tbl` ORDER BY `transaction_id` DESC");  while ($transac_row=mysqli_fetch_object($tq)){
$transac_data[]=$transac_row;
}
echo json_encode($transac_data);
?>