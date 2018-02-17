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

        <h3><?php echo isset($update_data->stakeholder_id) ? 'Update' : 'Add'; ?> Stakeholder</h3>
        <div class="col-md-6">
            <div class="content-box-large">

                <form action="<?php echo base_url(); ?>admin/stakeholder/update" method="post" enctype="multipart/form-data" id="update_form">
                    <fieldset>
                        <div class="form-group">
                            <label>First Name</label>
                            <input name="firstname" type="text" required  class="form-control" id="firstname" placeholder="First Name" value="<?php echo @$update_data->firstname; ?>">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name" value="<?php echo @$update_data->lastname; ?>">
                        </div>

                        <div class="form-group">
                            <label>Stakeholder Code</label>
                            <input name="stakeholder_code" type="text" class="form-control" id="stakeholder_code" placeholder="Stakeholder Code" value="<?php echo @$update_data->stakeholder_code; ?>">
                        </div>

                        <div class="form-group">
                            <label>IOselas ID</label>
                            <input name="ioselas_id" type="text" class="form-control" id="ioselas_id" placeholder="IOselas ID" value="<?php echo @$update_data->ioselas_id; ?>">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" style="text-transform:none;" value="<?php echo @$update_data->email; ?>">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control" id="address" placeholder="Address" value="<?php echo @$update_data->address; ?>">
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
                            <div class="col-md-10">
                                <label class=" radio-inline"><input type="radio" name="gender" id="male" value="male" <?php echo @$update_data->gender == 'male' ? 'checked' : ''; ?> >Male</label>
                                <label class=" radio-inline"><input type="radio" name="gender" id="female" value="female" <?php echo @$update_data->gender == 'female' ? 'checked' : ''; ?> >Female</label>
                            </div>
                        </div>
                        <div class="row"><br><br></div>

                        <div class="form-group">
                            <label>Date of birth</label>
                            <input name="dob" type="text" class="form-control datepicker" id="dob" placeholder="Date of birth DD-MM-YYYY" style="cursor:pointer;" readonly value="<?php echo @$update_data->dob; ?>">
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input pattern="^\+?[1-9]\d{10,14}$" title="(+14151234567 or +923001234567)" type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" value="<?php echo @$update_data->mobile; ?>" />
                        </div>

                        <div class="form-group">
                            <label>Telephone</label>
                            <input pattern="^\+?[1-9]\d{10,14}$" title="(+14151234567 or +923001234567)" type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone" value="<?php echo @$update_data->telephone; ?>" />
                        </div>

                        <div class="form-group">
                            <label>Extension</label>
                            <input name="extension" type="text" class="form-control" id="extension" placeholder="Extension" value="<?php echo @$update_data->extension; ?>">
                        </div>

                        <div class="form-group">
                            <label>About</label>
                            <textarea name="about" rows="3" class="form-control" id="about" placeholder="About"><?php echo @$update_data->about; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <?php
                            if(@$update_data->image != '')
                            {
                                $image = base_url().'uploads/stakeholders/'.$update_data->image;
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

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="is_activated">
                                <option value="1" <?php echo @$update_data->is_activated == '1' ? 'selected="selected"' : ''; ?> >Active</option>
                                <option value="0" <?php echo @$update_data->is_activated == '0' ? 'selected="selected"' : ''; ?> >Inactive</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Direct Ref Individual</label>
                            <select class="form-control" name="dri_user_id">
                                <option value="0" >None</option>
                                <?php $query = $this->db->get_where('users',['is_activated'=>1]);
                                foreach ($query->result() as $row){ ?>
                                <option value="<?php echo $row->user_id; ?>" <?php echo @$update_data->dri_user_id == $row->user_id ? 'selected="selected"' : ''; ?> ><?php echo $row->initial.' '.$row->fullname; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </fieldset>
                    <div>
                        <input name="id" type="hidden" id="id" value="<?php echo isset($update_data->stakeholder_id) ? $update_data->stakeholder_id : 0; ?>">
                        <button type="submit" class="btn btn-primary"><?php echo isset($update_data->stakeholder_id) ? 'Update' : 'Add'; ?></button>
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

    $('.datepicker').datepicker({
        dateFormat: 'dd-mm-yy',

        changeYear: true,
        changeMonth: true
    });

    $('#groups').tokenize({
        datas: "<?php echo base_url(); ?>admin/group/search/",
        searchParam: 'keyword',
        displayDropdownOnFocus: true,
        placeholder: 'Start typing for adding groups'
    });

    $(document).on('change keydown', '#mobile', function(e){
        mobile = $('#mobile').val();

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

    $(document).on('change keydown', '#telephone', function(e){
        telephone = $('#telephone').val();

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