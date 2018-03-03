<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"><script id="twitter-wjs" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/widgets.js"></script><script type="text/javascript" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/share.html"></script><script type="text/javascript" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/a.json"></script><script async="" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/qevents.txt"></script><script type="text/javascript" async="" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/insight.js"></script><script type="text/javascript" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/300lo.json"></script><script type="text/javascript" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/_ate.config_resp"></script>
    <title>ICO rating and details | <?php echo SYSTEM_NAME; ?></title>
    <meta name="keywords" content="">
    <meta charset="UTF-8">

    <link href="<?php echo base_url(); ?>assets/icosouq/icobench_files/style.css" id="css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>assets/icosouq/icobench_files/jquery.js"></script>


    <script type="text/javascript" charset="utf-8" async="" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/172.js"></script><script type="text/javascript" charset="utf-8" async="" src="<?php echo base_url(); ?>assets/icosouq/icobench_files/15.js"></script></head>
<body>
<header>
    <div class="frame" style="border-bottom:1px gray solid;">
        <a href='<?php echo base_url(); ?>'><img src='<?php echo base_url(); ?>assets/images/icosouc_logo.jpg' style='width:120px;float:left;' ></a>
        <div id="hamburger"></div>
        <nav id="top_menu">
            <a href="<?php echo base_url(); ?>" title="Browse ICOs" class="link">ICO LIST</a>
            <a href="<?php echo base_url(); ?>" target="_blank" title="Benchy the ICO bot" class="link">NEWS</a>
            <!--<a href="<?php /*echo base_url(); */?>"  class="link">العربية</a>-->

            <div class="link" id="google_translate_element" align="right"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </nav>

    </div>

</header>

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

<div id="page">

    <?php //my_var_dump($api_response); ?>
    <div id="profile_header"><div class="frame">
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


                <iframe width="770" height="577" src="<?php echo $api_response->links->youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
            <div class="fixed_data">

                <div itemscope="" itemtype="http://schema.org/Organization">
                    <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="rating">
                        <div itemprop="ratingValue" content="<?php echo $api_response->ratingProfile; ?>">
                            <div class="rate color5"><?php echo $ico->ico_souq_rate; ?></div>
                            <span style="display:none;" itemprop="ratingCount" content="<?php echo count($api_response->ratings); ?>"><?php echo $ico->ico_souq_rate; ?></span>
                            <small>ICO SOUC RATING</small>
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
                            <?php echo $key; ?>
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
                            <?php echo $api_response->registration; ?>
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
        </div></div>


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
<footer>
    <div class="navigation">
        <div class="frame" style="padding-left: 100px;">

            <div class="col_5">
                <h4>ICO List</h4>
                <ul>
                    <li><a href="<?php echo base_url(); ?>" title="Stats and Facts">Live ICO</a></li>
                    <li><a href="<?php echo base_url(); ?>" title="Media">Upcoming ICO</a></li>
                </ul>
            </div>
            <div class="col_5">
                <h4>Website</h4>
                <ul>
                    <li><a href="<?php echo base_url(); ?>publish" title="Publish new ICO">About Us</a></li>
                    <li><a href="<?php echo base_url(); ?>ico-analyzer" title="ICO Analyzer">Contact Us</a></li>
                    <li><a href="<?php echo base_url(); ?>premium" title="Premium listing">Our Blog</a></li>
                    <li><a href="<?php echo base_url(); ?>services" title="ICO Services">Add Your ICO</a></li>
                </ul>
            </div>
            <div class="col_5">
                <h4>Research & Data</h4>
                <ul>
                    <li><a href="<?php echo base_url(); ?>icos" title="ICO listing">ICO Guide</a></li>
                    <li><a href="<?php echo base_url(); ?>people" title="People of Blockchain">ICO Statistics</a></li>
                </ul>
            </div>
            <div class="col_5">
                <h4>Social</h4>
                <ul>
                    <li><a href="https://www.twitter.com/<?php echo SYSTEM_NAME; ?>" title="<?php echo SYSTEM_NAME; ?> on Twitter" target="_blank">Twitter</a></li>
                    <li><a href="https://www.facebook.com/<?php echo SYSTEM_NAME; ?>" title="<?php echo SYSTEM_NAME; ?> on Facebook" target="_blank">Facebook</a></li>
                    <li><a href="https://t.me/icobench" title="<?php echo SYSTEM_NAME; ?> on Telegram" target="_blank">Telegram</a></li>
                </ul>
            </div>

            <div class="col_5">
                <h4>Legal</h4>
                <ul>
                    <li><a href="https://www.twitter.com/<?php echo SYSTEM_NAME; ?>" title="<?php echo SYSTEM_NAME; ?> on Twitter" target="_blank">Disclaimer</a></li>
                    <li><a href="https://www.facebook.com/<?php echo SYSTEM_NAME; ?>" title="<?php echo SYSTEM_NAME; ?> on Facebook" target="_blank">Terms Of Use</a></li>
                    <li><a href="https://t.me/icobench" title="<?php echo SYSTEM_NAME; ?> on Telegram" target="_blank">Privacy</a></li>
                    <li><a href="https://t.me/icobench" title="<?php echo SYSTEM_NAME; ?> on Telegram" target="_blank">General Info</a></li>
                </ul>
            </div>

        </div></div>
</footer>

</body>
</html>