<?php
$username   = $_POST['username'];
$pass       = md5($_POST['password']);

					


include 'koneksi_login.php';


$user = mysqli_query($connect,"select * from tb_users where username='$username' and password='$pass'");
$ketemu = $user->num_rows;
$data = $user->fetch_assoc();
if($ketemu>=1)
{

session_start();
$_SESSION['username'] = $username;
    header("location:?halaman=halaman_admin");
}else 
{
    header("location:?halaman=login");
}

?>
