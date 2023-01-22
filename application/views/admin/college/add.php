

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $page_title ?></h3>
        </div>      
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>
            
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Add New College <a href="<?php echo base_url('admin/college/all_college_list') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All Colleges </a></h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/college/add') ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Name <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="name" class="form-control" required data-validation-required-message="Rank is required">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Location <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="location" class="form-control" required data-validation-required-message="Institution is required">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                             <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Select Courses <span class="text-danger">*</span></label>
                                        <select class="selectpicker col-md-9 controls" name="cus[]" multiple>
                                            <option>Select Subject</option>
                                               <option value="B. Ed. Mathematics/Science">B. Ed. Mathematics/Science</option>
                                                <option value="B. Ed. Early Childhood Development">B. Ed. Early Childhood Development</option>
                                                <option value="B. Ed. Technical/Vocational">B. Ed. Technical/Vocational</option>
                                                <option value="B. Ed. French">B. Ed. French</option>
                                                <option value="B. Ed. Primary Education">B. Ed. Primary Education</option>
                                                <option value="B. Ed. Agriculture Science">B. Ed. Agriculture Science</option></option>
                                                <option value="B. Ed. English &amp; Arabic">B. Ed. English &amp; Arabic</option>
                                                <option value="B. Ed. English &amp; Ghanaian Language">B. Ed. English &amp; Ghanaian Language</option>
                                                <option value="B. Ed. French &amp; English">B. Ed. French &amp; English</option>
                                                <option value="B. Ed. French &amp; Ghanaian Language">B. Ed. French &amp; Ghanaian Language</option>
                                                <option value="B. Ed. Geography &amp; History">B. Ed. Geography &amp; History</option>
                                                <option value="B. Ed. Home Economics">B. Ed. Home Economics</option>
                                                <option value="B. Ed. ICT &amp; Science">B. Ed. ICT &amp; Science</option>
                                                <option value="B. Ed. Physical Education &amp; Science">B. Ed. Physical Education &amp; Science</option>
                                                <option value="B. Ed. RME &amp; History">B. Ed. RME &amp; History</option>
                                                <option value="B. Ed. RME &amp; Music">B. Ed. RME &amp; Music</option>
                                                <option value="B. Ed. Visual Arts">B. Ed. Visual Arts</option>
                                                <option value="B. Ed. ICT &amp; Mathematics">B. Ed. ICT &amp; Mathematics</option>                                                             
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div> 
                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                          
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Add University</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Page Content -->

</div>