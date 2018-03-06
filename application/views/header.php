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

    <link rel='canonical' href='<?php echo base_url(); ?>'>






</head>



<body>
<div class="container">

    <div class="row" style='position:fixed;top:0px;background-color:#fefefe;z-index:100000;width:100%;max-width:1170px;border-bottom:1px gray solid;'>

        <a href='<?php echo base_url(); ?>'><img src='<?php echo base_url(); ?>assets/images/icosouc_logo.jpg' style='width:120px;float:left;' ></a>

        <div class='menu-link-header' style="float: left;">
            &nbsp;
        </div>
        <div class='menu-link-header' style="float: left;">
            &nbsp;
        </div>
        <div class='menu-link-header' style="float: left;">
            &nbsp;
        </div>
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
        <div class='menu-link-header' style="float: left;">
            <style>
                .currency_name{color: #0195d5;font-size: 16px;font-weight: bold}
            </style>
        <table width="200">
            <thead>
            <tr>
                <th class="currency_name">BTC</th>
                <th class="currency_name">ETH</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><strong>$ <?php echo $currencies['BTC']->price; ?></strong></td>
                <td><strong>$ <?php echo $currencies['ETH']->price; ?></strong></td>
            </tr>
            </tbody>
        </table>
        </div>

        <div class='menu-link-header'>
            <div id="google_translate_element" align="right"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </div>

        <div class='menu-link-header'>
            <a href='#' style="color: #FFD700;font-weight: bold;">PRIVATE MEMBERS</a>
        </div>

        <div class='menu-link-header'>
            <a href='#' class="currency_name">LOCAL GUIDES</a>
        </div>

        <div class='menu-link-header'>
            <a href='#' class="currency_name">NEWS</a>
        </div>

    </div>


    <div class="row" style='margin-top:80px;padding:10px;'>
        <p>
        <h1 class='h1-title'>Welcome to ICO Souq!</h1>
        ICO Souq is the Middle East’s leading destination for crypto insights with analysis and ratings on Initial Coin Offerings. Our portfolio is updated daily and available in English or Arabic.
        </p>
    </div>

    <div class="row">

        <div class='table-tabs'>
            <a href='<?php echo base_url(); ?>?listing=ongoing'>
                <div class='tab <?php echo $listing=='ongoing' ? 'selected-tab' : ''; ?>'>
                    LIVE ICOs
                </div>
            </a>

            <a href='<?php echo base_url(); ?>?listing=upcoming'>
                <div class='tab <?php echo $listing=='upcoming' ? 'selected-tab' : ''; ?>'>
                    UPCOMING ICOs
                </div>
            </a>
        </div>

    </div>
