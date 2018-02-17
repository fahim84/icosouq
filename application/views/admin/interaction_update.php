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

        <h3><?php echo isset($update_data->interaction_id) ? 'Update' : 'Add'; ?> Interaction</h3>

        <div class="col-md-6">
            <div class="content-box-large">
        <form action="<?php echo base_url(); ?>admin/interaction/update" method="post" enctype="multipart/form-data" id="update_form">
            <fieldset>
                <div class="form-group">
                    <label>Discussion</label>
                    <textarea name="discussion" class="form-control"><?php echo @$update_data->discussion; ?></textarea>
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

                <div class="form-group">
                    <label>Mode</label>

                    <select name="mode" id="mode" class="form-control">
                        <?php $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'mode']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo @$update_data->mode==$row->key ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Referrals</label>

                    <select name="referrals[]" multiple="MULTIPLE" class="form-control" id="referrals">
                        <?php
                        $selected_values = [];
                        foreach ($update_data->referrals as $val_row)
                        {
                            ?>
                            <option value="<?php echo $val_row->user_id; ?>" selected="selected" ><?php echo $val_row->fullname; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stakeholders</label>

                    <select name="stakeholders[]" multiple="MULTIPLE" class="form-control" id="stakeholders">
                        <?php
                        $selected_values = [];
                        foreach ($update_data->stakeholders as $val_row)
                        {
                            ?>
                            <option value="<?php echo $val_row->stakeholder_id; ?>" selected="selected" ><?php echo $val_row->fullname; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Users</label>

                    <select name="users[]" multiple="MULTIPLE" class="form-control" id="users">
                        <?php
                        $selected_values = [];
                        foreach ($update_data->users as $val_row)
                        {
                            ?>
                            <option value="<?php echo $val_row->user_id; ?>" selected="selected" ><?php echo $val_row->fullname; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Assets</label>
                    <?php if (@$update_data){?>
                    <table class="table">
                        <?php

                        foreach ($update_data->assets as $val_row)
                        {
                            ?>
                        <tr>
                            <td><?php echo $val_row->asset_id; ?></td>
                            <td><div title="<?php echo $val_row->asset; ?>"></div><?php echo $val_row->file_name; ?></td>
                            <td><?php echo date("jS M, Y ",strtotime($val_row->date_created)); ?></td>
                            <td><a href="#_" title="Delete" class="btn btn-transparent btn-xs tooltips" id="<?php echo $val_row->asset_id; ?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php } ?>
                    <div>

                        <input class="fileinput" name="assets[]" type="file" multiple >

                    </div>
                </div>


            </fieldset>
            <div>
                <input name="id" type="hidden" id="id" value="<?php echo isset($update_data->interaction_id) ? $update_data->interaction_id : 0; ?>">
                <button type="submit" class="btn btn-primary"><?php echo isset($update_data->interaction_id) ? 'Update' : 'Add'; ?></button>
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

    $('#referrals').tokenize({
        datas: "<?php echo base_url(); ?>admin/user/search_users/",
        searchParam: 'keyword',
        displayDropdownOnFocus: true,
        placeholder: 'Start typing for adding values'
    });

    $('#stakeholders').tokenize({
        datas: "<?php echo base_url(); ?>admin/stakeholder/search/",
        searchParam: 'keyword',
        displayDropdownOnFocus: true,
        placeholder: 'Start typing for adding values'
    });

    $('#users').tokenize({
        datas: "<?php echo base_url(); ?>admin/user/search_users/",
        searchParam: 'keyword',
        displayDropdownOnFocus: true,
        placeholder: 'Start typing for adding values'
    });


    $('.delete_button').click(function(e) {
        $.post( "<?php echo base_url(); ?>admin/interaction/delete_asset", { delete_id: this.id } );
        $(this).closest('tr').remove();
    });

});
</script>
<?php $this->load->view('admin/footer',$this->data); ?>