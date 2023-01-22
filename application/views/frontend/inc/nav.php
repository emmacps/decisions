<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2">
<div class="container">
 <a class="navbar-brand" href="#">Navbar</a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav ms-auto">
    <?php if($this->session->userdata('logged_in') == FALSE): ?>
    <li class="nav-item">
       <a class="nav-link active" href="<?php echo site_url() ?>login">Login</a>
     </li>
   <?php endif; ?>
    <?php if($this->session->userdata('logged_in')): ?>
     <li class="nav-item">
       <a class="nav-link active" aria-current="page" href="<?php echo site_url() ?>home">Home</a>
     </li>
     
     <li class="nav-item">
       <a class="nav-link active" href="<?php echo site_url() ?>course">Courses</a>
     </li>
     <li class="nav-item">
       <a class="nav-link active" href="<?php echo site_url() ?>guidance">Career Guidance</a>
     </li>
     <li class="nav-item">
       <a class="nav-link active" href="<?php echo site_url() ?>login">Feedback</a>
     </li>
     <li class="nav-item">
       <a class="nav-link active btn btn-info" href="<?php echo site_url(); ?>login/logout">logout</a>
     </li>
   <?php endif; ?>
   </ul>
 </div>
</div>
</nav>
