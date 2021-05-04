<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amarbazarltd.com | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="<?php echo URL; ?>public/images/theme/intelliva.png">
    <!-- Switcher CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/switchery/switchery.min.css" />
    <!-- editor -->
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/summernote/summernote-bs4.css" />

    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/sweetalert/sweetalert.css" />
    <!-- Date time picker -->
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/pickadate/default.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/pickadate/default.date.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/pickadate/default.time.css" />
    <!-- Daterangepicker CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/daterangepicker/daterangepicker.css" />
    <!-- Morris CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/morris/morris.css" />
    
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/datatable/datatables.min.css" />
    
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/assets/plugin/dropzone/dropzone.min.css" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?php echo URL; ?>asset_admin/dist/css/style.css" />
    
</head>
<body>

    <div class="loader-wrapper">
        <div class="loader spinner-3">
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
            <div class="bg-primary"></div>
        </div>
    </div>
    
    <div class="wrapper">
        <!-- Main Container -->
        <div id="main-wrapper" class="menu-fixed page-hdr-fixed page-ftr-fixed">
            <!-- Menu Wrapper -->
            <div class="menu-wrapper">
                <div class="menu">
                    <!-- Menu Container -->
                    <ul> 
                        <li class="menu-title">Main</li>
                        <li class="has-sub" id="dashboard">
                            <a><i class="icon-screen-desktop"></i><span>Dashboard</span><i class="arrow"></i></a></i></a>
                            <ul class="sub-menu">
                                <li id="showdashboard">
                                    <a href="<?php echo URL; ?>mainmenu"><span>Show Dashboard</span></a>
                                </li>                                 
                                <li id="shownotice">
                                    <a href="<?php echo URL; ?>notice"><span>Notice</span></a>
                                </li>                                
                            </ul>
                        </li> 
                        <li class="no-sub" id="dashboard">
                            <a href="https://dotademy.com" target="_blank"><i class="icon-screen-desktop"></i><span>Dotademy Training</span><i class="arrow"></i></a></i></a>
                            
                        </li>
                        <li class="no-sub" id="dashboard">
                            <a href="https://nagbak.com/?page=nagbakpages&action=storeregister" target="_blank"><i class="icon-screen-desktop"></i><span>Amardokan Registration</span><i class="arrow"></i></a></i></a>
                            
                        </li>
                        <li class="menu-title">Operations</li>
                           <li class="has-sub" id="mnuablexpress">
                               <a><i class="far fa-sun"></i><span>ABL Express</span><i class="arrow"></i></a>
                               <ul class="sub-menu">
                                   <li id="subcidapplication">
                                       <a href="<?php echo URL; ?>rfidapp"><span>New RFID Application</span></a>
                                   </li>                               
                                   <li id="subcexistingidapp">
                                       <a href="<?php echo URL; ?>rfidappexisting"><span>Existing RFID Application</span></a>
                                   </li>  
                                   <li id="subcereissueidapp">
                                       <a href="<?php echo URL; ?>rfidappreissue"><span>Re-Issue RFID Application</span></a>
                                   </li>  
                                   <li id="subcashback">
                                       <a href="<?php echo URL; ?>cashbackorder"><span>Cashback Card Order</span></a>
                                   </li>
                                   <li id="activatecus">
                                       <a href="<?php echo URL; ?>cusactivate"><span>Cashback Card Activation</span></a>
                                   </li>   
                               </ul>
                           </li>
                            <li class="has-sub" id="businesssettings">
                                <a><i class="far fa-sun"></i><span>Team Operation</span><i class="arrow"></i></a>
                                <ul class="sub-menu">
                                    <li id="subcustomerreg">
                                        <a href="<?php echo URL; ?>customer"><span>Customer Registration</span></a>
                                    </li>                                
                                    <li id="subretailerreg">
                                        <a href="<?php echo URL; ?>retailer"><span>Retailer Registration</span></a>
                                    </li> 
                                    <li id="subplacement">
                                        <a href="<?php echo URL; ?>placement"><span>Retailer Placement</span></a>
                                    </li>
                                    <li id="subbcupgrade">
                                        <a href="<?php echo URL; ?>bcupgrade"><span>BC Upgrade</span></a>
                                    </li> 
                                    <li id="subpointupload">
                                        <a href="<?php echo URL; ?>bvupload"><span>BV Upload</span></a>
                                    </li> 
                                    <li id="subodcapply">
                                        <a href="<?php echo URL; ?>odcapply"><span>Get ODC</span></a>
                                    </li> 
                                    <li id="subbizstatus">
                                        <a href="<?php echo URL; ?>bizstatus"><span>My Business Status</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-title">Team Management</li>
                                <li class="has-sub" id="teammanagement">
                                    <a><i class="icon-layers"></i><span>Team Management</span><i class="arrow"></i></a>
                                    <ul class="sub-menu">
                                    
                                        <li id="submygen">
                                            <a href="<?php echo URL; ?>mygen"><span>My Generation</span></a>
                                        </li>   
                                                                    
                                    </ul>
                                </li>
                                <li class="menu-title">Information Update</li>
                                <li class="has-sub" id="mnuinfoupdate">
                                    <a><i class="icon-layers"></i><span>Information Update</span><i class="arrow"></i></a>
                                    <ul class="sub-menu">
                                    
                                        <li id="subgetotp">
                                            <a href="<?php echo URL; ?>getotp"><span>Get Confirmation Code</span></a>
                                        </li>  
                                        <li id="subexpgetotp">
                                            <a href="<?php echo URL; ?>expressotp"><span>Express Confirmation Code</span></a>
                                        </li>  
                                        <li id="subdisburseupd">
                                            <a href="<?php echo URL; ?>disbursementupdate"><span>Disbursement Update</span></a>
                                        </li>   
                                        <li id="subbintransfer">
                                            <a href="<?php echo URL; ?>bintransfer"><span>BIN Transfer</span></a>
                                        </li>                            
                                    </ul>
                                </li>
                        <li class="menu-title">Transactions</li>
                            <li class="has-sub" id="trunsactions">
                                <a><i class="icon-layers"></i><span>Sales</span><i class="arrow"></i></a>
                                <ul class="sub-menu">
                                   
                                    <li id="corppos">
                                        <a href="<?php echo URL; ?>corporateorder"><span>Corporate POS</span></a>
                                    </li>   
                                    <li id="mnupos">
                                        <a href="<?php echo URL; ?>pos"><span>Retailer POS</span></a>
                                    </li>
                                    <li id="mnucouponapply">
                                        <a href="<?php echo URL; ?>couponapply"><span>Apply Coupon</span></a>
                                    </li>      
                                    <li id="mnushoplist">
                                        <a href="<?php echo URL; ?>shoplist"><span>Shop List</span></a>
                                    </li>                          
                                </ul>
                            </li>
                            <li class="has-sub" id="mnuinventory">
                                <a><i class="icon-layers"></i><span>Inventory</span><i class="arrow"></i></a>
                                <ul class="sub-menu">
                                <li id="mnuorder">
                                        <a href="<?php echo URL; ?>buy"><span>Retail Order</span></a>
                                    </li> 
                                    <li id="ldcorder">
                                        <a href="<?php echo URL; ?>ldcorder"><span>LDC Order</span></a>
                                    </li> 
                                    <li id="subretailtransfer">
                                        <a href="<?php echo URL; ?>retailtransfer"><span>Stock Transfer</span></a>
                                    </li>                               
                                </ul>
                            </li>
                            <li class="has-sub" id="mnuaccounting">
                                <a><i class="icon-layers"></i><span>Accounts</span><i class="arrow"></i></a>
                                <ul class="sub-menu">
                                    <li id="subcomledger">
                                        <a href="<?php echo URL; ?>comledger"><span>Commission Ledger</span></a>
                                    </li>   
                                    <li id="subotherledger">
                                        <a href="<?php echo URL; ?>comledger/otherledger"><span>Other Ledger</span></a>
                                    </li>                       
                                </ul>
                            </li>
                        <!-- <li class="has-sub">
                            <a><i class="icon-note"></i><span>Forms</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form-basic.html"><span>Basic Form</span></a>
                                </li>
                                <li>
                                    <a href="form-layout.html"><span>Form Layout</span></a>
                                </li>
                                <li>
                                    <a href="form-mask.html"><span>Form Mask</span></a>
                                </li>
                                <li>
                                    <a href="date-time-picker.html"><span>Date Picker</span></a>
                                </li>
                                <li>
                                    <a href="file-upload.html"><span>File Upload</span></a>
                                </li>
                                <li>
                                    <a href="form-summernote.html"><span>SummerNote Editor</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a><i class="icon-cloud-download"></i><span>Buttons</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="button-bootstrap.html"><span>Bootstrap Buttons</span></a>
                                </li>
                                <li>
                                    <a href="button-material.html"><span>Material Buttons</span></a>
                                </li>
                                <li>
                                    <a href="button-air.html"><span>Air Buttons</span></a>
                                </li>

                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a><i class="icon-screen-tablet"></i><span>Tables</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="tables.html"><span>Basic Tables</span></a>
                                </li>
                                <li>
                                    <a href="datatables-basic.html"><span> Datatables Basic</span></a>
                                </li>
                                <li>
                                    <a href="datatables-advanced.html"><span> Datatables Advanced</span></a>
                                </li>
                                <li>
                                    <a href="datatables-datasource.html"><span> Datatables Datasource</span></a>
                                </li>
                                <li>
                                    <a href="datatables-api.html"><span> Datatables Api</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a><i class="icon-flag"></i><span>Icons</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="icon-fontawesome.html"><span>Font Awesome Icons</span></a>
                                </li>
                                <li>
                                    <a href="icon-themify.html"><span> Themify Icons</span></a>
                                </li>
                                <li>
                                    <a href="icon-simplelineicons.html"><span> Simple Line Icons</span></a>
                                </li>
                                <li>
                                    <a href="icon-weather.html"><span> Weather Icons</span></a>
                                </li>
                                <li>
                                    <a href="icon-cryptocoins.html"><span> Cryptocoins Icons</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a><i class="icon-puzzle"></i><span>Widgets</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="widget-general.html"><span>General Widgets</span></a>
                                </li>
                                <li>
                                    <a href="widget-chart.html"><span>Chart Widgets</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a><i class="icon-calendar"></i><span>Calendar</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="calendar-1.html"><span>Basic Calendar</span></a>
                                </li>
                                <li>
                                    <a href="calendar-2.html"><span>List View Calendar</span></a>
                                </li>
                                <li>
                                    <a href="calendar-3.html"><span>External Event Calendar</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a><i class="icon-chart"></i><span>Charts</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="charts-amcharts.html"><span>Am Stock Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html"><span>Chartjs Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-flot.html"><span>Flot Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-morris.html"><span>Morris Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-sparkline.html"><span>Sparkline Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-knob.html"><span>knob Charts</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a><i class="icon-compass"></i><span>Menu Level</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a><span>Second Level</span></a>
                                </li>
                                <li class="has-sub">
                                    <a><span>Second Level Child</span><i class="arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a><span>Second Level Child</span><i class="arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="menu-title">Pages</li>
                        <li class="has-sub">
                            <a><i class="icon-frame"></i><span>Chat App</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="chat-app.html"><span>Chat App</span></a>
                                </li>
                                <li>
                                    <a href="tickets-main.html"><span>Support Ticket</span></a>
                                </li>
                                <li>
                                    <a href="ticket-detail.html"><span>Ticket Detail</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-envelope-letter"></i><span>Mail Box</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="mailbox-main.html"><span>Mail Box</span></a>
                                </li>
                                <li>
                                    <a href="mailbox-compose.html"><span>Compose Mail</span></a>
                                </li>
                                <li>
                                    <a href="mailbox-details.html"><span>Mail Detail</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-emotsmile"></i><span>Timeline</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="timeline-1.html"><span>Timeline 1</span></a>
                                </li>
                                <li>
                                    <a href="timeline-2.html"><span>Timeline 2</span></a>
                                </li>
                                <li>
                                    <a href="timeline-3.html"><span>Timeline 3</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-people"></i><span>User</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="user-grid.html"><span>Users</span></a>
                                </li>
                                <li>
                                    <a href="user-details.html"><span>User Details</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="pricing-table.html"><i class="icon-calculator"></i><span>Pricing Table</span></a>
                        </li>
                        <li>
                            <a href="invoice.html"><i class="icon-wallet"></i><span>Invoice</span></a>
                        </li>
                        <li>
                            <a href="faq.html"><i class="icon-plus"></i><span>Faq</span></a>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-compass"></i><span>Custom Pages</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="login-1.html"><span>Login 1</span></a>
                                </li>
                                <li>
                                    <a href="login-2.html"><span>Login 2</span></a>
                                </li>
                                <li>
                                    <a href="error-403.html"><span>Error 403</span></a>
                                </li>
                                <li>
                                    <a href="error-404.html"><span>Error 404</span></a>
                                </li>
                                <li>
                                    <a href="error-503.html"><span>Error 503</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title">Layout</li>
                        <li class="has-sub">
                            <a><i class="ti-layout-width-full"></i><span>Layout</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="layout-wide.html"><span>Wide Layout</span></a>
                                </li>
                                <li>
                                    <a href="layout-boxed.html"><span>Boxed Layout</span></a>
                                </li>
                                <li>
                                    <a href="layout-static.html"><span>Static Layout</span></a>
                                </li>
                                <li>
                                    <a href="layout-fixed.html"><span>Fixed Layout</span></a>
                                </li>
                                <li>
                                    <a href="layout-collapse.html"><span>Collapsed Menu</span></a>
                                </li>
                                <li>
                                    <a href="layout-light.html"><span>Light Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="layout-dark.html"><span>Dark Sidebar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="ti-layout-sidebar-left"></i><span>Header Color</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="header-color-with-light-sidebar.html"><span>Wide Light Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="header-color-with-dark-sidebar.html"><span>Wide Dark Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="header-gradient.html"><span>Gradient</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="ti-layout-media-overlay-alt"></i><span>Footer</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="footer-light.html"><span>Light Footer</span></a>
                                </li>
                                <li>
                                    <a href="footer-dark.html"><span>Dark Footer</span></a>
                                </li>
                                <li>
                                    <a href="footer-transparent.html"><span>Footer Transparent</span></a>
                                </li>
                                <li>
                                    <a href="footer-fixed.html"><span>Footer Fixed</span></a>
                                </li>
                                <li>
                                    <a href="footer-components.html"><span>Footer Components</span></a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
            <!-- Page header -->
            <div class="page-hdr">
                <div class="row align-items-center">
                    <div class="col-4 col-md-7 page-hdr-left">
                        <!-- Logo Container -->
                        <div id="logo">
                            <div class="tbl-cell logo-icon">
                                <a href="#"><img src="<?php echo URL; ?>public/images/biz/powerimage.jpg" alt=""></a>
                            </div>
                            <div class="tbl-cell logo">
                                <a href="#"><img height="70" width="60" src="<?php echo URL; ?>public/images/biz/intelliva.png"></a>
                            </div>
                        </div>
                        <div class="page-menu menu-icon">
                            <a class="animated menu-close"><i class="far fa-hand-point-left"></i></a>
                        </div>
                        <div class="page-menu page-fullscreen">
                            <a><i class="fas fa-expand"></i></a>
                        </div>
                        <!-- <div class="page-search">
                            <input type="text" placeholder="Search your key....">
                        </div> -->
                    </div>
                    <div class="col-8 col-md-5 page-hdr-right">
                        <div class="page-hdr-desktop">
                            <div class="page-menu menu-dropdown-wrapper menu-user">
                                <a class="user-link">
                                    <span class="tbl-cell user-name pr-3 text-primary">Statement-<?php echo Session::get('sstno');?><span class="pl-2"><?php echo Session::get('susername');?></span></span>
                                    <span class="tbl-cell avatar"><img src="<?php echo URL; ?>asset_admin/uploads/author-4.jpg" alt=""></span>
                                </a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div> 
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head pb-3">
                                            <div class="tbl-cell">
                                                <img src="<?php echo URL; ?>asset_admin/uploads/author-1.jpg" alt="">
                                                <!-- <i class="fa fa-user-circle"></i> -->
                                            </div>
                                            <div class="tbl-cell pl-2 text-left">
                                                <p class="m-0 font-18"><?php echo Session::get('susername');?></p>
                                                <p class="m-0 font-14">User</p>
                                            </div>
                                        </div>
                                        
                                        <div class="menu-dropdown-body">
                                            <ul class="menu-nav">
                                                
                                                <li><a href="<?php echo URL;?>retailerprofile"><i class="icon-user"></i><span>My Profile</span></a></li>
                                               
                                            </ul>
                                        </div>
                                        <div class="menu-dropdown-footer text-right">
                                        <a href="<?php echo URL.'mainmenu/logout'; ?>" class="btn btn-outline btn-primary btn-pill btn-outline-2x font-12 btn-sm">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="page-menu menu-dropdown-wrapper menu-notification">
                                <a><i class="icon-bell"></i><span class="notification">20</span></a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div> 
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head">Notification</div>
                                        <div class="menu-dropdown-body">
                                            <ul class="timeline m-0">
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Wallet Adddes </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Coin Transferred from BTC<span class="badge badge-danger badge-pill badge-sm">Unpaid</span></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">BTC bought</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Server Restarted <span class="badge badge-success badge-pill badge-sm">Resolved</span></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">New order received</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="page-menu menu-dropdown-wrapper menu-quick-links">
                                <a><i class="icon-grid"></i></a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div> 
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head">Quick Links</div>
                                        <div class="menu-dropdown-body p-0">
                                            <div class="row m-0 box">
                                                <div class="col-6 p-0 box">
                                                    <a href="">
                                                        <i class="icon-emotsmile"></i>
                                                        <span>New Contact</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="">
                                                        <i class="icon-docs"></i>
                                                        <span>New Invoice</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="">
                                                        <i class="icon-calculator"></i>
                                                        <span>New Quote</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="">
                                                        <i class="icon-rocket"></i>
                                                        <span>New Expense</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="page-menu">
                                <a class="open-sidebar-right"><i class="icon-settings"></i><span></span></a>
                            </div> -->
                        </div>
                        <div class="page-hdr-mobile">
                            <div class="page-menu open-mobile-search">
                                <a href="#"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="page-menu open-left-menu">
                                <a href="#"><i class="icon-menu"></i></a>
                            </div>
                            <div class="page-menu oepn-page-menu-desktop">
                                <a href="#"><i class="icon-options-vertical"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>