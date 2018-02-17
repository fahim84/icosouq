<?php $this->load->view('header',$this->data); ?>
<div class="container">

    <div class="row" style='position:fixed;top:0px;background-color:#fefefe;z-index:100000;width:100%;max-width:1170px;border-bottom:1px gray solid;'>

        <a href='<?php echo base_url(); ?>'><img src='<?php echo base_url(); ?>assets/icosouq/images/logo3.png' style='width:120px;float:left;' alt='ICO Watch List' title='ICO Watch List'></a>

        <div class='main-menu'>
            <div class='menu-icon'><img src='<?php echo base_url(); ?>assets/icosouq/images/menu.png'></div>
            <!--<a href=''><div class='list-button' id='investors-list'>Investor's List</div></a>-->
            <div class="menu-box">
                <a href='live'><p class='menu-link'>Live ICO List</p></a>
                <a href='upcoming'><p class='menu-link'>Upcoming ICO List</p></a>
                <a href='finished'><p class='menu-link'>Closed ICO List</p></a>
                <a href='add-ico'><p class='menu-link'>Add ICO</p></a>
                <a href='blog'><p class='menu-link'>Our Blog</p></a>
                <a href='education'><p class='menu-link mobile-menu-link'>Full ICO Guide</p></a>
                <a href='statistics'><p class='menu-link mobile-menu-link'>ICO Statistics</p></a>
            </div>

            <div class='share-icon'><img src='<?php echo base_url(); ?>assets/icosouq/images/share.png'></div>
            <!--<a href=''><div class='list-button' id='investors-list'>Investor's List</div></a>-->
            <div class="share-box">
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>


        <div class='menu-link-header'>
            <a href='statistics'>STATISTICS</a>
        </div>
        <div class='menu-link-header'>
            <a href='education'>GUIDES</a>
        </div>
        <div class='menu-link-header'>
            <a href='<?php echo base_url(); ?>'>ICO LIST</a>
        </div>

    </div>


    <div class="row" style='margin-top:80px;padding:10px;'>
        <p>
        <h1 class='h1-title'>Welcome to the ICO Watch List!</h1>
        Discover the best ICO (initial coin offering) opportunities. Review this list daily to stay on top of the exponentially growing cryptocurrency & blockchain ecosystem.
        The projects on the ICO list are scanned and updated regularly, to help crypto investors make better investment decisions. Positions on this page such as gold & silver are sponsored and are <u>Not</u> an indicator of the quality of the ICO. <a href='<?php echo base_url(); ?>info/how-to-use-our-platform/' target='_blank'><b>Here</b></a> is more info on how to use our platform.
        </p>
    </div>

    <div class="row">

        <div class='table-tabs'>
            <a href='<?php echo base_url(); ?>live'>
                <div class='tab selected-tab'>
                    LIVE ICOs
                </div>
            </a>

            <a href='<?php echo base_url(); ?>upcoming'>
                <div class='tab'>
                    UPCOMING ICOs
                </div>
            </a>

            <a href='<?php echo base_url(); ?>finished'>
                <div class='tab'>
                    FINISHED ICOs
                </div>
            </a>
        </div>

        <div class='table-dropdown-div'>
            <select class='ico-table-dropdown'>
                <option value='live' selected>Live ICOs</option>
                <option value='upcoming'>Upcoming ICOs</option>
                <option value='finished'>Finished ICOs</option>
            </select>
        </div>
    </div>

    <script>
        $( ".ico-table-dropdown" ).change(function() {
            window.location.href = '<?php echo base_url(); ?>'+$(this).val();
        });
    </script>



    <div class="row">
        <table class="main-ico-table titles-table">
            <tr>
                <th>
                    <div class="row">
                        <div class='logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>PROJECT</div>
                        <div class='description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>INFO</div>
                        <div class='countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>TIME</div>
                        <div class='progress-div progress-div-title col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>PROGRESS</div>
                        <div class='button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'></div>
                    </div>
                </th>
            </tr>
        </table>
    </div>

    <!---- HOT ----->


    <div class="row">
        <table class="main-ico-table">
            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/syncfab';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/syncfab' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/syncfab.png' class='project-logo' alt='SyncFab ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Industry/Logistics</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Decentralized hardware manufacturing.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>25</p>
                                    <!-- 25 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>19</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:7%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>7%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/syncfab' title='SyncFab ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/repux';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/repux' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/repux.png' class='project-logo' alt='RepuX ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Data/Computing/AI</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>RepuX’s blockchain-backed platform enables Small and Medium Enterprises (SMEs) to securely sell their data,</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>16</p>
                                    <!-- 16 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>01</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:85%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>85%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/repux' title='RepuX ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/joy-token';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/joy-token' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/joy-token.png' class='project-logo' alt='Joy Token ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Betting/Gambling</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Joy Token is a new development platform specifically for the creation and marketing of online casino games.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>09</p>
                                    <!-- 9 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>01</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:89%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>89%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/joy-token' title='Joy Token ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/beat';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/beat' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/beat.png' class='project-logo' alt='BEAT ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Drugs/Health</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>BEAT is a SportAlliance project to help promote Sporting and Healthy activities.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>03</p>
                                    <!-- 3 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>05</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:87%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>87%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/beat' title='BEAT ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/sp8de';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/sp8de' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/sp8de.png' class='project-logo' alt='Sp8de ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Betting/Gambling</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Sp8de is a blockchain-based platform capable of supplying unbiased public randomness for developing and running distributed gaming apps.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>21</p>
                                    <!-- 21 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>21</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>24</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:64%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>64%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/sp8de' title='Sp8de ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/fcfl';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/fcfl' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/fcfl.png' class='project-logo' alt='FCFL ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Entertainment</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>The first professional sports league built on the blockchain and controlled by the fans.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <!-- 11 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>19</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>05</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:62%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>62%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/fcfl' title='FCFL ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/streamspace';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/streamspace' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/streamspace.png' class='project-logo' alt='StreamSpace ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Entertainment</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Blockchain powered Streaming Video on Demand. Connecting content creators directly with consumers. </p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>04</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:76%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>76%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/streamspace' title='StreamSpace ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/lucyd';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/lucyd' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/lucyd.png' class='project-logo' alt='Lucyd ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Gaming/AR/VR</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Join the Augmented Reality Revolution with Lucyd.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <!-- 11 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>07</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:91%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>91%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/lucyd' title='Lucyd ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/scrinium';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/scrinium' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/scrinium.png' class='project-logo' alt='Scrinium ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Prediction Market</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>The future of portfolio investment.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>21</p>
                                    <!-- 21 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:23%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>23%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/scrinium' title='Scrinium ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/opporty';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/opporty' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/opporty.png' class='project-logo' alt='Opporty ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Jobs/Marketplace</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Opporty is a decentralized service marketplace and self-regulated knowledge-sharing community platform.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>32</p>
                                    <!-- 32 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:35%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>35%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/opporty' title='Opporty ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/vestarin';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/vestarin' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/vestarin.png' class='project-logo' alt='Vestarin ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Payments/Wallets</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Cryptocurrency market place for goods and services.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>23</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:62%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>62%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/vestarin' title='Vestarin ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/clearcoin';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/clearcoin' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/clearcoin.png' class='project-logo' alt='Clearcoin ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Content/Advertising</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>ClearCoin is a technology company that powers the real-time buying and selling of media on decentralized applications and the broader digital environment.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>44</p>
                                    <!-- 44 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>19</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:68%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>68%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/clearcoin' title='Clearcoin ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/cryptaur';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/cryptaur' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/cryptaur.png' class='project-logo' alt='Cryptaur ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Commerce/Retail</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>dApps "launchpad" and global marketplace without middlemen.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>22</p>
                                    <!-- 22 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:78%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>78%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/cryptaur' title='Cryptaur ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/gilgamesh';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/gilgamesh' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/gilgamesh.png' class='project-logo' alt='Gilgamesh ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Education</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Knowledge-Sharing social network platform powered by Ethereum Blockchain.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>39</p>
                                    <!-- 39 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>03</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:46%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>46%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/gilgamesh' title='Gilgamesh ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/hoqu';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/hoqu' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/hoqu.png' class='project-logo' alt='HOQU ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Jobs/Marketplace</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>HOQU is the world's first Decentralized Affiliate Platform.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>08</p>
                                    <!-- 8 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:90%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>90%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/hoqu' title='HOQU ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/vlb';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/vlb' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/vlb.png' class='project-logo' alt='VLB ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Transportation</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>The number one blockchain fuel for the transport industry.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>52</p>
                                    <!-- 52 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>23</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:19%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>19%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/vlb' title='VLB ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/valoremfoundation';">
                    <div class="row" style='position:relative;'>
                        <img src='<?php echo base_url(); ?>assets/icosouq/images/gold-ico-light.png' style='position:absolute;top:0px;right:15px;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/valoremfoundation' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/valoremfoundation.png' class='project-logo' alt='Valorem Foundation ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Commerce/Retail</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Valorem Foundation is building a niche e-commerce platform for 99% of the market.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>160</p>
                                    <!-- 160 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>14</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:28%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>28%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/valoremfoundation' title='Valorem Foundation ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>


        </table>
    </div>





    <!---- REGULAR & STICKY----->
    <div class="row">
        <table class="main-ico-table"  style="border-top:0px;">
            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/worldwifi';">
                    <div class="row" style='position:relative;'>



                        <img src='<?php echo base_url(); ?>assets/icosouq/images/silver-ico-light.png' style='position:absolute;top:0px;right:15px;'>


                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/worldwifi' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/worldwifi.png' class='project-logo' alt='WorldWiFi ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>IoT</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Decentralized free wifi network powered by blockchain.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>26</p>
                                    <!-- 26 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>13</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>52</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:75%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>75%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/worldwifi' title='WorldWiFi ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/midex';">
                    <div class="row" style='position:relative;'>



                        <img src='<?php echo base_url(); ?>assets/icosouq/images/silver-ico-light.png' style='position:absolute;top:0px;right:15px;'>


                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/midex' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/midex.png' class='project-logo' alt='Midex ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Midex makes cryptocurrency use accessible to business, traders, and everyday users. Midex is a financial ecosystem which encompasses the needs of each economic agent through a fully licensed and encrypted exchange.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>59</p>
                                    <!-- 59 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:36%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>36%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/midex' title='Midex ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/bittoexchange';">
                    <div class="row" style='position:relative;'>



                        <img src='<?php echo base_url(); ?>assets/icosouq/images/silver-ico-light.png' style='position:absolute;top:0px;right:15px;'>


                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/bittoexchange' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/bittoexchange.png' class='project-logo' alt='BITTO Exchange ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Bitcoin Exchange with 6 in 1 consisting of Lending|Staking|Signal|Referral|Borrowing|Trading.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>47</p>
                                    <!-- 47 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:41%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>41%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/bittoexchange' title='BITTO Exchange ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/ceek';">
                    <div class="row" style='position:relative;'>



                        <img src='<?php echo base_url(); ?>assets/icosouq/images/silver-ico-light.png' style='position:absolute;top:0px;right:15px;'>


                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/ceek' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/ceek.png' class='project-logo' alt='CEEK ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Gaming/AR/VR</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Virtual Reality platform for streamed live events and productions.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>15</p>
                                    <!-- 15 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>16</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:44%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>44%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/ceek' title='CEEK ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/cryptonkafe';">
                    <div class="row" style='position:relative;'>



                        <img src='<?php echo base_url(); ?>assets/icosouq/images/silver-ico-light.png' style='position:absolute;top:0px;right:15px;'>


                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/cryptonkafe' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/cryptonkafe.png' class='project-logo' alt='Crypto N Kafe ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Commerce/Retail</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>First coffee trading ecosystem entirely supporting small-scale farmers, traders, roasters and retailers.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>37</p>
                                    <!-- 37 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>22</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:45%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>45%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/cryptonkafe' title='Crypto N Kafe ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/cryptohawk';">
                    <div class="row" style='position:relative;'>



                        <img src='<?php echo base_url(); ?>assets/icosouq/images/silver-ico-light.png' style='position:absolute;top:0px;right:15px;'>


                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/cryptohawk' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/cryptohawk.png' class='project-logo' alt='CryptoHawk ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>The world's first All-in-One solution for cryptocurrencies.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <!-- 11 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:80%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>80%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/cryptohawk' title='CryptoHawk ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/cryptotask';">
                    <div class="row" style='position:relative;'>



                        <img src='<?php echo base_url(); ?>assets/icosouq/images/silver-ico-light.png' style='position:absolute;top:0px;right:15px;'>


                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/cryptotask' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/cryptotask.png' class='project-logo' alt='Cryptotask ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Jobs/Marketplace</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>First fully scalable decentralized freelance task market.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>13</p>
                                    <!-- 13 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>22</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:50%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>50%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/cryptotask' title='Cryptotask ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/datx';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/datx' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/datx.png' class='project-logo' alt='DATx ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Content/Advertising</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>A Blockchain Empowered Digital Advertising Terminal.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>23</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>22</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:33%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>33%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/datx' title='DATx ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/the-coffee-token';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/the-coffee-token' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/the-coffee-token.png' class='project-logo' alt='The Coffee Token ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Industry/Logistics</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>First and only global decentralized ecosystem directly connecting coffee producers and consumers using the blockchain technology.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>45</p>
                                    <!-- 45 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>03</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:6%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>6%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/the-coffee-token' title='The Coffee Token ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/etheera';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/etheera' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/etheera.png' class='project-logo' alt='Etheera ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Real Estate</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>The Future of Real Estate with decentralized Portal + All in One Software Solution for the Agents.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>72</p>
                                    <!-- 72 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>20</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:9%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>9%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/etheera' title='Etheera ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/kryllio';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/kryllio' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/kryllio.png' class='project-logo' alt='Kryll.io ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Prediction Market</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Kryll.io bring professional trading tools to everyone by providing a simple yet powerful drag’n'drop strategy builder.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>32</p>
                                    <!-- 32 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>23</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:24%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>24%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/kryllio' title='Kryll.io ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/capdax';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/capdax' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/capdax.png' class='project-logo' alt='Capdax ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Payments/Wallets</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Capdax is one of the first exchanges that introduces premium customer service, social trading and infrastructure stability.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>27</p>
                                    <!-- 27 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>16</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:1%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>1%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/capdax' title='Capdax ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/hurify';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/hurify' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/hurify.png' class='project-logo' alt='Hurify ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>IoT</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>A Blockchain platform that aims to help SMEs build their IoT products & solution faster by connecting them to skilled IoT developers.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:61%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>61%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/hurify' title='Hurify ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/adamant-messenger';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/adamant-messenger' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/adamant-messenger.png' class='project-logo' alt='ADAMANT Messenger ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Social Network</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>The most secure and anonymous messenger, encrypted with Blockchain.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>42</p>
                                    <!-- 42 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>14</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>25</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:30%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>30%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/adamant-messenger' title='ADAMANT Messenger ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/cryptelo';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/cryptelo' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/cryptelo.png' class='project-logo' alt='Cryptelo ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Security/Identity</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Platform for encrypted data sharing.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>16</p>
                                    <!-- 16 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>04</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:64%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>64%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/cryptelo' title='Cryptelo ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/fox-trading';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/fox-trading' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/fox-trading.png' class='project-logo' alt='Fox Trading ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Prediction Market</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Exclusive Trading Service for Forex and Cryptocurrencies.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>20</p>
                                    <!-- 20 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>03</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>45</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:32%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>32%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/fox-trading' title='Fox Trading ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/smartrealty';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/smartrealty' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/smartrealty.png' class='project-logo' alt='SMARTRealty ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Real Estate</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>SMARTRealty is revolutionizing the real estate industry.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>88</p>
                                    <!-- 88 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>05</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:2%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>2%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/smartrealty' title='SMARTRealty ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/paygine';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/paygine' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/paygine.png' class='project-logo' alt='Paygine ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Paygine is an open financial platform designed to operate within its own proprietary banking structure and designed to serve crypto-business needs.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>16</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:83%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>83%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/paygine' title='Paygine ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/blocklancer';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/blocklancer' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/blocklancer.png' class='project-logo' alt='Blocklancer ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Jobs/Marketplace</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Blocklancer is a Decentralized Autonomous Job Market (DAJ) on the Ethereum platform.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <!-- 11 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>00</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:74%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>74%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/blocklancer' title='Blocklancer ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/wawllet';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/wawllet' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/wawllet.png' class='project-logo' alt='WAWLLET ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Asset Management</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>World’s first multi-asset wallet and personal financial passport.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>42</p>
                                    <!-- 42 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>21</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>05</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:31%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>31%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/wawllet' title='WAWLLET ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/globitex';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/globitex' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/globitex.png' class='project-logo' alt='Globitex ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>An institutional-grade cryptocurrency exchange allowing everyone to trade commodities and money market instruments for Bitcoin.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>32</p>
                                    <!-- 32 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>04</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:18%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>18%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/globitex' title='Globitex ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/paypro';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/paypro' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/paypro.png' class='project-logo' alt='PayPro ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Payments/Wallets</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>The first decentralized financial-marketplace as a DAO.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>09</p>
                                    <!-- 9 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>08</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:80%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>80%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/paypro' title='PayPro ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/helbizcoin';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/helbizcoin' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/helbizcoin.png' class='project-logo' alt='Helbiz Coin ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Transportation</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Helbiz is a decentralized transportation marketplace that makes renting a vehicle convenient, affordable and rewarding.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>15</p>
                                    <!-- 15 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>01</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:59%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>59%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/helbizcoin' title='Helbiz Coin ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/fabrictoken';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/fabrictoken' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/fabrictoken.png' class='project-logo' alt='Fabric Token ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Blockchain Platform</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Drag-and-drop smart contracts.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>44</p>
                                    <!-- 44 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>21</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:4%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>4%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/fabrictoken' title='Fabric Token ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/handelion';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/handelion' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/handelion.png' class='project-logo' alt='Handelion ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Commerce/Retail</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Handelion is a revolutionary blockchain ecosystem for co-funded wholesale trade.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>43</p>
                                    <!-- 43 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>22</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:60%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>60%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/handelion' title='Handelion ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/kyclegal';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/kyclegal' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/kyclegal.png' class='project-logo' alt='KYC.LEGAL ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Security/Identity</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>KYC.LEGAL is the identity verification platform on a blockchain.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <!-- 11 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:87%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>87%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/kyclegal' title='KYC.LEGAL ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/nativevideobox';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/nativevideobox' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/nativevideobox.png' class='project-logo' alt='Native Video Box ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Content/Advertising</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>An independent video distribution platform with native eco approach to advertising based on machine learning.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>58</p>
                                    <!-- 58 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>23</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:57%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>57%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/nativevideobox' title='Native Video Box ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/thrive';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/thrive' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/thrive.png' class='project-logo' alt='Thrive ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Content/Advertising</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Blockchain-based Decentralized Advertising Marketplace.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>48</p>
                                    <!-- 48 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>21</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:4%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>4%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/thrive' title='Thrive ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/astorgame';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/astorgame' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/astorgame.png' class='project-logo' alt='AstorGame ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Betting/Gambling</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>eSport & Online Gaming platform – Decentralized games, Sports Betting and Casino using blockchain, smart contracts + Provably Fair.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>71</p>
                                    <!-- 71 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:21%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>21%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/astorgame' title='AstorGame ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/multigames';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/multigames' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/multigames.png' class='project-logo' alt='MultiGames ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Betting/Gambling</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>The first gaming online casino based on Ethereum.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:79%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>79%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/multigames' title='MultiGames ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/otcrit';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/otcrit' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/otcrit.png' class='project-logo' alt='Otcrit ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Asset Management</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Advanced Cryptocurrency Exchange and Informational Marketplace.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>26</p>
                                    <!-- 26 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>04</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:6%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>6%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/otcrit' title='Otcrit ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/renteum';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/renteum' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/renteum.png' class='project-logo' alt='Renteum ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Real Estate</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Renteum is going to be the first of its kind to tie its token to real-estate in Scandinavia and England.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>51</p>
                                    <!-- 51 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:47%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>47%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/renteum' title='Renteum ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/ensbid';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/ensbid' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/ensbid.png' class='project-logo' alt='ENS.BID ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>IoT</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>ENS.BID focuses on offering the best identity, storage, and domain name service to the decentralized world of Ethereum.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>43</p>
                                    <!-- 43 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>12</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:48%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>48%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/ensbid' title='ENS.BID ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/wikibits';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/wikibits' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/wikibits.png' class='project-logo' alt='Wikibits ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Data/Computing/AI</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Be Part of the Next Generation Wiki.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>43</p>
                                    <!-- 43 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>16</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:60%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>60%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/wikibits' title='Wikibits ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/vestopia';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/vestopia' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/vestopia.png' class='project-logo' alt='Vestopia ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Vestopia is a decentralized peer-to-peer investment ecosystem connecting the mass population to wealth and investment opportunities in an unprecedented model.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>38</p>
                                    <!-- 38 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:39%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>39%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/vestopia' title='Vestopia ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/darico';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/darico' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/darico.png' class='project-logo' alt='Darico ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Asset Management</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'> Darico is an asset-backed cryptocurrency that’s been designed specifically to provide a safer, more accessible gateway to cryptocurrency investment than is currently available.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>162</p>
                                    <!-- 162 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:32%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>32%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/darico' title='Darico ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/corusblock';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/corusblock' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/corusblock.png' class='project-logo' alt='Corusblock ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Payments/Wallets</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Corusblock is the next generation of cryptocurrency. Lending, staking, mining- in best performance! This is Corusblock.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <!-- 11 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:59%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>59%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/corusblock' title='Corusblock ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/viso';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/viso' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/viso.png' class='project-logo' alt='VISO ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Payments/Wallets</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>VISO is a payment system that combines cryptocurrencies and traditional bank cards and terminals into one ecosystem.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>25</p>
                                    <!-- 25 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:76%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>76%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/viso' title='VISO ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/myoddzbet';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/myoddzbet' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/myoddzbet.png' class='project-logo' alt='MyOddz.bet ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Betting/Gambling</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Ethereum Blockchain Betting & Gambling with Profit Share.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>23</p>
                                    <!-- 23 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>04</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:17%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>17%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/myoddzbet' title='MyOddz.bet ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/colulocalnetwork';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/colulocalnetwork' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/colulocalnetwork.png' class='project-logo' alt='Colu Local Network ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Commerce/Retail</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>A decentralized payment system powered by everyday consumption.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>00</p>
                                    <!-- 0 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>23</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:73%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>73%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/colulocalnetwork' title='Colu Local Network ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/refereum';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/refereum' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/refereum.png' class='project-logo' alt='Refereum ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Jobs/Marketplace</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Refereum cuts out the marketing middleman by directly rewarding influencers and gamers to promote and play video games.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>22</p>
                                    <!-- 22 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:19%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>19%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/refereum' title='Refereum ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/credits';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/credits' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/credits.png' class='project-logo' alt='CREDITS ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>CREDITS Cryptocurrency and Blockchain platform for the financial industry with more than 1 mln tx/sec and 0.01 sec for a transaction.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <!-- 11 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>05</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:18%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>18%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/credits' title='CREDITS ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/mira';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/mira' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/mira.png' class='project-logo' alt='Mira ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Payments/Wallets</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Mira is a software suite for buying, storing and sending cryptocurrencies in an easy and convenient way.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>19</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:60%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>60%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/mira' title='Mira ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/remechain';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/remechain' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/remechain.png' class='project-logo' alt='Remechain ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Industry/Logistics</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>A Global Market place for the safe and secure trading of secondary metals.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>08</p>
                                    <!-- 8 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:73%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>73%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/remechain' title='Remechain ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/raison';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/raison' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/raison.png' class='project-logo' alt='RAISON ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>AI Platform for investment and personal finance.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:61%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>61%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/raison' title='RAISON ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/cryptotrustnetwork';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/cryptotrustnetwork' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/cryptotrustnetwork.png' class='project-logo' alt='Crypto Trust Network ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Security/Identity</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Protecting you from cryptocurrency fraud.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>05</p>
                                    <!-- 5 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>05</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:83%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>83%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/cryptotrustnetwork' title='Crypto Trust Network ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/vionex';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/vionex' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/vionex.png' class='project-logo' alt='Vionex ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>IoT</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Vionex is a revolutionary blockchain-based smart home system.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <!-- 11 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:87%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>87%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/vionex' title='Vionex ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/markspace';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/markspace' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/markspace.png' class='project-logo' alt='MARK.SPACE ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Commerce/Retail</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>Social & E-commerce VR-space, With Crypto-Economy powered by Blockchain.
                                </p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:70%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>70%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/markspace' title='MARK.SPACE ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/connectjob';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/connectjob' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/connectjob.png' class='project-logo' alt='Connectjob ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Jobs/Marketplace</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>ConnectJob is a disruptive platform which aims to be the “Uber of service”, bringing together a wide range of services to individuals in an all-in-one application and based on Blockchain technology.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'><a href='presale' style='color:#ffae00;font-weight:bold;'>PRESALE</a> ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>72</p>
                                    <!-- 72 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:52%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>52%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/connectjob' title='Connectjob ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/vaultbank';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/vaultbank' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/vaultbank.png' class='project-logo' alt='VaultBank ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Finance</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>A blueprint for disintermediated financial services.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>00</p>
                                    <!-- 0 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>11</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:99%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>99%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/vaultbank' title='VaultBank ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/dadi';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/dadi' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/dadi.png' class='project-logo' alt='DADI ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Data/Computing/AI</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>A new era of cloud computing services, powered by blockchain technology.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>10</p>
                                    <!-- 10 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>23</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:70%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>70%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/dadi' title='DADI ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/bitrent';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/bitrent' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/bitrent.png' class='project-logo' alt='BitRent ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Real Estate</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>First decentralized Blockchain construction platform.</p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>43</p>
                                    <!-- 43 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>22</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:66%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>66%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/bitrent' title='BitRent ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/eos';">
                    <div class="row" style='position:relative;'>




                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a href='ico/eos' style='text-decoration: none;'>
                                    <img src='<?php echo base_url(); ?>assets/icosouq/images/eos.png' class='project-logo' alt='EOS ICO'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'>Network/Communications</span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'>A powerful infrastructure for decentralized apps. </p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>			<div class='time-unit-div'>
                                    <p class='project-time'>105</p>
                                    <!-- 105 -->
                                    <p class='small-time'>Days</p>
                                </div>
                                <div class='time-unit-div'>
                                    <p class='project-time'>01</p>
                                    <p class='small-time'>Hours</p>
                                </div>
                                <div class='time-unit-div seconds'>
                                    <p class='project-time'>06</p>
                                    <p class='small-time'>Minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class='db progress-div col-xs-4 col-sm-4 col-md-2 col-lg-3 col-xl-2'>
                            <div class='progress-rating'>
                                <div class='progress-frame'>
                                    <div style='width:69%;' class='prograss-fill'></div>
                                </div>
                                <p style='text-align:center;font-size:14px;color: #7b7b7b;'>69%</p>
                            </div>
                        </div>

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='ico/eos' title='EOS ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>


        </table>
    </div>
    <img src='<?php echo base_url(); ?>assets/icosouq/images/ico-details-button-b.png' style='display:none;width:0px;height:0px;'>

    <!---- Junior ----->
    <p class='junior-title'>More Live ICOs</p>
    <div class="row">
        <table class="main-ico-table junior">
            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/outing';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Outing</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>The first community app dedica...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-18 23:59:59 UTC+1</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/outing' class='project-link-junior'>Outing ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/taklimakannetwork';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Taklimakan Network</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>The Blockchain Investment Plat...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-20 10:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/taklimakannetwork' class='project-link-junior'>Taklimakan Network ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/dapcash';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>DapCash</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>First post-quantum crypto curr...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-21 00:00:00 UTC+7</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/dapcash' class='project-link-junior'>DapCash ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/viewly';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Viewly</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Viewly is a decentralized vide...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-21 08:18:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/viewly' class='project-link-junior'>Viewly ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/biofactorycoin';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>BioFactoryCoin</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>BioFactoryCoin (BFC) the first...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-21 22:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/biofactorycoin' class='project-link-junior'>BioFactoryCoin ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/localworldforwarders';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Local World Forwarders</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Local World Forwarders is the ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-23 12:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/localworldforwarders' class='project-link-junior'>Local World Forwarders ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/rentberry';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Rentberry</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Decentralized Home Rental Plat...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-28 00:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/rentberry' class='project-link-junior'>Rentberry ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/pitch';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Pitch</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Entrepreneurs and Startups can...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-28 05:54:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/pitch' class='project-link-junior'>Pitch ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/chainid';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Chain ID</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Platform for keeping personal ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-28 07:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/chainid' class='project-link-junior'>Chain ID ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/minerdog';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>MinerDog</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>MinerDog coin pays you monthly...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-28 23:59:59 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/minerdog' class='project-link-junior'>MinerDog ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/napoleonx';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>NapoleonX</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>The first 100% algorithmic cry...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-28 23:59:59 UTC+1</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/napoleonx' class='project-link-junior'>NapoleonX ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/deex';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>DEEX</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>The first ever created decentr...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-02-28 23:59:59 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/deex' class='project-link-junior'>DEEX ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/synthestech';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Synthestech</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Synthestech is a scientific re...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-01 00:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/synthestech' class='project-link-junior'>Synthestech ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/daneel';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Daneel</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Daneel purpose is to bring dat...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-05 13:21:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/daneel' class='project-link-junior'>Daneel ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/serenity';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Serenity</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>The First Blockchain Escrow fo...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-07 23:59:59 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/serenity' class='project-link-junior'>Serenity ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/dogezer';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Dogezer</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>DoSoftwareTogether - Dogezer i...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-08 13:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/dogezer' class='project-link-junior'>Dogezer ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/travelchainproject';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>TravelChain Project</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>DECENTRALIZED DATA EXCHANGE FO...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-12 14:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/travelchainproject' class='project-link-junior'>TravelChain Project ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/dragoninc';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Dragon Inc</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Bringing Gaming into the 21st ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-15 08:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/dragoninc' class='project-link-junior'>Dragon Inc ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/denaro';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>DENARO</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Cryptocurrency wallet and worl...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-15 11:59:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/denaro' class='project-link-junior'>DENARO ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/echat';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>e-Chat</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Blockchain-based decentralized...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-15 12:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/echat' class='project-link-junior'>e-Chat ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/aiom';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>AIOM</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Medical analysis and research ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-15 12:00:00 UTC+2</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/aiom' class='project-link-junior'>AIOM ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/egold';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>eGold</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>The ultimate eSports betting c...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-18 20:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/egold' class='project-link-junior'>eGold ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/exenium';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Exenium</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>EXENIUM is a fully-functional ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-26 00:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/exenium' class='project-link-junior'>Exenium ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/booleancoin';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Booleancoin</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Booleancoin Powers Boolean, A ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-27 00:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/booleancoin' class='project-link-junior'>Booleancoin ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/crowdholding';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Crowdholding</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>A Decentralized Open Innovatio...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-31 10:00:00 UTC+2</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/crowdholding' class='project-link-junior'>Crowdholding ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/beefcoin';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>BeefCoin</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Integrated production of organ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-31 12:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/beefcoin' class='project-link-junior'>BeefCoin ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/fortysevenbank';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Forty Seven Bank</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Forty Seven Bank is financial ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-31 13:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/fortysevenbank' class='project-link-junior'>Forty Seven Bank ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/tutellus';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Tutellus</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>The platform that pays you for...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-31 19:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/tutellus' class='project-link-junior'>Tutellus ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/eroiy';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Eroiy</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>The anonymous and safe payment...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-03-31 23:59:59 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/eroiy' class='project-link-junior'>Eroiy ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/ether-legends-elet';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Ether Legends (ELET)</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Ethereum Based Collectible Tra...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-04-04 00:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/ether-legends-elet' class='project-link-junior'>Ether Legends (ELET) ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/mosaic';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>Mosaic</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Decentralized Market Intellige...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-04-12 20:56:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/mosaic' class='project-link-junior'>Mosaic ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>

            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/ficnetwork';">
                    <div class="row">
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-name-junior'>FIC Network</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <p class='project-info-junior'>Earn and Pay Interest on Your ...</p>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div style='float:left;width:50%;'>
                                <p class='project-date-junior'>2018-05-15 12:00:00 UTC</p>
                            </div>
                            <div style='float:left;width:50%;'>
                                <a href='ico/ficnetwork' class='project-link-junior'>FIC Network ICO Details</a>									</div>
                        </div>
                    </div>

                </td>
            </tr>


        </table>
    </div>




    <p class='' Style='margin:15px 10px 5px 0px;font-size:14px;font-weight:600;color:red;'>
        * Kindly note that by making use of the ICOWatchlist platform, you agree to our <a href='disclaimer'>Disclaimer</a> & <a href='terms'>TOU</a> and are aware of the fact that <u>the platform does NOT give investment advice</u>. It is prudent to do your own research.
    </p>

    <p class='' Style='margin:5px 10px 25px 0px;font-size:14px;'>
        ** Gold & Silver are sponsored positions.
    </p>



    <div class='row footer-div footer-center'>
        <a href='https://twitter.com/icowatchlist' target='_blank'><img src='<?php echo base_url(); ?>assets/icosouq/images/twitter.jpg' style='margin:10px;' border='0'></a>
        <a href='https://t.me/joinchat/FrpyWkHXf62SVjzPrYwUJw' target='_blank'><img src='<?php echo base_url(); ?>assets/icosouq/images/telegram.jpg' style='margin:10px;' border='0'></a>
    </div>

    <div class='row footer-div' style='background-color:#ededed;'>

        <div class='col-xs-6 col-sm-4 col-md-2' style='margin-bottom:20px;'>
            <h4 class='footer-title'>ICO List</h4>
            <p class='footer-menu-link'><a href='live'>Live ICO</a></p>
            <p class='footer-menu-link'><a href='upcoming'><span class='footer-menu-link'>Upcoming ICO</a></p>
            <p class='footer-menu-link'><a href='finished'><span class='footer-menu-link'>Finished ICO</a></p>
            <p class='footer-menu-link'><a href='https://play.google.com/store/apps/details?id=com.icowatchlist.icowatchlist&hl=en' target='_blank'><span class='footer-menu-link'>Android App</a> <font style='color:red;font-size:7px;'>NEW</font></p>

        </div>
        <div class='col-xs-6 col-sm-4 col-md-2' style='margin-bottom:20px;'>
            <h4 class='footer-title'>Website</h4>
            <p class='footer-menu-link'><a href='about'><span class='footer-menu-link'>About Us</a></p>
            <p class='footer-menu-link'><a href='contact'><span class='footer-menu-link'>Contact Us</a></p>
            <p class='footer-menu-link'><a href='<?php echo base_url(); ?>blog/'>Our Blog</a></p>
            <p class='footer-menu-link'><a href='add-ico'><span class='footer-menu-link'>Add Your ICO</a></p>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-2' style='margin-bottom:20px;'>
            <h4 class='footer-title'>Research & Data</h4>
            <p class='footer-menu-link'><a href='education'><span class='footer-menu-link'>ICO Guide</a></p>
            <p class='footer-menu-link'><a href='statistics'><span class='footer-menu-link'>ICO Statistics</a></p>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-2' style='margin-bottom:20px;'>
            <h4 class='footer-title'>Social</h4>
            <p class='footer-menu-link'><a href='https://twitter.com/icowatchlist' target='_blank'><span class='footer-menu-link'>Twitter</a></p>
            <p class='footer-menu-link'><a href='https://www.facebook.com/icowatchlist/' target='_blank'><span class='footer-menu-link'>Facebook</a></p>
            <p class='footer-menu-link'><a href='https://t.me/joinchat/FrpyWkHXf62SVjzPrYwUJw'  target='_blank'><span class='footer-menu-link'>Telegram</a></p>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-2' style='margin-bottom:20px;'>
            <h4 class='footer-title'>Developers</h4>
            <p class='footer-menu-link'><a href='tools/sticker'>Stickers</a></p>
            <p class='footer-menu-link'><a href='tools/widget'><span class='footer-menu-link'>ICO List Widget</a></p>
            <p class='footer-menu-link'><a href='tools/stats-widget'><span class='footer-menu-link'>ICO Stats Widgets</a></p>
            <p class='footer-menu-link'><a href='tools/api'><span class='footer-menu-link'>API</a></p>
        </div>
        <div class='col-xs-6 col-sm-4 col-md-2' style='margin-bottom:20px;'>
            <h4 class='footer-title'>Legal</h4>
            <p class='footer-menu-link'><a href='disclaimer'><span class='footer-menu-link'>Disclaimer</a></p>
            <p class='footer-menu-link'><a href='terms'><span class='footer-menu-link'>Terms Of Use</a></p>
            <p class='footer-menu-link'><a href='privacy'><span class='footer-menu-link'>Privacy</a></p>
            <p class='footer-menu-link'><a href='info'><span class='footer-menu-link'>General Info</a></p>
        </div>





    </div>


</div>


<?php $this->load->view('footer',$this->data); ?>

