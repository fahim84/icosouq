<!-- sidebar -->
<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">
        <nav>

            <ul class="main-navigation-menu">
                <?php $active_class = $selected_page == 'home' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/welcome/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-home"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Dashboard </span>
                            </div>
                        </div>
                    </a>
                </li>

                <?php $active_class = $selected_page == 'user' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/user/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Users </span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $active_class = $selected_page == 'dept' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/dept/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-layout-tab"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Departments </span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $active_class = $selected_page == 'group' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/group/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-layout-tab"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Groups </span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $active_class = $selected_page == 'organization' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/organization/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-layout-tab"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Organizations </span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $active_class = $selected_page == 'stakeholder' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/stakeholder/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Stakeholders </span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $active_class = $selected_page == 'interaction' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/interaction/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Interactions </span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $active_class = $selected_page == 'dropdown' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/dropdown/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Dropdowns </span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $active_class = $selected_page == 'template' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/template/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Notification Templates </span>
                            </div>
                        </div>
                    </a>
                </li>
                <?php $active_class = $selected_page == 'version' ? 'active open' : ''; ?>
                <li class="<?php echo $active_class; ?>">
                    <a href="<?php echo base_url(); ?>admin/appversions/">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-user"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> App Versions </span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>admin/login/logout">
                        <div class="item-content">
                            <div class="item-media">
                                <i class="ti-power-off"></i>
                            </div>
                            <div class="item-inner">
                                <span class="title"> Log out [<?php echo $_SESSION['user']->firstname; ?>] </span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
        </nav>
    </div>
</div>
<!-- / sidebar -->