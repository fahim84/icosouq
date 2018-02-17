<?php $this->load->view('admin/header',$this->data); ?>

<script language="JavaScript">
    function add() {
        window.location.href = "<?php echo base_url(); ?>admin/appversions/addedit/0"
    }

    function fEdit(id) {
        window.location.href = "<?php echo base_url(); ?>admin/appversions/addedit/" + id
    }

    function fDelete(id) {
        if(confirm("Are you sure?")) {
            window.location.href = "<?php echo base_url(); ?>admin/appversions/delete/" + id
        }
    }

    function fActive(id,active) {
        window.location.href = "<?php echo base_url(); ?>admin/appversions/toggleactive/" + id + "/" + active;
    }

</script>

<div class="main-content" >
    <div class="wrap-content container" id="container">

        <!-- start: STRIPED ROWS -->
        <div class="container-fluid container-fullw bg-white" style="margin-top: 10px;" >
            <div class="row">
                <div class="col-md-12">

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

                    <form name="search_form" id="search_form" class="form-inline" role="form">
                        <div class="col-md-3 row">
                            <h3 class="pull-left">Versions &nbsp;</h3>
                            <h4><div class="label label-warning" align="center"><?php //echo $total_rows; ?></div></h4>
                        </div>
                        <div class="row col-md-6">
                            <!--<div class="input-group">
                                <input class="form-control" autocomplete="off" type="text" id="keyword" name="keyword" value="<?php /*echo $keyword; */?>" placeholder="Search"   />
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </span>
                            </div>-->
                        </div>
                        <input type="hidden" name="order_by" id="order_by" value="<?php echo $order_by; ?>" >
                        <input type="hidden" name="direction" id="direction" value="<?php echo $direction; ?>" >
                    </form>
                    <!--<a href="<?php /*echo base_url(); */?>admin/template/update" class="btn btn-wide btn-warning pull-right"><i class="glyphicon glyphicon-plus-sign"></i> Add</a>-->
                    <a href="#" onclick="add()" class="btn btn-wide btn-warning pull-right" >
                        <i class="glyphicon glyphicon-plus-sign"></i> Add Version
                    </a>

                    <script>
                        $('#order_by, #direction').change(function(e) {
                            $('#search_form').submit();
                        });
                    </script>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Version</th>
                                <th>File Link 1</th>
                                <th>File Link 2</th>
                                <th>Date</th>
                                <th>Devices</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $a = 0; foreach($contentdata as $version) { ?>
                                <tr>
                                    <?php ++$a;?>
                                    <td><?php echo $version->version_number;?></td>
                                    <td><?php echo $version->file_link;?></td>
                                    <td><?php echo $version->file_link2;?></td>
                                    <td><?php echo date('d/m/Y',strtotime($version->date_created));?></td>
                                    <td>
                                        <?php if($version->status == 0){echo $version->total_users; }else{ echo $version->device_count; ?><?php } ?>
                                    </td>
                                    <td>
                                        <?php if($version->status == 1) { ?>
                                            <button class="btn btn-warning waves-effect waves-light btn-sm" onclick="fActive('<?php echo $version->autoId;?>',1)"><i class="fa fa-star"></i>&nbsp; Active &nbsp;</button>
                                        <?php } else { ?>
                                            <button class="btn waves-effect waves-light btn-sm" onclick="fActive('<?php echo $version->autoId;?>',0)"><i class="fa fa-star-o"></i> InActive</button>
                                        <?php } ?>
                                    </td>


                                        <td style="text-align: right;" width="150">
                                            <button class="btn btn-primary waves-effect waves-light btn-sm " onclick="fEdit('<?php echo $version->autoId; ?>')"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-danger waves-effect waves-light btn-sm" onclick="fDelete('<?php echo $version->autoId; ?>')"><i class="fa fa-close"></i> Delete</button>
                                        </td>

                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>




                </div>
            </div>
        </div>
        <!-- end: STRIPED ROWS -->

    </div>
</div>

<?php $this->load->view('admin/footer',$this->data); ?>