<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
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

<?php
require 'conn.php';
if (isset($_POST['submit'])) {
$user=$_POST['userbaru'];
$pass1=$_POST['passbaru1'];
$pass2=$_POST['passbaru2'];

$data= mysqli_query($mysqli, "SELECT * FROM akun WHERE username='$user'" );
$row = mysqli_fetch_array($data);
if ($row > 0) {
  error_reporting(0);
  echo "Username telah di gunakan";
  exit;
}else {

  if ($pass1==$pass2) {
    
$passnew = sha1($pass1);

$data2 = mysqli_query($mysqli,"INSERT INTO `akun` (`username`,`password`) VALUES ('$user','$passnew');");

if ($data2) {
    //Jika berhasil
    echo "Data Admin Telah Ditambakan";
    header("location:index.php");
    exit;
  } else {
    echo "Error: "  . "<br>" .  mysqli_error($mysqli);
  }

}else { echo "Password Tidak Sama";
      exit; }

}

}
?>
  </body>
</html>
