<?php 
session_start();
include 'db.php';
$un= mysqli_real_Escape_String($conn,$_POST['uname']);
$pass=mysqli_real_Escape_String($conn,$_POST['pass']);
$sql="select * from user where name='$un' && password='$pass'";
$res=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);
if($rows==0)
{
    header("location:./?id='invalid credentials'");
}
else 
{
   $_SESSION['id']=$row['id'];
    header('location:login.php');

}
?>
