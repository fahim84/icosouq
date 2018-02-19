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
        <h1 class='h1-title'>Welcome to the ICO</h1>
        ICO Souq is the Middle East’s leading destination for crypto insights with analysis and ratings on Initial Coin Offerings. Our portfolio is updated daily and available in English or Arabic.
        Get in touch with us for a concierge investment service or to promote your ICO.
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
                        <div class='button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'></div>
                    </div>
                </th>
            </tr>
        </table>
    </div>

    <!---- HOT ----->


    <div class="row">
        <table class="main-ico-table">
            <?php foreach($rows->result() as $row)
            {
                $image_url = $row->image == '' ? base_url().'uploads/icos/placeholder.png' : base_url().'uploads/icos/'.$row->image;

                $date = DateTime::createFromFormat("Y-m-d H:i:s",$row->end_date);
                $date2 = new DateTime();

                $days = $date2->diff($date)->format("%a");
                $hours = $date2->diff($date)->format("%H");
                $minutes = $date2->diff($date)->format("%i");

                ?>
            <tr>
                <td style='cursor:pointer;' onclick="window.location = 'ico/syncfab';">
                    <div class="row" style='position:relative;'>

                        <div class='db logo-div col-xs-4 col-sm-3 col-md-2 col-lg-2 col-xl-2'>
                            <div style='margin:5px 15px;'>
                                <a title="<?php echo $row->ico; ?>" href='ico/syncfab' style='text-decoration: none;'>
                                    <img src='<?php echo $image_url; ?>' class='project-logo' alt='<?php echo $row->ico; ?>'>
                                    <p style='text-align:center;'>
                                        <span style='font-size:9px;color:#00c170;text-transform:uppercase;font-weight:600;padding:2px;border: 1px solid #00c06d;background-color: #c4ffe8;'><?php echo $row->token_code; ?></span>
                                    </p>
                                </a>
                            </div>
                        </div>


                        <div class='db description-div  hidden-sm hidden-xs col-xs-8 col-sm-3 col-md-3 col-lg-3 col-xl-2'>
                            <div style='margin:15px;'>
                                <p class='project-info'><?php echo $row->description; ?></p>
                            </div>
                        </div>


                        <div class='db countdown-div hidden-xs col-xs-4 col-sm-3 col-md-3 col-lg-2 col-xl-2'>
                            <div style='margin-top:5px;'>
                                <p style='font-size:12px;margin:0px;'>ENDS IN:</p>
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

                        <div class='db button-div col-xs-4 col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                            <div style='text-align: center;'>
                                <a href='<?php echo base_url(); ?>welcome/detail?ico_id=<?php echo $row->ico_id; ?>' title='SyncFab ICO Details'><div class='progress-ico'>ICO Details</div></a>
                            </div>
                        </div>

                    </div>

                </td>
            </tr>
            <?php } ?>


        </table>
        <?php echo $pagination_links; ?>
    </div>


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

