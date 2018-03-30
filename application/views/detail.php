<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script id="twitter-wjs" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/widgets.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/share.html"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/a.json"></script>
    <script async="" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/qevents.txt"></script>
    <script type="text/javascript" async="" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/insight.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/300lo.json"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/_ate.config_resp"></script>
    <title>ICO rating and details | <?php echo SYSTEM_NAME; ?></title>
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icosouq/css/bootstrap.css">


    <link href="<?php echo base_url(); ?>assets/icosouq/icobench_files/style.css" id="css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>assets/icosouq/icobench_files/jquery.js"></script>


    <script type="text/javascript" charset="utf-8" async="" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/172.js"></script><script type="text/javascript" charset="utf-8" async="" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/15.js"></script></head>
<body>
<div class="container">
    <div class="row mainheader">

        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 sitelogo">

            <a href='<?php echo base_url(); ?>'><img src='<?php echo base_url(); ?>assets/images/icosouc_logo.jpg' ></a>
        </div>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainsitenav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="mainmenu visible-sm visible-xs">
                <div class="sitenavbar">

                    <div class="collapse navbar-collapse mainnavbar" id="mainsitenav">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>welcome/news">NEWS</a></li>
                            <li><a href="#">LOCAL GUIDES</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRIVATE MEMBERS</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VIP Signals & Alerts</a></li>
                                    <li><a href="#">ICO Analysis + Ratings</a></li>
                                    <li><a href="#">Crypto Crash Course</a></li>
                                    <li><a href="#">VIP Events Calendar</a></li>
                                </ul>

                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse// .mainnavbar -->
                </div><!-- sitenavbar //ends-->
            </div><!--//mainmenu//-->


        <?php

        //my_var_dump('Updating prices of ETH and BTC');

        $api_end_point = "https://api.coinbase.com/v2/exchange-rates?currency=BTC";
        //my_var_dump($api_end_point);
        $response = file_get_contents($api_end_point);
        if($response)
        {
            $response = json_decode($response);
            //my_var_dump($response);

            $datetime = date('Y-m-d H:i:s');
            $sql_data['name'] = $response->data->currency;
            $sql_data['fullname'] = $response->data->currency;
            $sql_data['price'] = $response->data->rates->USD;
            $sql_data['currency'] = 'USD';
            $sql_data['updated_at'] = $datetime;

            $sql = $this->db->insert_string('currencies', $sql_data) . " ON DUPLICATE KEY UPDATE price={$response->data->rates->USD},updated_at='$datetime'";
            $this->db->query($sql);
            //my_var_dump($this->db->last_query());
            $id = $this->db->insert_id();
            //my_var_dump($id);

        }
        else{
            //my_var_dump($response);
        }

        $api_end_point = "https://api.coinbase.com/v2/exchange-rates?currency=ETH";
        //my_var_dump($api_end_point);
        $response = file_get_contents($api_end_point);
        if($response)
        {
            $response = json_decode($response);
            //my_var_dump($response);

            $datetime = date('Y-m-d H:i:s');
            $sql_data['name'] = $response->data->currency;
            $sql_data['fullname'] = $response->data->currency;
            $sql_data['price'] = $response->data->rates->USD;
            $sql_data['currency'] = 'USD';
            $sql_data['updated_at'] = $datetime;

            $sql = $this->db->insert_string('currencies', $sql_data) . " ON DUPLICATE KEY UPDATE price={$response->data->rates->USD},updated_at='$datetime'";
            $this->db->query($sql);
            //my_var_dump($this->db->last_query());
            $id = $this->db->insert_id();
            //my_var_dump($id);

        }
        else{
            //my_var_dump($response);
        }

        $query = $this->db->get('currencies');
        foreach ($query->result() as $currency)
        {
            $currencies[$currency->name] = $currency;
        }
        ?>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 currencyholder">
            <ul>
                <li>
                    <span>BTC</span>
                    <strong>$ <?php echo number_format($currencies['BTC']->price); ?></strong>
                </li>
                <li>
                    <span>ETH</span>
                    <strong>$ <?php echo number_format($currencies['ETH']->price); ?></strong>
                </li>
                <li> <div class="hidden-lg hidden-md col-sm-3 col-xs-12 languageholder">
                        <div id="google_translate_element2" align="right" class="hideimpd"></div>
                            <script type="text/javascript">
                                if($(window).width() < 992){
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element2');
                                }
                                }
                            </script>
                    </div>
                </li>
            </ul>
            
        </div>
       

        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 hidden-sm hidden-xs">
            <div class="mainmenu">
                <div class="sitenavbar">

                    <div class="collapse navbar-collapse mainnavbar">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>welcome/news">NEWS</a></li>
                            <li><a href="#">LOCAL GUIDES</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRIVATE MEMBERS</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VIP Signals & Alerts</a></li>
                                    <li><a href="#">ICO Analysis + Ratings</a></li>
                                    <li><a href="#">Crypto Crash Course</a></li>
                                    <li><a href="#">VIP Events Calendar</a></li>
                                </ul>

                            </li>
                            <li><div id="google_translate_element" align="right" class="hideimp"></div></li>
                            
                        </ul>
                        
                                <script type="text/javascript">
                                    if($(window).width() > 992){
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                    }
                                }
                                </script>
                    </div><!-- /.navbar-collapse// .mainnavbar -->
                </div><!-- sitenavbar //ends-->
            </div><!--//mainmenu//-->
        </div><!--//col//-->

    </div>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<script>
    $(function(){
        $("#hamburger").click(function(){
            $("#top_menu").toggleClass("display");
        });
        $("#bottom_hamburger").click(function(){
            $("#bottom_hamburger_open").toggleClass("display");
        });
        $("#profile > .arrow").click(function(){
            $("#profile_dropdown").toggle();
        });
    });
