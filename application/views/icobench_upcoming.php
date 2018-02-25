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
                    <div class='button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>&nbsp;</div>
                </div>
            </th>
        </tr>
    </table>
</div>


<div class="row">
    <table class="main-ico-table">
        <?php
        foreach($rows->result() as $row)
        {
            $start_date = $row->icoStart;
            $end_date = $row->icoEnd;

            $date = date("j M Y",strtotime($start_date));
            $time = date("h:i a",strtotime($start_date));

            ?>
            <tr>
                <td>
                    <div class="row" style='position:relative;'>

                        <div class='db logo-div col-xs-3 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a title="<?php echo $row->name; ?>" href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>' style='text-decoration: none;'>
                                    <img src='<?php echo $row->logo; ?>'  alt='<?php echo $row->name; ?>'>

                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:8px;'>
                                <div class='project-time' ><?php echo $row->name; ?></div>
                                <p class='project-info'><?php echo $row->desc; ?></p>
                            </div>
                        </div>

                        <div class="db date-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2">
                            <div style='margin-top:5px;'>
                            <!--<p style="font-size:12px;margin:0px;">Start:</p>-->
                            <div class='time-unit-div'>
                                    <p class='project-time'><?php echo $date; ?></p>
                                    <!--<p class='small-time'>Date</p>-->
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'><?php echo $time; ?></p>
                                    <!--<p class='small-time'>Time</p>-->
                                </div>

                            </div>
                        </div>

                        <div class="db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2">

                            <p class='project-time' style='margin:7px;' ><?php echo $row->ico_souq_rate; ?></p>

                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>' title='<?php echo $row->name; ?> Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>
        <?php } ?>


    </table>
    <?php //echo $pagination_links; ?>
</div>




<?php $this->load->view('footer',$this->data); ?>

