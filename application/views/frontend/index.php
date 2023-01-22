<!-- include head -->
<?php include "inc/head.php" ?>

    <!-- starting navbar -->
    <?php include "inc/nav.php" ?>
 <!-- stating carouosal -->
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="<?php echo base_url() ?>assets/images/slide1.jpeg" class="d-block img-fluid w-100 h-400" style="height: 60vh">
     </div>
     <div class="carousel-item">
       <img src="<?php echo base_url() ?>assets/images/slide2.jpeg" class="d-block img-fluid w-100" style="height: 60vh">
     </div>
     <div class="carousel-item">
       <img src="<?php echo base_url() ?>assets/images/slide3.jpeg" class="d-block img-fluid w-100" style="height: 60vh">
     </div>
   </div>
 </div>

 <!-- starting introduction -->
 <div class="my-5">
   <div class="container">
     <div class="row">
       <div class="col-sm-6">
         <img src="<?php echo base_url() ?>assets/images/slide1.png" class="img-fluid">
       </div>
       <div class="col-sm-6">
         <h5 class="display-6">Decision Support System</h5>
         <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
           Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </div>
     </div>
   </div>
 </div>

 <!-- starting introduction -->
 <div class="my-5">
   <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <h5 class="display-6 text-center pb-2">Tertiary Education</h5>
       </div>
     </div>
     <div class="row">
      <div class="col-sm-6 pb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">University Education</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?php echo site_url() ?>uni" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Colleges of Education</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?php echo site_url() ?>college" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Colleges of Health Science</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Technical and Vocational Education and Training</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>

      <div class="row">
       <div class="col-sm-12">
         <h5 class="display-6 text-center pb-2">Courses and Profession</h5>
       </div>
     </div>


    </div>
   </div>
 </div>
 <!-- inclide footer -->
   <?php include "inc/footer.php" ?>
