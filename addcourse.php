<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>eLearn</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="navigation">
      <img src="logo.png" alt="" width="100px" />
      <h1>&nbsp; eLearn</h1>
    </div>
    <div class="center">
       <h1>Add New Course</h1>
       <form action="course_validation.php" method="post">
        <div class="txt_field">
          <input type="text" name="course_name" required>
          <span></span>
          <label>course Name</label>
        </div>
        <div class="txt_field">
          <input type="text" name="course_desc" required>
          <span></span>
          <label>course description</label>
        </div>
        <div class="txt_field">
          <input type="text" name="course_inst" required>
          <span></span>
          <label>course Instructor</label>
        </div>
        
        <button type="submit">ADD
        </button>
        <div class="signup_link">
         <a href="admin_home.php">Cancel</a>
         <a href="admin_home.php">&nbsp; Back</a>
        </div>
      </form>
</div> 
</body>
</html>