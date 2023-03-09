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
       <h1>Contact Us</h1>
       <form action="contact_validation.php" method="post">
        
        <div class="txt_field">
          <input type="text" name="name" required>
          <span></span>
          <label>Your Name</label>
        </div>
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="number" name="number" required>
          <span></span>
          <label>Your Mob. Number</label>
        </div>
        
        <button type="submit">SUBMIT
        </button>
        <div class="signup_link">
         <a href="login.php">BACK</a>
        </div>
      </form>
    </div>
  
  </body>
</html>
