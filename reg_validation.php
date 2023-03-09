<?php
session_start();
header('location:admin_home.php');
$con = mysqli_connect('sql308.epizy.com','epiz_33438650','6ROPvRSklc');
mysqli_select_db($con,'epiz_33438650_elearn');
$name=$_POST['full_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$s= " select * from users where email = '$email' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "Username exist!";
}
else{
    $reg = "insert into users(full_name, email, password) values ('$name','$email' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registered Successfully";
}
?>