<?php $this->load->view('admin/header',$this->data); ?>

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

    <div class="main-content" >
        <div class="wrap-content container" id="container">
            <!-- start: DASHBOARD TITLE -->
            <section id="page-title" class="padding-top-15 padding-bottom-15">
                <div class="row">
                    <div class="col-sm-7">
                        <h1 class="mainTitle">Dashboard</h1>
                        <span class="mainDescription">Welcome </span>
                    </div>
                    <div class="col-sm-5">

                        <div class="container-fluid container-fullw">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="over-title margin-bottom-15"><span class="text-bold">Bootsrap Accordions</span></h5>
                                    <p>
                                        Extend the default collapse behavior to create an accordion with the panel component.
                                    </p>
                                    <div class="panel-group accordion" id="accordion">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        <i class="icon-arrow"></i> Collapsible Group Item #1
                                                    </a></h5>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        <i class="icon-arrow"></i> Collapsible Group Item #2
                                                    </a></h5>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        <i class="icon-arrow"></i> Collapsible Group Item #3
                                                    </a></h5>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- end: DASHBOARD TITLE -->
        </div>
    </div>
                    
<?php $this->load->view('admin/footer',$this->data); ?>