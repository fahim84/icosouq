<?php $this->load->view('header',$this->data); ?>


    <div class="row">
        <table class="main-ico-table titles-table">
            <tr>
                <th>
                    <div class="row">
                        <div class='logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>PROJECT</div>
                        <div class='description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>INFO</div>
                        <div class='countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>TIME</div>
                        <div class="progress-div progress-div-title col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2">RATING</div>
                        <div class='button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'></div>
                    </div>
                </th>
            </tr>
        </table>
    </div>


    <div class="row">
        <table class="main-ico-table">
            <?php foreach($rows->result() as $row)
            {
                $image_url = $row->image == '' ? base_url().'uploads/icos/placeholder.png' : base_url().'uploads/icos/'.$row->image;

                $date = DateTime::createFromFormat("Y-m-d H:i:s",$row->end_date);
                $date2 = new DateTime();

                $days = $date2->diff($date)->format("%a");
                $hours = $date2->diff($date)->format("%H");
                $minutes = $date2->diff($date)->format("%i");

                ?>
            <tr>
                <td>
                    <div class="row" style='position:relative;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a title="<?php echo $row->ico; ?>" href='<?php echo base_url(); ?>welcome/detail?ico_id=<?php echo $row->ico_id; ?>' style='text-decoration: none;'>
                                    <img src='<?php echo $image_url; ?>' class='project-logo' alt='<?php echo $row->ico; ?>'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'><?php echo $row->token_code; ?></span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'><?php echo $row->description; ?></p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style="font-size:12px;margin:0px;"><span style="color:#ffae00;font-weight:bold;">PRESALE</span> ENDS IN:</p>
                                <div class='time-unit-div'>
                                    <p class='project-time'><?php echo $days; ?></p>
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'><?php echo $hours; ?></p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'><?php echo $minutes; ?></p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class="db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2">

                                <p style="font-size:14px;color: #7b7b7b;">HIGH</p>

                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='<?php echo base_url(); ?>welcome/detail?ico_id=<?php echo $row->ico_id; ?>' title='<?php echo $row->ico; ?> Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>
            <?php } ?>


        </table>
        <?php echo $pagination_links; ?>
    </div>


<?php $this->load->view('footer',$this->data); ?>

