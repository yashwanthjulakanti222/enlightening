
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Enlightening Lives</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v3.1.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Our Memories</h3>
        </header>

 <div class="row" data-aos="fade-up" data-aos-delay="100">
 <?php
      include 'db.php';
      $sql="select distinct category from gallery";
      $res=mysqli_query($conn,$sql);
      ?>
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
      <?php while($row=mysqli_fetch_assoc($res)):
      ?>
            <li data-filter=".filter-<?php echo $row['category'];?>"><?php echo $row['category'];?></li>
         
          <?php endwhile;?>
          </ul>
        </div>
      
      </div>
      <?php
      include 'db.php';
      $sql1="select *from gallery order by id desc";
      $res=mysqli_query($conn,$sql1);
      ?>
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <?php while($row1=mysqli_fetch_assoc($res)):
      ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $row1['category'];?>">
          <div class="portfolio-wrap">
            <figure>
            <?php echo '<img  class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $row1['image'] ).'"/>'; ?>
            </figure>
            <div class="portfolio-info">
              <h4><a href="#"><?php echo $row1['title'];?></a></h4>
              <p><?php echo $row1['category'];?></p>
            </div>
          </div>
        
        </div>
        <?php endwhile;?>

      </div>

      </div>
    </section><!-- End Portfolio Section -->

     <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>
  </html>