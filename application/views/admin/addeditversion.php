<?php $this->load->view('admin/header',$this->data); ?>

    <div class="main-content" >
        <div class="wrap-content container" id="container">

            <!-- start: STRIPED ROWS -->
            <div class="container-fluid" style="margin-top: 10px;" >
                <div class="row">


                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo validation_errors();?>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['msg_error'])){ ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo display_error(); ?>
                        </div>
                    <?php } ?>

                    <?php if(isset($_SESSION['msg_success'])){ ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo display_success_message(); ?>
                        </div>
                    <?php } ?>

                    <h3><?php echo isset($version->autoId) ? 'Update' : 'Add'; ?> Version</h3>

                    <form action="<?php echo base_url(); ?>admin/appversions/save" method="post" enctype="multipart/form-data" id="update_form">
                        <div class="col-md-6">
                            <div class="content-box-large">

                                <fieldset>
                                    <div class="form-group ">
                                        <label >Version Number *</label>

                                            <input type="text" name="version_number" required="" aria-required="true" class="form-control" value="<?php if(isset($version)) echo $version->version_number;?>"/>


                                    </div>
                                    <div class="form-group ">
                                        <label >Title *</label>

                                            <input type="text" name="file_name" required="" aria-required="true" class="form-control" value="<?php if(isset($version)) echo $version->file_name;?>"/>

                                    </div>
                                    <div class="form-group ">
                                        <label >File Link *</label>

                                            <input type="text" name="file_link" required="" aria-required="true" class="form-control" value="<?php if(isset($version)) echo $version->file_link;?>"/>

                                    </div>
                                    <div class="form-group ">
                                        <label >File Link 2 *</label>

                                            <input type="text" name="file_link2" required="" aria-required="true" class="form-control" value="<?php if(isset($version)) echo $version->file_link2;?>"/>

                                    </div>
                                    <div class="form-group ">
                                        <label >Date *</label>
                                            <input type="text" name="date_created" required="" aria-required="true" class="form-control datepicker" value="<?php if(isset($version)) { echo date('m/d/Y',strtotime($version->date_created)); } ?>"/>
                                    </div>

                                </fieldset>
                                <div>
                                    <input name="id" type="hidden" id="id" value="<?php echo isset($version->autoId) ? $version->autoId : 0; ?>">
                                    <button type="submit" class="btn btn-primary"><?php echo isset($version->autoId) ? 'Update' : 'Add'; ?></button>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end: STRIPED ROWS -->
            <p>&nbsp;</p>
        </div>
    </div>



<?php $this->load->view('admin/footer',$this->data); ?>