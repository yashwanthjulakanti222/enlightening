<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location:index.php");
}
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Latest Events</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="save.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

        <div class="form-group">
                <label> Aim </label>
                <input type="text" name="aim" class="form-control" placeholder="Enter Aim">
            </div>
            <div class="form-group">
            <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label> Date </label>
                <input type="date" name="date" class="form-control" placeholder="Enter date">
            </div>
            <div class="form-group">
                <label> Description </label>
                <input type="text" name="description" class="form-control" placeholder="Enter description">
            </div>
            <div class="form-group">                   
              <label for="">Upload Photo of related</label>
              <input type="file" name="image"  class="text-center center-block file-upload" >
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
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
              Add Latest Events
            </button>

    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>Date </th>
            <th>Aim </th>
            <th>Title</th>
            <th>Description </th>
            <th>Uploaded Photo</th>
            <th>DELETE </th>
          </tr>
        </thead>
        <?php
                    include '../admin/db.php';
                    $stmt="select * from events order by id desc";
                    $res=mysqli_query($conn,$stmt);

                      while($row=mysqli_fetch_assoc($res))
                      {
                  ?>
        <tbody>
        
          <tr>
            <td><?php echo $row['date']; ?> </td>
            <td> <?php echo $row['aim']; ?></td>
            <td> <?php echo $row['title']; ?></td>
            <td> <?php echo $row['description']; ?></td>
            <td> <?php echo $row['url']; ?></td>
            <td>
                <form action="delete1.php" method="post">
                <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                <button type="delete" name="delete" class="btn btn-danger"> DELETE</button>
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