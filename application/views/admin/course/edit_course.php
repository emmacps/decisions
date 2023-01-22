

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">course</h3>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Edit course <a href="<?php echo base_url('admin/course/all_course_list') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All courses </a></h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/course/update/'.$course->id) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Select University<span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                           <select class="col-md-9 controls select2" name="uni_cus">                   

                                                <?php foreach ($unis as $uni): ?>   
                                                <option value="<?php echo $uni['institution']; ?>"><?php echo $uni['institution']; ?></option>
                                                <?php endforeach ?>                           
                                            
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Course <span class="text-danger"></span></label>
                                       <div class="col-md-9 controls">
                                            <input type="text" value="<?php echo $course->title; ?>" name="title" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-6">Entry Requirement: Select credit pass in Four Elective Subjects <span class="text-danger">*</span></label>
                                        <select class="selectpicker col-md-6 controls" name="subject[]" multiple>
                                            <option>Select Subject</option>
                                                <option value="Physics">Physics</option>
                                                <option value="Chemistry">Chemistry</option>
                                                <option value="Elective Maths">Elective Maths</option>
                                                <option value="Biology">Biology</option>
                                                <option value="Literature In English">Literature In English</option>
                                                <option value="French">French</option>
                                                <option value="Economics">Economics</option>
                                                <option value="Geography">Geography</option>
                                                <option value="History">History</option>
                                                <option value="Accounting">Accounting</option>
                                                <option value="Business Management">Business Management</option>
                                                <option value="Principle Of Costing Or Elective Maths">Principle Of Costing Or Elective Maths</option>
                                                <option value="General Knowledge In Arts">General Knowledge In Arts</option>
                                                <option value="Textile">Textile</option>
                                                <option value="Graphic Design">Graphic Design</option>
                                                <option value="Literature In English">Literature In English</option>
                                                <option value="Basketry">Basketry</option>
                                                <option value="Leather Work">Leather Work</option>
                                                <option value="Picture Making">Picture Making</option>
                                                <option value="Ceramics And Sculpture">Ceramics And Sculpture</option>
                                                <option value="Management In Living">Management In Living</option>
                                                <option value="Food And Nutrition">Food And Nutrition</option>
                                                <option value="General Knowledge In Arts">General Knowledge In Arts</option>
                                                <option value="Textile">Textile</option>
                                                <option value="Applied Electrical">Applied Electrical</option>
                                                <option value="Auto Mechanic">Auto Mechanic</option>
                                                <option value="Building Construction Engineering">Building Construction Engineering</option>
                                                <option value="Carpentry And Joinery">Carpentry And Joinery</option>
                                                <option value="">Catering</option>
                                                <option value="">Fashion Design</option>
                                                <option value="">General Textile</option>
                                                <option value="">Mechanical Engineering Craft Practices</option>
                                                <option value="">Metal Work</option>
                                                <option value="">Photography</option>
                                                <option value="">Plumbing Craft</option>
                                                <option value="">Printing Craft</option>
                                                <option value="">Welding And Fabrication</option>
                                                <option value="">Wood Work</option>                                                              
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
                                            <button type="submit" class="btn btn-success">Update</button>
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