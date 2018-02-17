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

    <h3><?php echo isset($update_data->stakeholder_id) ? 'Update' : 'Add'; ?> Stakeholder Profile</h3>
    <div class="col-md-6">
    <div class="content-box-large">
        <form action="<?php echo base_url(); ?>admin/stakeholder/profile" method="post" enctype="multipart/form-data" id="update_form">
            <fieldset>

                <div class="form-group">
                    <label>User</label>

                    <select name="user_id" id="user_id" class="form-control">
                        <option value="0">None</option>
                        <?php
                        $rows = $this->db->get('users');
                        foreach($rows->result() as $row)
                        {
                            ?>
                            <option value="<?php echo $row->user_id; ?>" <?php echo $row->user_id==@$update_data->user_id ? 'selected="selected"' : ''; ?> ><?php echo $row->initial; ?> <?php echo $row->fullname; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Group</label>

                    <select name="group_id" id="group_id" class="form-control">
                        <option value="0">None</option>
                        <?php
                        $rows = $this->db->get('groups');
                        foreach($rows->result() as $row)
                        {
                            ?>
                            <option value="<?php echo $row->group_id; ?>" <?php echo $row->group_id==@$update_data->group_id ? 'selected="selected"' : ''; ?> ><?php echo $row->group; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Department</label>

                    <select name="dept_id" id="dept_id" class="form-control">
                        <option value="0">None</option>
                        <?php
                        $rows = $this->db->get('departments');
                        foreach($rows->result() as $row)
                        {
                            ?>
                            <option value="<?php echo $row->dept_id; ?>" <?php echo $row->dept_id==@$update_data->dept_id ? 'selected="selected"' : ''; ?> ><?php echo $row->department; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Organization</label>

                    <select name="organization_id" id="organization_id" class="form-control">
                        <option value="0">None</option>
                        <?php
                        $rows = $this->db->get('organizations');
                        foreach($rows->result() as $row)
                        {
                            ?>
                            <option value="<?php echo $row->organization_id; ?>" <?php echo $row->organization_id==@$update_data->organization_id ? 'selected="selected"' : ''; ?> ><?php echo $row->organization; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Attitude</label>

                    <select name="attitude_nn" id="attitude_nn" class="form-control">
                        <option value="">None</option>
                        <?php $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'attitude_nn']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo @$update_data->attitude_nn==$row->key ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Communication Focus</label>

                    <select name="comm_focus" id="comm_focus" class="form-control">
                        <option value="">None</option>
                        <?php $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'comm_focus']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo @$update_data->comm_focus==$row->key ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Rx Influence</label>

                    <select name="rx_influence" id="rx_influence" class="form-control">
                        <option value="">None</option>
                        <?php $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'rx_influence']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo @$update_data->rx_influence==$row->key ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Influence</label>

                    <select name="influence" id="influence" class="form-control">
                        <option value="">None</option>
                        <?php $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'influence']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo @$update_data->influence==$row->key ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Priority</label>

                    <select name="priority" id="priority" class="form-control">
                        <option value="">None</option>
                        <?php $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'priority']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo @$update_data->priority==$row->key ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Planned Engagement</label>

                    <select name="planned_engagement[]" id="planned_engagement" multiple class="form-control">
                        <option value="">None</option>
                        <?php
                        $planned_engagement = (isset($update_data->planned_engagement) and $update_data->planned_engagement!='') ? explode(',',$update_data->planned_engagement) : [];
                        $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'planned_engagement']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo in_array($row->key,$planned_engagement) ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Ongoing Engagement</label>

                    <select name="ongoing_engagement[]" id="ongoing_engagement" multiple class="form-control">
                        <?php
                        $ongoing_engagement = (isset($update_data->ongoing_engagement) and $update_data->ongoing_engagement!='') ? explode(',',$update_data->ongoing_engagement) : [];
                        foreach ($ongoing_engagement as $oe){ ?>
                            <option value="<?php echo $oe; ?>" selected="selected" ><?php echo $oe; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Frequency</label>

                    <select name="frequency"  class="form-control">
                        <option value="">None</option>
                        <?php $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'frequency']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo @$update_data->frequency==$row->key ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>


                <div class="form-group">
                    <label>Geo Scope</label>

                    <select name="geo_scope" id="geo_scope" class="form-control">
                        <option value="">None</option>
                        <?php $this->db->order_by('sequence','ASC');
                        $query = $this->db->get_where('dropdowns',['dropdown'=>'geo_scope']);
                        foreach ($query->result() as $row){ ?>
                            <option value="<?php echo $row->key; ?>" <?php echo @$update_data->geo_scope==$row->key ? 'selected="selected"' : ''; ?> ><?php echo $row->value; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>KPI Objective</label>
                    <input name="kpi_objective" type="text" class="form-control" id="kpi_objective" placeholder="KPI Objective" value="<?php echo @$update_data->kpi_objective; ?>">
                </div>

                <div class="form-group">
                    <label>Job title</label>
                    <input name="job_title" type="text" class="form-control" id="job_title" placeholder="Job Title" value="<?php echo @$update_data->job_title; ?>">
                </div>

            </fieldset>
            <div>
                <input name="id" type="hidden" id="id" value="<?php echo $stakeholder_id; ?>">
                <input name="stakeholder_id" type="hidden" id="stakeholder_id" value="<?php echo $stakeholder_id; ?>">
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

    $('#planned_engagement').tokenize({
        //datas: "<?php echo base_url(); ?>admin/dept/search/",
        searchParam: 'keyword',
        displayDropdownOnFocus: true,
        placeholder: 'Start typing for adding multiple',
        //maxElements: 1,
        newElements: false
    });

    $('#ongoing_engagement').tokenize({
        searchParam: 'keyword',
        displayDropdownOnFocus: true,
        placeholder: 'Start typing for adding multiple',
        newElements: true
    });

});
</script>
<?php $this->load->view('admin/footer',$this->data); ?>