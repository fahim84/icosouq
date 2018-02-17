<?php $this->load->view('admin/header',$this->data); ?>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Tokenize-2.5.2/jquery.tokenize.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Tokenize-2.5.2/jquery.tokenize.css" />

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

                    <h3><?php echo isset($update_data->dept_id) ? 'Update' : 'Add'; ?> Department</h3>

                    <form action="<?php echo base_url(); ?>admin/dept/update" method="post" enctype="multipart/form-data" id="update_form">
                        <div class="col-md-6">
                            <div class="content-box-large">

                                <fieldset>
                                    <div class="form-group">
                                        <label>Department Name</label>
                                        <input name="department" type="text" required  class="form-control" id="department" placeholder="Department" value="<?php echo @$update_data->department; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Short Code</label>
                                        <input name="short_code" type="text" class="form-control" id="short_code" placeholder="Short Code" value="<?php echo @$update_data->short_code; ?>" maxlength="2">
                                    </div>
                                    <div class="form-group">
                                        <label>Dept Code</label>
                                        <input name="dept_code" type="text" class="form-control" id="dept_code" placeholder="Dept Code" value="<?php echo @$update_data->dept_code; ?>">
                                    </div>

                                    <div>
                                        <h4>Color Picker</h4>
                                        <p>
                                        <input type="color" class="form-control" name="color" value="<?php echo @$update_data->color; ?>">
                                        </p>
                                    </div>

                                    <div class="form-group">
                                        <label>Dept Head</label>
                                        <select name="user_id" class="form-control">
                                            <?php $query = $this->db->get_where('users',['manager_id'=> 0]);
                                            foreach ($query->result() as $row){?>
                                            <option value="<?php echo $row->user_id; ?>" <?php echo @$update_data->user_id==$row->user_id ? 'selected':''; ?> ><?php echo $row->fullname; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label>
                                        <?php
                                        if(@$update_data->image != '')
                                        {
                                            $image = base_url().'uploads/departments/'.$update_data->image;
                                            $image = base_url()."thumb.php?src=".$image."&w=100&h=100";
                                            $old_file_html = "<label title=\"Delete $update_data->image\"><input name=\"delete_old_file\" type=\"checkbox\" id=\"delete_old_file\" value=\"1\" /> Delete</label><input name=\"oldfile\" type=\"hidden\" value=\"$update_data->image\" /><br>";
                                            ?>
                                            <br>
                                            <img src="<?php echo $image; ?>" >
                                            <?php echo $old_file_html; ?>
                                            <?php
                                        }
                                        ?>
                                        <div>


                                            <input name="image" type="file" id="image" accept="image/*">

                                        </div>
                                    </div>

                                </fieldset>
                                <div>
                                    <input name="id" type="hidden" id="id" value="<?php echo isset($update_data->dept_id) ? $update_data->dept_id : 0; ?>">
                                    <button type="submit" class="btn btn-primary"><?php echo isset($update_data->dept_id) ? 'Update' : 'Add'; ?></button>
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