<?php 
  $username = $_POST['username'];
  if($username == 'admin'){
    header('Location:admin/index.php');
  }else if($username == 'member'){
    header('location:member/index.php');
  }else{
    echo "";
  }

?>


