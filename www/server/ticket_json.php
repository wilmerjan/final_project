<?php
include "db.php";
$ticket_data=array();
$tq=mysqli_query($con, "SELECT * FROM `ticket_tbl` ");  while ($ticket_row=mysqli_fetch_object($tq)){
$ticket_data[]=$ticket_row;
}
echo json_encode($ticket_data);
?>