<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
  <form action="proses_login.php" method="POST">
    <div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input name="username" type="text" placeholder="Username">
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input name="password" type="password" placeholder="Password">
      </div>

      <input type="submit" class="btn" value="Sign in">

      <a href="signup.php" style="font-style: none;"> <input type="button" class="btn" value="Sign Up"> </a>
    </div>
  </form>

</body>
</html>
