<!DOCTYPE html>
<html>
<head>
    <title><?php echo SYSTEM_NAME; ?></title>
    <meta name="description" content="Follow all the best ICOs (Initial Coin Offering) & new token crowdsales. The ultimate ICO list for crypto investors!">
    <base href="<?php echo base_url(); ?>">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icosouq/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icosouq/js/jquery-ui.css">
    <script src="<?php echo base_url(); ?>assets/icosouq/js/jquery-1.12.4.js"></script>
    <script src="<?php echo base_url(); ?>assets/icosouq/js/jquery-ui.js"></script>


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icosouq/css/style.css">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/icosouq/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/icosouq/images/favicon-32x32.png">

    <meta property="og:title" content="ICO Watch List - Best ICO & Token Crowdsales List For Investors"/>
    <meta property='og:image' content='<?php echo base_url(); ?>assets/icosouq/images/social_logo.jpg'/>
    <meta property="og:site_name" content="ICO Watch List"/>
    <meta property="og:description" content="Follow all the best ICOs (Initial Coin Offering) & new token crowdsales. The ultimate ICO list for crypto investors!"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <link rel='canonical' href='<?php echo base_url(); ?>'>






</head>



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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRIVATE MEMBERS</a>
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

        /*$api_end_point = "https://api.coinbase.com/v2/exchange-rates?currency=BTC";
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
        }*/

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
            </ul>
            
        </div>
        <div class="hidden-lg hidden-md col-sm-3 col-xs-12 languageholder">
            <div id="google_translate_element2" align="right" class="hideimpd"></div>
                <script type="text/javascript">
                    if($(window).width() < 992){
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element2');
                    }
                    }
                </script>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 hidden-sm hidden-xs">
            <div class="mainmenu">
                <div class="sitenavbar">

                    <div class="collapse navbar-collapse mainnavbar">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>welcome/news">NEWS</a></li>
                            <!--<li><a href="#">LOCAL GUIDES</a></li>-->
                            <li class="dropdown">
                                <a href="<?php echo base_url(); ?>private_member/" class="dropdown-toggle" data-toggle="dropdown">PRIVATE MEMBERS</a>
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
<script type="text/javascript">
    $(function(){

        $('.privatemenu').click(function(event) {
            event.preventDefault();
            var target = "#" + this.getAttribute('data-target');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 120
            }, 800);
        });
    })
</script>