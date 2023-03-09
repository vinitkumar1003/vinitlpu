<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>eLearn</title>
    <link rel="stylesheet" href="style.css">
    <style>
      .back{
  position: fixed;
  margin-left: 80%;
}
.links {
  text-decoration: none;
  color: #c8f2ef;
}
    </style>
  </head>
  <body>
    <div class="navigation">
      <img src="logo.png" alt="" width="100px" />
      <h1>&nbsp; eLearn</h1>
      <div class="back"><a href="contact.php" class="links">Contact Us</a></div>
    </div>
    <div class="center">
       <h1>Login</h1>
       <form action="validation.php" method="post">
        <div class="txt_field">
          <input type="email" name="email" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <button type="submit">LOGIN
        </button>
        <div class="signup_link">
         <a href="admin_login.php">ADMIN</a>
        </div>
      </form>
    </div>
  
  </body>
</html>
