

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"><?php echo $page_title; ?></h3>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

            <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <div class="card">
                <div class="card-body">
                    <a href="<?php echo base_url('admin/uni') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add New uni</a> 
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Institution</th>
                                    <th>Location</th>
                                    <th>Access</th>
                                    <th>Courses</th>
                                    <th>Action</th>
                                </tr>
                            </thead>                           
                            <tbody>
                            <?php foreach ($unis as $uni): ?>
                                
                                <tr>

                                    <td><?php echo $uni['rank']; ?></td>
                                    <td><?php echo $uni['institution']; ?></td>
                                    <td><?php echo $uni['location']; ?></td>
                                    <td><?php echo $uni['access']; ?></td>
                                    <td><?php echo $uni['courses']; ?></td>
                                    <td class="text-nowrap">
                                        <a href="<?php echo base_url('admin/uni/update/'.$uni['id']) ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>

                                        <a href="<?php echo base_url('admin/uni/delete/'.$uni['id']) ?>" onClick="return doconfirm();" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>
                                        
                                    </td>
                                </tr>

                            <?php endforeach ?>

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>



<?php foreach ($unis as $uni): ?>
 
<div class="modal fade" id="confirm_delete_<?php echo $uni['id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
            <div class="form-body">
                
                Are you sure want to delete? <br> <hr>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="<?php echo base_url('admin/uni/delete/'.$uni['id']) ?>" class="btn btn-danger"> Delete</a>
                
            </div>

      </div>


    </div>
  </div>
</div>


<?php endforeach ?>