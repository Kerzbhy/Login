<?php
 include 'koneksi.php';

  $username=$_POST['username'];
  $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

  $query="INSERT INTO tbl_login VALUE ('$username','$password')";
  $sql=mysqli_query($conn,$query);
  if($sql){
  header('location:login.php');
  }



?>