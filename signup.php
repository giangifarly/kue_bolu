<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>
  <body>
    <div class="signup-form">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <h1>Sign Up</h1>
      <input type="text" name="nama" placeholder="Nama" class="txtb">
      <input type="text" name="userbaru" placeholder="Username" class="txtb">
      <input type="email" name="email" placeholder="Email" class="txtb">
      <input type="password" name="passbaru1" placeholder="Masukan Password" class="txtb">
      <input type="password" name="passbaru2" placeholder="Ulangi Password" class="txtb">
       <input type="text" name="alamat" placeholder="Alamat" class="txtb">
      <input type="submit" name="submit" value="Register" class="signup-btn">
      <a href="index.php"> 
        <input type="button" class="btn" value="Login"> 
      </a> 
    </form>
    </div>
  </body>
</html>
