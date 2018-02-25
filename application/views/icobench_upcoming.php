<?php $this->load->view('header',$this->data); ?>


    <div class="row">
        <table class="main-ico-table titles-table">
            <tr>
                <th>
                    <div class="row">
                        <div class='logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>PROJECT</div>
                        <div class='description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>INFO</div>
                        <div class='countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>START</div>
                        <div class="progress-div progress-div-title col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2">RATING</div>
                        <div class='button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>&nbsp;</div>
                    </div>
                </th>
            </tr>
        </table>
    </div>


    <div class="row">
        <table class="main-ico-table">
            <?php foreach($rows as $row)
            {
                $start_date = $row->dates->icoStart == '0000-00-00 00:00:00' ? $row->dates->preIcoStart : $row->dates->icoStart;
                $end_date = $row->dates->icoEnd == '0000-00-00 00:00:00' ? $row->dates->preIcoEnd : $row->dates->icoEnd;

                $date = date("j F Y",strtotime($start_date));
                $time = date("H:i",strtotime($start_date));

                ?>
            <tr>
                <td>
                    <div class="row" style='position:relative;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a title="<?php echo $row->name; ?>" href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>' style='text-decoration: none;'>
                                    <img src='<?php echo $row->logo; ?>' alt='<?php echo $row->name; ?>'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'><?php echo $row->name; ?></span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'><?php echo $row->desc; ?></p>
                            </div>
                        </div>


                        <div class="db date-div hidden-xs col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2">
                            <div class="datetime-div" style="padding-top:10px;">
                                <p style="font-size:14px;">Date: <b><?php echo $date; ?></b></p><p style="font-size:14px;">Time: <b><?php echo $time; ?></b></p>
                            </div>
                        </div>

                        <div class="db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2">

                                <p style="font-size:14px;color: #7b7b7b;"><?php echo $row->rating; ?></p>

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
        <?php echo $pagination_links; ?>
    </div>


<?php $this->load->view('footer',$this->data); ?>

