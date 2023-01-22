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
         <h5 class="display-6 text-center pb-4"><?php echo $title ?></h5>
         <img src="<?php echo base_url() ?>assets/images/register.svg" class="img-fluid">
         <p class="lead pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </div>
       <div class="col-sm-6">
         <div class="col-md-12">
            <?php if($this->session->flashdata('error')): ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('success')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
            <?php if(validation_errors()): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <?php echo validation_errors(); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
          </div>
         <h5 class="display-6 text-center">Create your account</h5>
         <div class="card">
            <div class="card-body">
              <form action="<?php echo site_url('signup/newuser') ?>" method="post">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <div class="mb-3">
                  <label for="" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="fullname">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">SHS attended</label>
                  <input type="text" class="form-control" name="shs">
                </div>
                <div class="mb-3">
                  <select class="form-select" name="gender">
                    <option value="">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="conpassword">
                </div>
                <button type="submit" class="btn btn-primary">Sign up</button>
              </form>
              <p>Already have an account? <a href="<?php echo site_url() ?>login">Login</a></p>
            </div>
          </div>
       </div>
     </div>
   </div>
 </div>

 <!-- inclide footer -->
   <?php include "inc/footer.php" ?>
