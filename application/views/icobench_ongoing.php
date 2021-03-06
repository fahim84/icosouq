<?php $this->load->view('header',$this->data); ?>
<?php $this->load->view('top_msg',$this->data); ?>


    <div class="row">
        <table class="main-ico-table titles-table">
            <tr>
                <th>
                    <div class="row">
                        <div class='logo-div col-xs-4 col-sm-3 col-md-1 col-xl-2'>PROJECT</div>
                        <div class='description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-4 col-xl-2' style="padding-left: 30px;">INFO</div>
                        <div class='countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>ICO SALE</div>
                        <div class="progress-div progress-div-title col-xs-4 col-sm-4 col-md-2 col-lg-2 col-xl-2" align="center">RATING</div>
                        <div class='button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>&nbsp;</div>
                    </div>
                </th>
            </tr>
        </table>
    </div>


    <div class="row">
        <div class="col-xs-12">
        <table class="main-ico-table">


            <?php foreach($rows->result() as $row)
            {
                $end_date = $row->icoEnd;
                $date = DateTime::createFromFormat("Y-m-d H:i:s",$end_date);
                $date2 = new DateTime();

                $days = $date2->diff($date)->format("%a");
                $hours = $date2->diff($date)->format("%H");
                $minutes = $date2->diff($date)->format("%i");

            if($row->featured){
                ?>
                <tr>
                    <td>
                        <div class="row" style='position:relative;'>

                            <?php if($row->featured){ ?>
                                <a href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>'><img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' class='sponsored-label' style='position:absolute;top:0px;right:15px;'></a>
                            <?php } ?>
                            <div class='db logo-div col-xs-12 col-sm-3 col-md-1 col-xl-2'>
                                <div style='margin:5px 15px;'>
                                    <a title="<?php echo $row->name; ?>" href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>' style='text-decoration: none;'>
                                        <img src='<?php echo $row->logo; ?>'  alt='<?php echo $row->name; ?>'>

                                    </a>
                                </div>
                            </div>


                            <div class='db description-div  col-xs-12 col-sm-3 col-md-3 col-lg-4 col-xl-2'>
                                <div class="aligndesc">
                                    <div class='project-time' style="font-size: 16px;" ><?php echo $row->name; ?></div>
                                    <p class='project-info'><?php echo $row->desc; ?></p>
                                </div>
                            </div>


                            <div class='db countdown-div hidden-xs col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                                <div style='margin-top:5px;'>
                                    <p style="font-size:12px;margin:0px;"><!--<span style="color:#ffae00;font-weight:bold;">PRESALE</span>-->ENDS IN:</p>
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

                            <div class="db progress-div col-xs-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">


                                <p class='project-time' style='margin:26px;font-size: 22px;' align="center"><?php echo $row->ico_souq_rate; ?></p>

                            </div>

                            <div class='db button-div col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                                <div style='text-align: center;'>
                                    <a href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>' title='<?php echo $row->name; ?> Details'><div class='progress-ico'>ICO Details</div></a>
                                </div>
                            </div>

                        </div>

                    </td>
                </tr>
            <?php }} ?>






            <?php
            $query_params['limit'] = 50;
            $query_params['offset'] = 0;
            $query_params['order_by'] = 'icoEnd ASC';
            //$query_params['direction'] = 'DESC';
            $query_params['status'] = 1;
            $query_params['listing'] = $listing;

            $query = $this->ico_custom_model->get($query_params);
            //my_var_dump($this->db->last_query());
            foreach($query->result() as $row)
            {
                $end_date = $row->icoEnd;
                $date = DateTime::createFromFormat("Y-m-d H:i:s",$end_date);
                $date2 = new DateTime();

                $days = $date2->diff($date)->format("%a");
                $hours = $date2->diff($date)->format("%H");
                $minutes = $date2->diff($date)->format("%i");

                $row->logo = $row->image ? base_url().'uploads/icos/'.$row->image : base_url().'uploads/icos/placeholder.png';
                ?>
            <tr>
                <td>
                    <div class="row" style='position:relative;'>

                        <a href='<?php echo $row->url; ?>' target='_blank'><img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' class='sponsored-label' style='position:absolute;top:0px;right:15px;'></a>
                        <div class='db logo-div col-xs-12 col-sm-3 col-md-1 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a target="_blank" title="<?php echo $row->name; ?>" href='<?php echo $row->url; ?>' style='text-decoration: none;'>
                                    <img src='<?php echo $row->logo; ?>'  alt='<?php echo $row->name; ?>' width="85" height="85">
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  col-xs-12 col-sm-3 col-md-3 col-lg-4 col-xl-2'>
                            <div class="aligndesc">
                                <div class='project-time' style="font-size: 16px;" ><?php echo $row->name; ?></div>
                                <p class='project-info'><?php echo $row->desc; ?></p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style="font-size:12px;margin:0px;">ENDS IN:</p>
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

                        <div class="db progress-div col-xs-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                <p class='project-time' style='margin:26px;font-size: 22px;' align="center"><?php echo $row->ico_souq_rate; ?></p>
                        </div>

                        <div class='db button-div col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <!--<a target="_blank" href='<?php /*echo $row->url; */?>' title='<?php /*echo $row->name; */?> Details'><div class='progress-ico'>ICO Details</div></a>-->
                                <a href='<?php echo base_url(); ?>welcome/detail2?id=<?php echo $row->id; ?>' title='<?php echo $row->name; ?> Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>
            <?php } ?>






            <?php foreach($rows->result() as $row)
            {
                $end_date = $row->icoEnd;
                $date = DateTime::createFromFormat("Y-m-d H:i:s",$end_date);
                $date2 = new DateTime();

                $days = $date2->diff($date)->format("%a");
                $hours = $date2->diff($date)->format("%H");
                $minutes = $date2->diff($date)->format("%i");
            if($row->featured == '0'){
                ?>
                <tr>
                    <td>
                        <div class="row" style='position:relative;'>

                            <?php if($row->featured){ ?>
                            <a href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>'><img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' class='sponsored-label' style='position:absolute;top:0px;right:15px;'></a>
                            <?php } ?>
                            <div class='db logo-div col-xs-12 col-sm-3 col-md-1 col-xl-2'>
                                <div style='margin:5px 15px;'>
                                    <a title="<?php echo $row->name; ?>" href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>' style='text-decoration: none;'>
                                        <img src='<?php echo $row->logo; ?>'  alt='<?php echo $row->name; ?>'>

                                    </a>
                                </div>
                            </div>


                            <div class='db description-div  col-xs-12 col-sm-3 col-md-3 col-lg-4 col-xl-2'>
                                <div class="aligndesc">
                                    <div class='project-time' style="font-size: 16px;" ><?php echo $row->name; ?></div>
                                    <p class='project-info'><?php echo $row->desc; ?></p>
                                </div>
                            </div>


                            <div class='db countdown-div hidden-xs col-xs-12 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                                <div style='margin-top:5px;'>
                                    <p style="font-size:12px;margin:0px;"><!--<span style="color:#ffae00;font-weight:bold;">PRESALE</span>-->ENDS IN:</p>
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

                            <div class="db progress-div col-xs-12 col-sm-4 col-md-2 col-lg-2 col-xl-2">


                                <p class='project-time' style='margin:26px;font-size: 22px;' align="center"><?php echo $row->ico_souq_rate; ?></p>

                            </div>

                            <div class='db button-div col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                                <div style='text-align: center;'>
                                    <a href='<?php echo base_url(); ?>welcome/detail?id=<?php echo $row->id; ?>' title='<?php echo $row->name; ?> Details'><div class='progress-ico'>ICO Details</div></a>
                                </div>
                            </div>

                        </div>

                    </td>
                </tr>
            <?php }} ?>

        </table>
        </div>
        <?php //echo $pagination_links; ?>
    </div>


<?php $this->load->view('footer',$this->data); ?>

