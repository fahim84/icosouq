
<?php $this->load->view('header2',$this->data); ?>

<div id="page" class="innerpage">

    <div id="profile_header">
        <div class="frame">
            <div class="ico_information">
                <div class="row">
                    <?php
                    $ico->logo = $ico->image ? base_url().'uploads/icos/'.$ico->image : base_url().'uploads/icos/placeholder.png';
                    ?>
                    <div class="image"><img src="<?php echo $ico->logo; ?>"></div>
                    <div class="name">
                        <h1><?php echo $ico->name; ?></h1>
                    </div>
                </div>

                <p><?php echo $ico->desc; ?></p>


                <iframe class="youtubevid" src="<?php echo str_replace('watch?v=','embed/',$ico->youtube_url); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
            <div class="fixed_data">

                <div itemscope="" itemtype="http://schema.org/Organization">
                    <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="rating">
                        <div itemprop="ratingValue" >
                            <div class="rate color5"><?php echo $ico->ico_souq_rate; ?></div>
                            <span style="display:none;" itemprop="ratingCount"><?php echo $ico->ico_souq_rate; ?></span>
                            <small>ICO SOUQ RATING</small>
                        </div>
                        <div class="distribution">
                            <div class="col_4">
                                <?php echo $ico->hype_rate; ?>
                                <label>Hype rate</label>
                            </div>
                            <div class="col_4">
                                <?php echo $ico->risk_rate; ?>
                                <label>Risk rate</label>
                            </div>
                            <div class="col_4">
                                <?php echo $ico->roi_rate; ?>
                                <label>ROI rate</label>
                            </div>
                        </div>

                    </div></div>
                <div class="financial_data">
                    <div class="row">
                        <div class="col_2 expand">
                            <label>Time</label>
                            <?php
                            $start_date = $ico->icoStart == '0000-00-00 00:00:00' ? $ico->preIcoStart : $ico->icoStart;
                            $end_date = $ico->icoEnd == '0000-00-00 00:00:00' ? $ico->preIcoEnd : $ico->icoEnd;

                            if($start_date > date('Y-m-d H:i:s'))
                            {
                                // upcoming

                                $date = date("j F Y",strtotime($start_date));
                                $time = date("H:i",strtotime($start_date));

                                ?>
                                <div class="number">Date: <b><?php echo $date; ?></b><br> Time: <b><?php echo $time; ?></b></div>
                            <?php
                            }
                            else
                            {
                                // ongoing

                                $date = DateTime::createFromFormat("Y-m-d H:i:s",$end_date);
                                $date2 = new DateTime();

                                $days = $date2->diff($date)->format("%a");
                                $hours = $date2->diff($date)->format("%H");
                                $minutes = $date2->diff($date)->format("%i");
                            ?>
                                <div class="number"><?php echo $days; ?> days <?php echo $hours; ?> hours left</div>
                            <?php } ?>
                            <small><?php echo date("j F Y",strtotime($start_date)); ?>  - <?php echo date("j F Y",strtotime($end_date)); ?></small>
                        </div>
                    </div>
                    <div class="divider"></div>

                    <a rel="nofollow" href="<?php echo $ico->url; ?>" target="_blank" class="button_big">Official Website</a>
                </div>

            </div>
        </div>
    </div>



</div>




<?php $this->load->view('footer2',$this->data); ?>