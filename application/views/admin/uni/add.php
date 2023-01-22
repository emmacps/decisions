

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
                    <h4 class="m-b-0 text-white"> Add New uni <a href="<?php echo base_url('admin/uni/all_uni_list') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All Universities </a></h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/uni/add') ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Rank <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="rank" class="form-control" required data-validation-required-message="Rank is required">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Institution <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="institution" class="form-control" required data-validation-required-message="Institution is required">
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
                                            <input type="text" name="location" class="form-control" required data-validation-required-message="location is required">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Access </label>
                                        <div class="col-md-9 controls">
                                            <div class="form-group has-success">
                                                <select class="form-control custom-select" name="access" aria-invalid="false">
                                                        <option value="0">Select</option>                         
                                                        <option value="Public">Public</option>  
                                                        <option value="Private">Private</option>                                         
                                                </select>
                                            </div>
                                        </div>
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