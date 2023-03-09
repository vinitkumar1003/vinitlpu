<?php
session_start();
header('location:login.php');
$con = mysqli_connect('sql308.epizy.com','epiz_33438650','6ROPvRSklc');
mysqli_select_db($con,'epiz_33438650_elearn');
$name=$_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$s= " select * from contact where email = '$email' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "error!";
}
else{
    $reg = "insert into contact(name,email,number) values ( '$name','$email', '$number')";
    mysqli_query($con, $reg);
    echo " Success";
}
?>