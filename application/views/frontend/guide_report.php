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
         <h1 class="display-5 pb-4">Courses available in all institutions</h1>
         <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. </p>
       </div>
       <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
              <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Course</th>
                <th>Institution</th>
                <th>Award Certification</th>
                <th>Career</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bachelor of Medicine</td>
                <td>University of Ghana</td>
                <td>Bachelor of Science Degree</td>
                <td>Medical Doctore</td>
            </tr>
            <tr>
                <td>Bachelor of Dental Surgery</td>
                <td>KNUST</td>
                <td>Bachelor of Science Degree</td>
                <td>Medical Doctore, Physician, Surgeon</td>
            </tr>
            <tr>
                <td>Doctor of Pharmacy</td>
                <td>University of Ghana</td>
                <td>Bachelor of Science Degree</td>
                <td>Medical Doctore, Physician,</td>
            </tr>
            <tr>
                <td>Bachelor of Science in Dietetics</td>
                <td>KNUST</td>
                <td>Bachelor of Science Degree</td>
                <td>Dietetian</td>
            </tr>

        </tbody>
    </table>
            </div>
          </div>
       </div>
     </div>
   </div>
 </div>

 <!-- inclide footer -->
   <?php include "inc/footer.php" ?>
