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
       <div class="col-sm-6">
         <h1 class="display-5 text-center pb-4">Decision Support System</h1>
         <img src="<?php echo base_url() ?>assets/images/login.svg" class="img-fluid">
       </div>
       <div class="col-sm-6">
        <div class="col-md-12">
            <?php if($this->session->flashdata('error')): ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('user_loggedout')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('user_loggedout'); ?>
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
         <h1 class="display-5 text-center">Login Panel</h1>
         <div class="card">
            <div class="card-body">
              <form action="<?php echo site_url('login/login_users') ?>" method="post">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                <div class="mb-3">
                  <label for="" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
       </div>
     </div>
   </div>
 </div>

 <!-- inclide footer -->
   <?php include "inc/footer.php" ?>
