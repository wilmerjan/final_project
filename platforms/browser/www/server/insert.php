<?php
include "db.php";  
if(isset($_POST['insert']))
{
$name=$_POST['sub_name'];
$contact_number=$_POST['sub_contact'];
$bus_id=$_POST['bus_id'];
$q=mysqli_query($con,"INSERT INTO `subscribers_tbl`(`name`, `contact_number`, `owner_id`) VALUES ('$name','$contact_number', '$bus_id')");
if($q)
echo "success";  
else
echo "error";
}

if(isset($_POST['food_insert']))
{
$food_name=$_POST['food_name'];
$food_price=$_POST['food_price'];
$food_class=$_POST['food_class'];
$food_type=$_POST['food_type'];
$initial_stock=$_POST['initial_stock'];

$bus_id=$_POST['bus_id'];
$q=mysqli_query($con,"INSERT INTO `food_tbl`(`food_name`, `food_price`, `food_classification`, `food_type`, `stock_qty`, `owner_id`) VALUES 
('$food_name', '$food_price', '$food_class', '$food_type', '$initial_stock', '$bus_id')");
if($q)
echo "success";  
else
echo "error";
}

if(isset($_POST['food_insert_archive']))
{
$food_id=$_POST['food_id'];
$food_name=$_POST['food_name'];
$food_price=$_POST['food_price'];
$food_class=$_POST['food_class'];
$food_type=$_POST['food_type'];
$initial_stock=$_POST['initial_stock'];
$bus_id=$_POST['bus_id'];

$faq=mysqli_query($con,"INSERT INTO `food_archive_tbl`(`food_id`,`food_name`, `food_price`, `food_classification`, `food_type`, `stock_qty`, `owner_id`) VALUES 
('$food_id', '$food_name', '$food_price', '$food_class', '$food_type', '$initial_stock', '$bus_id')");
if($faq)
echo "success";  
else
echo "error";
}


if(isset($_POST['register']))
{
$owner_username=$_POST['owner_username'];
$bus_name=$_POST['bus_name'];
$bus_desc=$_POST['bus_desc'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$password=$_POST['password'];

$register = mysqli_num_rows(mysqli_query($con, "SELECT `owner_username` FROM `owner_tbl` WHERE `owner_username` = '$owner_username'"));  
if($register == 0)
{
$insert = mysqli_query($con,"INSERT INTO `owner_tbl`(`owner_username`, `business_name`, `business_description`, `business_address`, `contact_number`, `password`) VALUES ('$owner_username','$bus_name','$bus_desc','$address','$contact','$password')");
if($insert)
echo "success";
else
echo "error";
}
else if($register != 0)  
echo "exist";
}
else if(isset($_POST['login']))
{
$owner_username=$_POST['owner_username'];
$password=$_POST['password'];
$login = mysqli_num_rows(mysqli_query($con, "SELECT `owner_username`,`password` FROM `owner_tbl` WHERE `owner_username` ='$owner_username' AND `password` ='$password'"));  
if($login != 0)
echo "success";
else
echo "error";
}



?>
