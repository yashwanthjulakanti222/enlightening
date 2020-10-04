<?php
include 'db.php';

if(isset($_POST['delete'])){
$id=$_POST['delete_id'];
$sql="DELETE FROM gallery WHERE id=$id";
$result=$conn->query($sql);
if(!$result ) {
    die('Could not delete data: ' . mysql_error());
 }
else{
  //echo "";
  header('location:gallery.php');
} 
}

?>
<?php
include 'db.php';

if(isset($_POST['deletet'])){
$id=$_POST['delete_id'];
$sql="DELETE FROM team WHERE id=$id";
$result=$conn->query($sql);
if(!$result ) {
    die('Could not delete data: ' . mysql_error());
 }
else{
  //echo "";
  header('location:team.php');
} 
}

?>

?>
<?php
include 'db.php';

if(isset($_POST['deletete'])){
$id=$_POST['delete_id'];
$sql="DELETE FROM testimonials WHERE id=$id";
$result=$conn->query($sql);
if(!$result ) {
    die('Could not delete data: ' . mysql_error());
 }
else{
  //echo "";
  header('location:testimonial.php');
} 
}

?>