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
                        <!--<li><a href="#">LOCAL GUIDES</a></li>-->
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>private_member/">PRIVATE MEMBERS</a><span class="fa fa-caret-down dropdown-toggle" data-toggle="dropdown"></span>
                            <ul class="dropdown-menu">
                                <li><a class="privatemenu" href="#" data-target="vipsignals">VIP Signals & Alerts</a></li>
                                    <li><a class="privatemenu" href="#" data-target="icoanalysis">ICO Analysis + Ratings</a></li>
                                    <li><a class="privatemenu" href="#" data-target="cryptocrash">Crypto Crash Course</a></li>
                                    <li><a class="privatemenu" href="#" data-target="vipevents">VIP Events Calendar</a></li>
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
                            <!--<li><a href="#">LOCAL GUIDES</a></li>-->
                            <li class="dropdown">
                                <a href="<?php echo base_url(); ?>private_member/">PRIVATE MEMBERS</a><span class="fa fa-caret-down dropdown-toggle" data-toggle="dropdown"></span>
                                <ul class="dropdown-menu">
                                    <li><a class="privatemenu" href="#" data-target="vipsignals">VIP Signals & Alerts</a></li>
                                    <li><a class="privatemenu" href="#" data-target="icoanalysis">ICO Analysis + Ratings</a></li>
                                    <li><a class="privatemenu" href="#" data-target="cryptocrash">Crypto Crash Course</a></li>
                                    <li><a class="privatemenu" href="#" data-target="vipevents">VIP Events Calendar</a></li>
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

        $('.privatemenu').click(function(event) {
            event.preventDefault();
            var target = "#" + this.getAttribute('data-target');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 800);
        });
    });
</script>