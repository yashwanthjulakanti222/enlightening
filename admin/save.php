<?php

   include 'db.php';
   if(isset($_POST['event']))
   {
   $aim=$_POST['aim'];
   $Description=$_POST['description'];
   $title=$_POST['title'];
   $date=$_POST['date'];
   $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
   $image_name = addslashes($_FILES['image']['name']);
   $sql="insert into events (aim,title,date,description,image,url) values('$aim','$title','$date','$Description','$image','$image_name')";
   $res1=mysqli_query($conn,$sql);
   if($res1)
   {
       header("location:events.php?e=Success!Added succesfully");
   }
   else{
    header("location:events.php?e1=Failed! Image size exceeded");
   }

   
}
if(isset($_POST['campaign']))
{
$aim=$_POST['aim'];
$Description=$_POST['description'];
$title=$_POST['title'];
$date=$_POST['date'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);
$sql="insert into campaign (aim,title,date,description,image,url) values('$aim','$title','$date','$Description','$image','$image_name')";
$res1=mysqli_query($conn,$sql);
if($res1)
{
    header("location:campaign.php?e=Success!Added succesfully");
}
else{
    header("location:campaign.php?e1=Failed! Image size exceeded");
}


}
?>