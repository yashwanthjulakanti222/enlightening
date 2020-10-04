<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:index.php");
}
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
 <?php 
             if(isset($_GET['e']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-success" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['e']))
                          {
                            echo $_GET['e'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>

            <?php 
             if(isset($_GET['e1']))
            {
            ?>
            <div class="float-center">
            <div class="alert alert-danger" id="success-alert">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>
               <?php  if(isset($_GET['e1']))
                          {
                            echo $_GET['e1'];
                      }
                           ?>

              </strong>
            </div>
            </div>
           <?php 
            }
           ?>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Testimonials</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="save1.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
        <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label> Profession </label>
                <input type="text" name="pro" class="form-control" placeholder="Enter profession">
            </div>
            <div class="form-group">
                <label> Upload image </label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label> Description </label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description">
            </div>
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="test" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Testimonials
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>ID </th>
          <th>Name </th>
          <th>Profession</th>
          <th>Description </th>
            <th>image </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <?php
                    include '../admin/db.php';
                    $stmt="select * from testimonials order by id desc";
                    $res=mysqli_query($conn,$stmt);

                      while($row=mysqli_fetch_assoc($res))
                      {
                  ?>
        <tbody>
     
          <tr>
          <td><?php echo $row['id']; ?> </td>
          <td><?php echo $row['name']; ?> </td>
          <td><?php echo $row['profession']; ?> </td>
          <td><?php echo $row['description']; ?> </td>

            <td><?php echo $row['image_name']; ?> </td>
            <td>
                <form action="delete.php" method="post">
                <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                <button type="delete" name="deletete" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
        
        </tbody>
        <?php
                      }
                      ?>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
<script>
$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>
<?php ob_end_flush();
?>