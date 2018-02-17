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

        <h3><?php echo isset($update_data->group_id) ? 'Update' : 'Add'; ?> Group</h3>

        <div class="col-md-6">
            <div class="content-box-large">
        <form action="<?php echo base_url(); ?>admin/group/update" method="post" enctype="multipart/form-data" id="update_form">
            <fieldset>
                <div class="form-group">
                    <label>Group Name</label>
                    <input name="group" type="text" required  class="form-control" id="group" placeholder="Group" value="<?php echo @$update_data->group; ?>">
                </div>
                <div class="form-group">
                    <label>Short Code</label>
                    <input name="short_code" type="text" class="form-control" id="short_code" placeholder="Short Code" value="<?php echo @$update_data->short_code; ?>" maxlength="2">
                </div>
                <div class="form-group">
                    <label>Department</label>
                    <select name="dept_id" class="form-control">
                        <?php $query = $this->db->get('departments');
                        foreach ($query->result() as $row){
                            ?>.
                            <option value="<?php echo $row->dept_id; ?>" <?php echo @$update_data->dept_id == $row->dept_id ? 'selected' : ''; ?> ><?php echo $row->department; ?></option>
                        <?php } ?>
                    </select>
                </div>

            </fieldset>
            <div>
                <input name="id" type="hidden" id="id" value="<?php echo isset($update_data->group_id) ? $update_data->group_id : 0; ?>">
                <button type="submit" class="btn btn-primary"><?php echo isset($update_data->group_id) ? 'Update' : 'Add'; ?></button>
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