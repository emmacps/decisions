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
              <form class="row g-3">
                <div class="col-6">
                  <label for="" class="form-label">Subject of interest</label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-6">
                  <label for="" class="form-label">Field of interest</label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-12">
                  <label for="" class="form-label">Check subjects with at least credit pass</label><br>
                  <input type="checkbox" class="form-check-input" value=""> English
                  <input type="checkbox" class="form-check-input" value=""> Integrated Science
                  <input type="checkbox" class="form-check-input" value=""> Core Mathematics
                  <input type="checkbox" class="form-check-input" value=""> Social Studies
                  <input type="checkbox" class="form-check-input" value=""> Chemistry
                  <input type="checkbox" class="form-check-input" value=""> Physics
                  <input type="checkbox" class="form-check-input" value=""> Biology
                  <input type="checkbox" class="form-check-input" value=""> Elective Mathematics
                  <input type="checkbox" class="form-check-input" value=""> Economics
                  <input type="checkbox" class="form-check-input" value=""> Business Management
                  <input type="checkbox" class="form-check-input" value=""> Financial Accounting
                  <input type="checkbox" class="form-check-input" value=""> Counting
                  <input type="checkbox" class="form-check-input" value=""> Geography
                  <input type="checkbox" class="form-check-input" value=""> History
                  <input type="checkbox" class="form-check-input" value=""> Literature
                  <input type="checkbox" class="form-check-input" value=""> Government
                </div>
                <div class="col-4">
                  <label for="">Total Aggregrade obtain</label>
                  <input type="text" class="form-control">
                </div>
                <div class="row">
                  <div class="col-4">
                    <label for="inputState" class="form-label">State</label>
                    <select class="form-select">
                      <option>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
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
