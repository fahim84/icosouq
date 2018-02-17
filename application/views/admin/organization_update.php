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

        <h3><?php echo isset($update_data->organization_id) ? 'Update' : 'Add'; ?> Organization</h3>

        <div class="col-md-6">
            <div class="content-box-large">
        <form action="<?php echo base_url(); ?>admin/organization/update" method="post" enctype="multipart/form-data" id="update_form">
            <fieldset>
                <div class="form-group">
                    <label>Organization Name</label>
                    <input name="organization" type="text" required  class="form-control" id="organization" placeholder="Organization" value="<?php echo @$update_data->organization; ?>">
                </div>

                <div class="form-group">
                    <label>Groups</label>

                    <select name="groups[]" multiple="MULTIPLE" class="form-control" id="groups">
                        <?php
                        $selected_groups = [];
                        foreach ($update_data->groups as $group)
                        {
                            $selected_groups[$group->group_id] = $group->group;
                        }
                        $groups = $this->group_model->get();
                        foreach($groups->result() as $row)
                        {
                            ?>
                            <option value="<?php echo $row->group_id; ?>" <?php echo @array_key_exists($row->group_id,$selected_groups) ? 'selected="selected"' : ''; ?> ><?php echo $row->group; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Organization Code</label>
                    <input name="org_code" type="text" class="form-control" id="org_code" placeholder="Organization Code" value="<?php echo @$update_data->org_code; ?>">
                </div>

                <div class="form-group">
                    <label>Objective</label>
                    <textarea name="objective" rows="3" class="form-control" id="objective" placeholder="Objective"><?php echo @$update_data->objective; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Geo Scope</label>
                    <input name="geo_scope" type="text" class="form-control" id="geo_scope" placeholder="Geo Scope" value="<?php echo @$update_data->geo_scope; ?>">
                </div>

                <div class="form-group">
                    <label>Address 1</label>
                    <input name="address1" type="text" class="form-control" id="address1" placeholder="Address" value="<?php echo @$update_data->address1; ?>">
                </div>

                <div class="form-group">
                    <label>Telephone 1</label>
                    <input pattern="^\+?[1-9]\d{10,14}$" title="(+14151234567 or +923001234567)" type="text" class="form-control" name="telephone1" id="telephone1" placeholder="Telephone" value="<?php echo @$update_data->telephone1; ?>" />
                </div>

                <div class="form-group">
                    <label>Address 2</label>
                    <input name="address2" type="text" class="form-control" id="address2" placeholder="Address" value="<?php echo @$update_data->address2; ?>">
                </div>

                <div class="form-group">
                    <label>Telephone 2</label>
                    <input pattern="^\+?[1-9]\d{10,14}$" title="(+14151234567 or +923001234567)" type="text" class="form-control" name="telephone2" id="telephone2" placeholder="Telephone" value="<?php echo @$update_data->telephone2; ?>" />
                </div>

                <div class="form-group">
                    <label>City</label>
                    <input name="city" type="text" class="form-control" id="city" placeholder="City" value="<?php echo @$update_data->city; ?>">
                </div>

                <div class="form-group">
                    <label>Region</label>
                    <input name="region" type="text" class="form-control" id="region" placeholder="Region" value="<?php echo @$update_data->region; ?>">
                </div>

                <div class="form-group">
                    <label>Province</label>
                    <input name="province" type="text" class="form-control" id="province" placeholder="Province" value="<?php echo @$update_data->province; ?>">
                </div>

                <div class="form-group">
                    <label>Country</label>
                    <input name="country" type="text" class="form-control" id="country" placeholder="Country" value="<?php echo @$update_data->country; ?>">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="is_activated">
                        <option value="1" <?php echo @$update_data->is_activated == '1' ? 'selected="selected"' : ''; ?> >Active</option>
                        <option value="0" <?php echo @$update_data->is_activated == '0' ? 'selected="selected"' : ''; ?> >Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <?php
                    if(@$update_data->image != '')
                    {
                        $image = base_url().'uploads/organizations/'.$update_data->image;
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
                <input name="id" type="hidden" id="id" value="<?php echo isset($update_data->organization_id) ? $update_data->organization_id : 0; ?>">
                <button type="submit" class="btn btn-primary"><?php echo isset($update_data->organization_id) ? 'Update' : 'Add'; ?></button>
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

    $('#groups').tokenize({
        datas: "<?php echo base_url(); ?>admin/group/search/",
        searchParam: 'keyword',
        displayDropdownOnFocus: true,
        placeholder: 'Start typing for adding groups'
    });

    $(document).on('change keydown', '#telephone1', function(e){
        telephone1 = $('#telephone1').val();

        // Allow: backspace, delete, tab, escape, enter and +
        console.log(e.keyCode);
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 107]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $(document).on('change keydown', '#telephone2', function(e){
        telephone2 = $('#telephone2').val();

        // Allow: backspace, delete, tab, escape, enter and +
        console.log(e.keyCode);
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 107]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
</script>
<?php $this->load->view('admin/footer',$this->data); ?>