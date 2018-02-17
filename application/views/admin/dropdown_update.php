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

                    <h3><?php echo isset($update_data->id) ? 'Update' : 'Add'; ?> Dropdown</h3>

                    <form action="<?php echo base_url(); ?>admin/dropdown/update" method="post" enctype="multipart/form-data" id="update_form">
                        <div class="col-md-6">
                            <div class="content-box-large">

                                <fieldset>
                                    <div class="form-group">
                                        <label>Dropdown Name</label>
                                        <input name="dropdown" type="text" required  class="form-control" placeholder="Dropdown" value="<?php echo @$update_data->dropdown; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Key</label>
                                        <input name="key" type="text" required class="form-control" placeholder="Key" value="<?php echo @$update_data->key; ?>">
                                    </div>

                                    <div>
                                        <label>Value</label>
                                        <input name="value" type="text" required class="form-control" placeholder="Value" value="<?php echo @$update_data->value; ?>">
                                    </div>

                                </fieldset>
                                <div>
                                    <input name="id" type="hidden" id="id" value="<?php echo isset($update_data->id) ? $update_data->id : 0; ?>">
                                    <button type="submit" class="btn btn-primary"><?php echo isset($update_data->id) ? 'Update' : 'Add'; ?></button>
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




<script>
$(document).ready(function(){
	
});
</script>
<?php $this->load->view('admin/footer',$this->data); ?>