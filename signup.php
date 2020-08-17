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
    <form action="login.php" method="post">
      <h1>Sign Up</h1>
      <input type="text" name="nama" placeholder="Nama" class="txtb">
      <input type="text" name="userbaru" placeholder="Username" class="txtb">
      <input type="email" name="email" placeholder="Email" class="txtb">
      <input type="password" name="passbaru1" placeholder="Masukan Password" class="txtb">
      <input type="password" name="passbaru2" placeholder="Ulangi Password" class="txtb">
      <input type="text" name="alamat" placeholder="Alamat" class="txtb">
      <input type="submit" name="submit" value="Register" class="signup-btn">
      <a href="login.php">
        <input type="button" class="btn" value="Atau Login">
      </a>
    </form>
  </div>
</body>

</html>