<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:addcourse.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>eLearn</title>
    <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

.back{
  position: fixed;
  margin-left: 80%;
}
.links {
  text-decoration: none;
  color: #c8f2ef;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 33.33%;
  padding: 0 10px;
  
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background: linear-gradient(150deg, #3b8ac4, #345DA7);
  color: aliceblue;
  border:5px;
  margin-bottom: 20px;
  height:200px;
}
</style>
</head>
<body>

<div class="navigation">
      <img src="logo.png" alt="" width="100px" />
      <h1>&nbsp; eLearn</h1>
      <div class="back"><a href="index.php" class="links">Back</a></div>
</div>
    <h2 align="center">Your Courses</h2>
<div class="row">
 
    <?php
     $conn=mysqli_connect('sql308.epizy.com','epiz_33438650','6ROPvRSklc','epiz_33438650_elearn');
     $query=mysqli_query($conn,"Select * from course");
     if($query){
         while($row = mysqli_fetch_assoc($query)){
                $name = $row['course_name'];
                $desc = $row['course_desc'];
                $inst = $row['course_inst'];
                echo '  <div class="column"><a href="coursedetails.php" class="links"> <div class="card">
                <h3>'.$name.'</h3>
                <p>'.$desc.'</p>
                <p>'.$inst.'</p>
              </div> </div> 
               </a>';
            }
        }
        
    ?>
      </div>
 

</body>
</html>
