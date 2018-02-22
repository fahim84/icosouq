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

        <a href='<?php echo base_url(); ?>'><img src='<?php echo base_url(); ?>assets/icosouq/images/logo3.png' style='width:120px;float:left;' alt='ICO Watch List' title='ICO Watch List'></a>

        <div class='main-menu'>
            <div class='menu-icon'><img src='<?php echo base_url(); ?>assets/icosouq/images/menu.png'></div>
            <div class="menu-box">
                <a href='<?php echo base_url(); ?>?status=ongoing'><p class='menu-link'>Live ICO List</p></a>
                <a href='<?php echo base_url(); ?>?status=upcoming'><p class='menu-link'>Upcoming ICO List</p></a>
            </div>

            <div class="share-box">
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>


        <div class='menu-link-header'>
            <a href='#'>العربية</a>
        </div>
        <div class='menu-link-header'>
            <a href='#'>NEWS</a>
        </div>
        <div class='menu-link-header'>
            <a href='<?php echo base_url(); ?>'>ICO LIST</a>
        </div>

    </div>


    <div class="row" style='margin-top:80px;padding:10px;'>
        <p>
        <h1 class='h1-title'>Welcome to the ICO</h1>
        ICO Souq is the Middle East’s leading destination for crypto insights with analysis and ratings on Initial Coin Offerings. Our portfolio is updated daily and available in English or Arabic.
        Get in touch with us for a concierge investment service or to promote your ICO.
        </p>
    </div>

    <div class="row">

        <div class='table-tabs'>
            <a href='<?php echo base_url(); ?>?status=ongoing'>
                <div class='tab <?php echo $status=='ongoing' ? 'selected-tab' : ''; ?>'>
                    LIVE ICOs
                </div>
            </a>

            <a href='<?php echo base_url(); ?>?status=upcoming'>
                <div class='tab <?php echo $status=='upcoming' ? 'selected-tab' : ''; ?>'>
                    UPCOMING ICOs
                </div>
            </a>
        </div>

    </div>