</script>

<div id="page" class="innerpage">

    <?php //my_var_dump($api_response); ?>
    <div id="profile_header">
        <div class="frame">
            <div class="ico_information">
                <div class="row">
                    <div class="image"><img src="<?php echo $api_response->logo; ?>"></div>
                    <div class="name">
                        <h1><?php echo $api_response->name; ?></h1>
                        <h2><?php echo $api_response->tagline; ?></h2>
                    </div>
                </div>

                <p><?php echo $api_response->intro; ?></p>

                <div class="categories">
                    <?php foreach ($api_response->categories as $category){?>
                        <a href="#" title="<?php echo $category->name; ?>"><?php echo $category->name; ?></a>
                    <?php } ?>
                </div>


                <iframe class="youtubevid" src="<?php echo $api_response->links->youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
            <div class="fixed_data">

                <div itemscope="" itemtype="http://schema.org/Organization">
                    <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="rating">
                        <div itemprop="ratingValue" content="<?php echo $api_response->ratingProfile; ?>">
                            <div class="rate color5"><?php echo $ico->ico_souq_rate; ?></div>
                            <span style="display:none;" itemprop="ratingCount" content="<?php echo count($api_response->ratings); ?>"><?php echo $ico->ico_souq_rate; ?></span>
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
                            <!--<div class="col_4">
                                <?php /*echo $ico->ico_souq_rate; */?>
                                <label>ICO SOUQ rate</label>
                            </div>-->
                        </div>

                    </div></div>
                <div class="financial_data">
                    <div class="row">
                        <div class="col_2 expand">
                            <label>Time</label>
                            <?php
                            $start_date = $api_response->dates->icoStart == '0000-00-00 00:00:00' ? $api_response->dates->preIcoStart : $api_response->dates->icoStart;
                            $end_date = $api_response->dates->icoEnd == '0000-00-00 00:00:00' ? $api_response->dates->preIcoEnd : $api_response->dates->icoEnd;

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
                    <?php
                    foreach($api_response->finance as $key => $value)
                    {
                        if($value){
                        ?>
                    <div class="data_row">
                        <div class="col_2">
                            <?php echo ucfirst($key); ?>
                        </div>
                        <div class="col_2">
                            <b><?php echo $value; ?></b>
                        </div>
                    </div>
                    <?php }} ?>

                    <?php if($api_response->country){ ?>
                    <div class="data_row">
                        <div class="col_2">
                            Country
                        </div>
                        <div class="col_2">
                            <b><a href="<?php echo base_url(); ?>icos?filterCountry=<?php echo $api_response->country; ?>" title="ICOs from <?php echo $api_response->country; ?>"><?php echo $api_response->country; ?></a></b>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="data_row">
                        <div class="col_2">
                            <?php echo ucfirst($api_response->registration); ?>
                        </div>
                        <div class="col_2"><b><?php echo $api_response->registration; ?></b></div>
                    </div>
                    <?php if(count($api_response->restrictions)){ ?>
                    <div class="data_row">
                        <div class="col_2">
                            Restricted areas
                        </div>
                        <div class="col_2">
                            <b><?php foreach($api_response->restrictions as $restriction) $countries[] = $restriction->country; echo implode(', ',$countries); ?></b>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="divider"></div>
                    <a onclick="ga('send', 'event', 'ICOprofile', 'More on ICO', 'Friendz');" rel="nofollow" href="<?php echo $api_response->links->www; ?>?utm_source=icobench" target="_blank" class="button_big">More on ICO</a>
                </div>

            </div>
        </div>
    </div>


    <div id="profile_content">
        <div class="frame">
            <div class="content">
                <div class="navigation_mobile">
                    <div class="tabs">
                        <a class="selected about" href="#_" onclick="openPage('about');return false;">About</a>
                        <a href="#_" class=" team" onclick="openPage('team');return false;">Team</a>
                        <a href="#_" class=" milestones" onclick="openPage('milestones');return false;">Milestones</a>
                        <a class=" financial" href="#_" onclick="openPage('financial');return false;">Financial</a>
                        <a href="<?php echo $api_response->links->whitepaper; ?>" target="_blank">White paper</a>
                    </div>
                </div>
                <script>
                    function openPage(page){
                        $('.tabs .selected').removeClass('selected');
                        $('.tabs .' + page).addClass('selected');
                        $('.content .tab_content').hide();
                        $('.content #' + page).show();
                        ga('send', 'event', 'ICOprofile', 'Tab - ' + page);
                    }
                </script>

                <div class="tab_content" id="about">
                    <h2>About <?php echo $api_response->name; ?></h2>
                    <?php echo nl2p($api_response->about); ?>
                </div>

                <div style="display:none;" class="tab_content" id="team">
                    <h2>Team</h2>
                    <a href="https://icobench.com/contact?advisor=<?php echo strtolower($api_response->name); ?>" class="button_apply">Apply as an advisor</a>
                    <div class="row">
                        <?php foreach ($api_response->team as $team){ ?>
                        <div class="col_3 iss">
                            <a href="https://icobench.com/u/<?php echo $team->url; ?>" title="<?php echo $team->name; ?>" class="image">
                                <div class="image_background" style="background-image:url('<?php echo $team->photo; ?>');"></div>
                            </a>
                            <h3><?php echo $team->name; ?></h3>
                            <h4><?php echo $team->title; ?></h4>
                            <div class="socials">
                                <?php foreach ($team->socials as $social){ ?>
                                <a href="<?php echo $social->url; ?>" rel="nofollow" target="_blank" class="<?php echo $social->site; ?>"><?php echo $social->site; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div style="display:none;" class="tab_content" id="financial">
                    <h2>Financial</h2>
                    <div class="box">
                        <div class="box_left">
                            <h3>Token info</h3>
                            <div class="divider"></div>
                            <?php if($api_response->finance->token){ ?>
                            <div class="row">
                                <div class="label">Token</div>	<div class="value"><?php echo $api_response->finance->token; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($api_response->finance->platform){ ?>
                            <div class="row">
                                <div class="label">Platform</div>	<div class="value"><?php echo $api_response->finance->platform; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($api_response->finance->tokentype){ ?>
                            <div class="row">
                                <div class="label">Type</div>	<div class="value"><?php echo $api_response->finance->tokentype; ?></div>
                            </div>
                            <div class="divider"></div>
                            <?php } ?>
                            <?php if($api_response->finance->price){ ?>
                            <div class="row">
                                <div class="label">Price in ICO</div>	<div class="value"><?php echo $api_response->finance->price; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($api_response->finance->bonus){ ?>
                            <div class="row">
                                <div class="divider"></div>
                                <h4>Bonus</h4>
                                <div class="bonus_text">
                                    <table style="border-collapse: collapse; width: 100%;" border="0">
                                        <tbody>
                                        <tr>
                                            <td style="width: 50%;">POWER HOUR</td>
                                            <td style="width: 50%;"><strong>40% BONUS</strong></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%;">DAY 1</td>
                                            <td style="width: 50%;"><strong>20% BONUS</strong></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%;">WEEK 1</td>
                                            <td style="width: 50%;"><strong>10% BONUS</strong></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%;">WEEK 2-3</td>
                                            <td style="width: 50%;"><strong>0% BONUS</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="divider"></div>
                            <?php if($api_response->finance->tokens){ ?>
                            <div class="row">
                                <div class="label">Tokens for sale</div>
                                <div class="value"><?php echo $api_response->finance->tokens; ?></div>
                            </div>
                            <div class="divider"></div>
                            <?php } ?>
                        </div>
                        <div class="box_right">
                            <h3>Investment info</h3>
                            <div class="divider"></div>
                            <?php if($api_response->finance->minimum){ ?>
                            <div class="row">
                                <div class="label">Min. investment</div>
                                <div class="value"><?php echo $api_response->finance->minimum; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($api_response->finance->accepting){ ?>
                            <div class="row">
                                <div class="label">Accepting</div>
                                <div class="value"><?php echo $api_response->finance->accepting; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($api_response->finance->distributed){ ?>
                            <div class="row">
                                <div class="label">Distributed in ICO</div>
                                <div class="value"><?php echo $api_response->finance->distributed; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($api_response->finance->softcap){ ?>
                            <div class="row">
                                <div class="label">Soft cap</div>
                                <div class="value"><?php echo $api_response->finance->softcap; ?></div>
                            </div>
                            <?php } ?>
                            <?php if($api_response->finance->hardcap){ ?>
                            <div class="row">
                                <div class="label">Hard cap</div>
                                <div class="value"><?php echo $api_response->finance->hardcap; ?></div>
                            </div>
                            <?php } ?>
                            <div class="divider"></div>
                        </div>
                    </div>

                </div>

                <div style="display:none;" class="tab_content" id="milestones">
                    <h2>Milestones</h2>


                    <div class="box">
                        <?php foreach ($api_response->milestones as $key => $milestone){ ?>
                        <div class="row">
                            <div class="number"><?php echo $key+1; ?></div>
                            <div class="bubble">
                                <div class="arrow"></div>
                                <div class="condition"><?php echo $milestone->title; ?></div>
                                <p><?php echo $milestone->content; ?></p>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>

            <div class="content_right">

            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/icosouq/icobench_files/jquery.css">
<script src="<?php echo base_url(); ?>assets/icosouq/icobench_files/jquery_002.js"></script>
<div class="container">
    <div class='row footer-div'>
        <div class='col-xs-offset-0 col-xs-12 col-sm-offset-0 col-sm-12 col-md-offset-1 col-md-10'>
            <div class='row'>
                <div class='col-xs-6 col-sm-4 col-md-2 footercol'>
                    <h4 class='footer-title'>Website</h4>
                    <p class='footer-menu-link'><a href='about'><span class='footer-menu-link'>About Us</a></p>
                    <p class='footer-menu-link'><a href='contact'><span class='footer-menu-link'>Contact Us</a></p>
                    <p class='footer-menu-link'><a href='<?php echo base_url(); ?>blog/'>Our Blog</a></p>
                    <p class='footer-menu-link'><a href='add-ico'><span class='footer-menu-link'>Add Your ICO</a></p>
                </div>
                <!--<div class='col-xs-6 col-sm-4 col-md-2' style='margin-bottom:20px;'>
                    <h4 class='footer-title'>Developers</h4>
                    <p class='footer-menu-link'><a href='tools/sticker'>Stickers</a></p>
                    <p class='footer-menu-link'><a href='tools/widget'><span class='footer-menu-link'>ICO List Widget</a></p>
                    <p class='footer-menu-link'><a href='tools/stats-widget'><span class='footer-menu-link'>ICO Stats Widgets</a></p>
                    <p class='footer-menu-link'><a href='tools/api'><span class='footer-menu-link'>API</a></p>
                </div>-->
                <div class='col-xs-6 col-sm-4 col-md-2 footercol'>
                    <h4 class='footer-title'>Legal</h4>
                    <p class='footer-menu-link'><a href='disclaimer'><span class='footer-menu-link'>Disclaimer</a></p>
                    <p class='footer-menu-link'><a href='terms'><span class='footer-menu-link'>Terms Of Use</a></p>
                    <p class='footer-menu-link'><a href='privacy'><span class='footer-menu-link'>Privacy</a></p>
                    <p class='footer-menu-link'><a href='info'><span class='footer-menu-link'>General Info</a></p>
                </div>
                <div class='col-xs-6 col-sm-4 col-md-2 footercol'>
                    <h4 class='footer-title'>ICO List</h4>
                    <p class='footer-menu-link'><a href='live'>Live ICO</a></p>
                    <p class='footer-menu-link'><a href='upcoming'><span class='footer-menu-link'>Upcoming ICO</a></p>
                </div>
                <div class='col-xs-6 col-sm-4 col-md-3 footercol'>
                    <h4 class='footer-title'>Research & Data</h4>
                    <p class='footer-menu-link'><a href='education'><span class='footer-menu-link'>ICO Guide</a></p>
                    <p class='footer-menu-link'><a href='statistics'><span class='footer-menu-link'>ICO Statistics</a></p>
                </div>
                <div class='col-xs-6 col-sm-4 col-md-2 footercol'>
                    <h4 class='footer-title'>Social</h4>
                    <p class='footer-menu-link'><a href='https://twitter.com/icowatchlist' target='_blank'><span class='footer-menu-link'>Twitter</a></p>
                    <p class='footer-menu-link'><a href='https://www.facebook.com/icowatchlist/' target='_blank'><span class='footer-menu-link'>Facebook</a></p>
                    <p class='footer-menu-link'><a href='https://t.me/joinchat/FrpyWkHXf62SVjzPrYwUJw'  target='_blank'><span class='footer-menu-link'>Telegram</a></p>
                </div>
                
            </div>
        </div>



    </div>


</div>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>