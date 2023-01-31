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
 <div class="py-5 my-5">
   <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <h1 class="display-5 pb-4">Career guidance forms</h1>
         <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. </p>
       </div>
       <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
              <form class="row g-3" role="search" action="<?php echo site_url('guidance/search_guide') ?>" method="get">
                 <div class="col-6">
                  <label for="" class="form-label">Field of interest</label>
                  <input type="text" class="form-control" name="field">
                </div>
                <div class="col-6">
                  <label for="" class="form-label">Subject of interest</label>
                  <input type="text" class="form-control" name="subject">
                </div>
               
                <div class="col-12">
                  <label for="" class="form-label">Check subjects with at least credit pass</label><br>
                  <input type="checkbox" class="form-check-input" value="English"> English
                  <input type="checkbox" class="form-check-input" value="Integrated Science"> Integrated Science
                  <input type="checkbox" class="form-check-input" value="Core Mathematics"> Core Mathematics
                  <input type="checkbox" class="form-check-input" value="Social Studies"> Social Studies
                  <input type="checkbox" class="form-check-input" value="Chemistry"> Chemistry
                  <input type="checkbox" class="form-check-input" value="Physics"> Physics
                  <input type="checkbox" class="form-check-input" value="Biology"> Biology
                  <input type="checkbox" class="form-check-input" value="Elective Mathematics"> Elective Mathematics
                  <input type="checkbox" class="form-check-input" value="Economics"> Economics
                  <input type="checkbox" class="form-check-input" value="Business Management"> Business Management
                  <input type="checkbox" class="form-check-input" value="Financial Accounting"> Financial Accounting
                  <input type="checkbox" class="form-check-input" value="Counting"> Counting
                  <input type="checkbox" class="form-check-input" value="Geography"> Geography
                  <input type="checkbox" class="form-check-input" value="History"> History
                  <input type="checkbox" class="form-check-input" value="Literature"> Literature
                  <input type="checkbox" class="form-check-input" value="Government"> Government
                </div>
                <div class="col-4">
                  <label for="">Total Aggregrade obtain</label>
                  <input type="text" class="form-control" name="aggregrade">
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </form>
            </div>
          </div>
       </div>
     </div>
   </div>
 </div>

 <!-- inclide footer -->
   <?php include "inc/footer.php" ?>
