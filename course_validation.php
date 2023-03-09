<?php
session_start();
header('location:addcourse.php');
$con = mysqli_connect('sql308.epizy.com','epiz_33438650','6ROPvRSklc');
mysqli_select_db($con,'epiz_33438650_elearn');
$name=$_POST['course_name'];
$desc = $_POST['course_desc'];
$inst = $_POST['course_inst'];
$s= " select * from course where course_name = '$name' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "Course exist!";
}
else{
    $reg = "insert into course(course_name, course_desc, course_inst) values ('$name','$desc' , '$inst')";
    mysqli_query($con, $reg);
    echo "Added Successfully";
}
?>