<?php

   include 'db.php';
   if(isset($_POST['gallery']))
   {
    $title=$_POST['title'];
    $cat=$_POST['category'];
   $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
   $image_name = addslashes($_FILES['image']['name']);
   $sql="insert into gallery (title,category,image,image_name) values('$title','$cat','$image','$image_name')";
   $res1=mysqli_query($conn,$sql);
   if($res1)
   {
       //echo "success";
       header('location:gallery.php?e=Success!Added succesfully');
   }
   else{

    header('location:gallery.php?e1=Failed! Image size exceeded');
   }

} 

?>


<?php

include 'db.php';
if(isset($_POST['team']))
{
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);
$twitter=mysqli_real_escape_string($conn,$_POST['url']);
$linked=mysqli_real_escape_string($conn,$_POST['url1']);
$face=mysqli_real_escape_string($conn,$_POST['url2']);
$name=$_POST['name'];
$pro=$_POST['pro'];
echo $name;
echo $pro;
$sql="insert into team (image,image_name,twitter,linkedin,facebook,name,profession) values ('$image','$image_name','$twitter','$linked','$face','$name','$pro')";
$res1=mysqli_query($conn,$sql);
if($res1)
{
    //echo "success";
    header('location:team.php?e=Success!Added succesfully');
}
else{
 
    header('location:team.php?e1=Failed! Image size exceeded');
}
}

?>