<?php $this->load->view('admin/header',$this->data); ?>

<style>
    .label {

        display: inline-block;
        margin: 1px;

    }
</style>

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

        <h3><?php echo isset($update_data->template_id) ? 'Update' : 'Add'; ?> Template</h3>

        <div class="col-md-6">
            <div class="content-box-large">
        <form action="<?php echo base_url(); ?>admin/template/update" method="post" enctype="multipart/form-data" id="update_form">
            <fieldset>
                <div class="form-group">
                    <label>Tags</label>
                    <div><?php $tags = explode(',',@$update_data->tags); foreach ($tags as $tag) echo '<span class="label label-inverse">'.$tag.'</span>'; ?></div>
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" required  class="form-control" id="title" placeholder="Title" value="<?php echo @$update_data->title; ?>">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" rows="3" class="form-control" id="message" placeholder="Message"><?php echo @$update_data->message; ?></textarea>
                </div>

                <div class="form-group">
                    <label>About this template</label>
                    <textarea name="about" rows="3" class="form-control" id="about" placeholder="About"><?php echo @$update_data->about; ?></textarea>
                </div>

            </fieldset>
            <div>
                <input name="id" type="hidden" id="id" value="<?php echo isset($update_data->template_id) ? $update_data->template_id : 0; ?>">
                <button type="submit" class="btn btn-primary"><?php echo isset($update_data->template_id) ? 'Update' : 'Add'; ?></button>
            </div>
        </form>
            </div>
        </div>


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