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
       <h1>Add New User</h1>
       <form action="reg_validation.php" method="post">
       <div class="txt_field">
          <input type="text" name="full_name" required>
          <span></span>
          <label>Full Name</label>
        </div>
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <button type="submit">REGISTER
        </button>
        <div class="signup_link">
         <a href="admin_home.php">Cancel</a>
         <a href="admin_home.php">&nbsp; Back</a>
        </div>
      </form>
    </div>

  </body>
</html>
