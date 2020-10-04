<?php
include 'db.php';
if(isset($_POST['delete'])){
$id=$_POST['delete_id'];
$sql="DELETE FROM events WHERE id=$id";
$result=$conn->query($sql);
if(!$result ) {
    die('Could not delete data: ' . mysql_error());
 }
else{
  header('location:events.php');
} 
}

?>
<?php
include 'db.php';
if(isset($_POST['deletec'])){
$id=$_POST['delete_id'];
$sql="DELETE FROM campaign WHERE id=$id";
$result=$conn->query($sql);
if(!$result ) {
    die('Could not delete data: ' . mysql_error());
 }
else{
  header('location:campaign.php');
} 
}

?>
