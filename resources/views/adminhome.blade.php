<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><title>
            UNHCR Refugee Assistance Information System
        </title><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
                <!-- Open Sans font from Google CDN -->
                <link href="./UNHCR Refugee Assistance Information System_files/css" rel="stylesheet" type="text/css">
        
                <link rel="shortcut icon" type="image/x-icon" href="https://raislibya.azurewebsites.net//favicon.ico">
                <!--Bootstrap-->
        
                <!-- Pixel Admin's stylesheets -->
                <link href="./UNHCR Refugee Assistance Information System_files/bootstrap.min.css" rel="stylesheet" type="text/css">
                <link href="./UNHCR Refugee Assistance Information System_files/pixel-admin.min.css" rel="stylesheet" type="text/css">
                <link href="./UNHCR Refugee Assistance Information System_files/widgets.min.css" rel="stylesheet" type="text/css">
                <link href="./UNHCR Refugee Assistance Information System_files/pages.min.css" rel="stylesheet" type="text/css">
                <link href="./UNHCR Refugee Assistance Information System_files/rtl.min.css" rel="stylesheet" type="text/css">
                <link href="./UNHCR Refugee Assistance Information System_files/themes.min.css" rel="stylesheet" type="text/css">
        
                <link href="./UNHCR Refugee Assistance Information System_files/bootstrap-submenu.min.css" rel="stylesheet">
        
                <link href="./UNHCR Refugee Assistance Information System_files/font-awesome.min.css" rel="stylesheet">
        
                
                <link href="./UNHCR Refugee Assistance Information System_files/kendo.common.min.css" rel="stylesheet">
                <link href="./UNHCR Refugee Assistance Information System_files/kendo.material.min.css" rel="stylesheet">
                <link href="./UNHCR Refugee Assistance Information System_files/kendo.dataviz.min.css" rel="stylesheet">
                <link href="./UNHCR Refugee Assistance Information System_files/kendo.dataviz.material.min.css" rel="stylesheet">
                <script async="" src="//www.google-analytics.com/analytics.js"></script><script async="" src="./UNHCR Refugee Assistance Information System_files/analytics.js.download"></script><script src="./UNHCR Refugee Assistance Information System_files/jquery.min.js.download" type="text/javascript"></script>
                <script src="./UNHCR Refugee Assistance Information System_files/jszip.min.js.download" type="text/javascript"></script>
                <script src="./UNHCR Refugee Assistance Information System_files/kendo.all.min.js.download" type="text/javascript"></script>
                
                <link href="./UNHCR Refugee Assistance Information System_files/RAIS_StyleSheet.css" rel="stylesheet" type="text/css">
                <script type="text/javascript">
                    kendo.pdf.defineFont({
                        "DejaVu Sans": "http://cdn.kendostatic.com/2014.3.1314/styles/fonts/DejaVu/DejaVuSans.ttf",
                        "DejaVu Sans|Bold": "http://cdn.kendostatic.com/2014.3.1314/styles/fonts/DejaVu/DejaVuSans-Bold.ttf",
                        "DejaVu Sans|Bold|Italic": "http://cdn.kendostatic.com/2014.3.1314/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf",
                        "DejaVu Sans|Italic": "http://cdn.kendostatic.com/2014.3.1314/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf"
                    });
                </script>
        
                <!-- Load Pako ZLIB library to enable PDF compression -->
                <script src="./UNHCR Refugee Assistance Information System_files/pako_deflate.min.js.download" type="text/javascript"></script>
                <!--[if lt IE 9]>
                <script src="assets/javascripts/ie.min.js"></script>
                <![endif]-->
        
                <script type="text/javascript">
                    var path = window.location.pathname;
                    var page = path.split("/").pop();
                    var username = 'R.Alabdali';
                    (function (i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date(); a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        
                    ga('create', 'UA-60937969-1', 'auto');
                    ga('set', 'userId', username);
                    ga('send', 'pageview');
                    if (window.performance) {
                        var timeSincePageLoad = Math.round(performance.now());
                        ga('send', 'timing', page, 'load', timeSincePageLoad);
                    }
                </script>
                <style type="text/css">
                    .ResponsiveGrid {
                        table-layout: inherit !important;
                    }
                    .RadLabel_Material {
                        font-family: inherit !important;
                    }
                    /*Samah*/
                    .modal.right.fade .modal-dialog {
                      position: fixed;
                        top: 250px;      
                       right: -320px;
                        -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
                        -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
                        -o-transition: opacity 0.3s linear, right 0.3s ease-out;
                        transition: opacity 0.3s linear, right 0.3s ease-out;
                        float: right;
                        width: 400px;
                        color: #fff;
        
                    }
                    .modal.right.fade.in .modal-dialog {
                        position: fixed;
                        right: 0;
                        top: 120px;
                        margin: 0;
                        width: 400px;
                    }
        
                    /* ----- MODAL STYLE ----- */
                    .modal-content {
                        border-radius: 0;
                        border: none;
                        background: #444;
                    }
        
                    .modal-header {
                        border-bottom-color: #EEEEEE;
                        background-color: #444;
                    }
        
                    /* ----- v CAN BE DELETED v ----- */
                    body {
                        background-color: #78909C;
                    }
        
                    .demo {
                        padding-top: 60px;
                        padding-bottom: 110px;
                    }
        
                    .btn-demo {
                        font-size: 21px;
                        position: fixed;
                        right: -10px;
                        top: 120px;
                        background: #444;
                        line-height: 40px;
                        color: #fff;
                        border-radius: 5px 0 0 5px;
                        z-index: 99999;
                        transition: color .3s;
                        width: 50px;
                        height: 40px;
                        padding: 0 10px 0 0;
                        border: 0;
                    }
        
                        .btn-demo:focus {
                            outline: 0;
                        }
        
                    /*Samah*/
                </style>
        
            <link href="./UNHCR Refugee Assistance Information System_files/fonticons.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/MaterialRipple.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/WindowLite.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Window.Material.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Label.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Label.Material.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Window.Bootstrap.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Ajax.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Ajax.Bootstrap.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/InputLite.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Input.Bootstrap.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/ComboBoxLite.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/ComboBox.Bootstrap.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/CalendarLite.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Calendar.Bootstrap.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/ButtonLite.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Button.Bootstrap.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Button.Bootstrap.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/common.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/GridLite.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Grid.Bootstrap.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/NotificationLite.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Notification.Metro.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Button.Metro.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/MenuLite.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><link href="./UNHCR Refugee Assistance Information System_files/Menu.Metro.css" type="text/css" rel="stylesheet" class="Telerik_stylesheet"><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style>
        #demo-themes {
         display: table;
         table-layout: fixed;
         width: 100%;
         border-bottom-left-radius: 5px;
         overflow: hidden;
        }
        #demo-themes .demo-themes-row {
         display: block;
        }
        #demo-themes .demo-theme {
         display: block;
         float: left;
         text-align: center;
         width: 50%;
         padding: 25px 0;
         color: #888;
         position: relative;
         overflow: hidden;
        }
        #demo-themes .demo-theme:hover {
         color: #fff;
        }
        #demo-themes .theme-preview {
         width: 100%;
         position: absolute;
         top: 0;
         left: 0;
         bottom: 0;
         overflow: hidden !important;
        }
        #demo-themes .theme-preview img {
         width: 100%;
         position: absolute;
         display: block;
         top: 0;
         left: 0;
        }
        #demo-themes .demo-theme .overlay {
         background: #1d1d1d;
         background: rgba(0,0,0,.8);
         position: absolute;
         top: 0;
         bottom: 0;
         left: -100%;
         width: 100%;
        }
        #demo-themes .demo-theme span {
         position: relative;
         color: #fff;
         color: rgba(255,255,255,0);
        }
        #demo-themes .demo-theme span,
        #demo-themes .demo-theme .overlay {
         -webkit-transition: all .3s;
         -moz-transition: all .3s;
         -ms-transition: all .3s;
         -o-transition: all .3s;
         transition: all .3s;
        }
        #demo-themes .demo-theme.active span,
        #demo-themes .demo-theme:hover span {
         color: #fff;
         color: rgba(255,255,255,1);
        }
        #demo-themes .demo-theme.active .overlay,
        #demo-themes .demo-theme:hover .overlay {
         left: 0;
        }
        #demo-settings {
         position: fixed;
         right: -270px;
         width: 270px;
         top: 70px;
         padding-right: 10px;  
         background: #333;
         border-radius: 5px;
         -webkit-transition: all .3s;
         -moz-transition: all .3s;
         -ms-transition: all .3s;
         -o-transition: all .3s;
         transition: all .3s;
         -webkit-touch-callout: none;
         -webkit-user-select: none;
         -khtml-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         z-index: 999998;
        }
        #demo-settings.open {
         right: -10px;
        }
        #demo-settings > .header {
         position: relative;
         z-index: 100000;
         line-height: 20px;
         background: #444;
         color: #fff;
         font-size:  11px;
         font-weight: 600;
         padding: 10px 20px;
         margin: 0;
        }
        #demo-settings > div {
         position: relative;
         z-index: 100000;
         background: #282828;
         border-bottom-right-radius: 5px;
         border-bottom-left-radius: 5px;
        }
        #demo-settings-toggler {
         font-size: 21px;
         width: 50px;
         height: 40px;
         padding-right: 10px;
         position: absolute;
         left: -40px;
         top: 0;
         background: #444;
         text-align: center;
         line-height: 40px;
         color: #fff;
         border-radius: 5px;
         z-index: 99999;
         text-decoration: none !important;
         -webkit-transition: color .3s;
         -moz-transition: color .3s;
         -ms-transition: color .3s;
         -o-transition: color .3s;
         transition: color .3s;
        }
        #demo-settings.open #demo-settings-toggler {
         font-size: 16px;
         color: #888;
        }
        #demo-settings.open #demo-settings-toggler:hover {
         color: #fff;
        }
        #demo-settings.open #demo-settings-toggler:before {
         content: "\f00d";
        }
        #demo-settings-list {
         padding: 0;
         margin: 0;
        }
        #demo-settings-list li {
         padding: 0;
         margin: 0;
         list-style: none;
         position: relative;
        }
        #demo-settings-list li > span {
         line-height: 20px;
         color: #fff;
         display: block;
         padding: 12px 20px;
         cursor: pointer;
        }
        #demo-settings-list li + li {
         border-top: 1px solid #333;
        }
        #demo-settings .demo-checkbox {
         position: absolute;
         right: 20px;
         top: 12px;
        }
        .right-to-left #demo-settings {
         left: -270px;
         right: auto;
         padding-right: 0;
         padding-left: 10px;
        }
        .right-to-left #demo-settings.open {
         left: -10px;
         right: auto;
        }
        .right-to-left #demo-settings-toggler {
         padding-left: 10px;
         padding-right: 0;
         left: auto;
         right: -40px;
        }
        .right-to-left #demo-settings .demo-checkbox {
         right: auto;
         left: 20px;
        }
        </style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style>
        #demo-themes {
         display: table;
         table-layout: fixed;
         width: 100%;
         border-bottom-left-radius: 5px;
         overflow: hidden;
        }
        #demo-themes .demo-themes-row {
         display: block;
        }
        #demo-themes .demo-theme {
         display: block;
         float: left;
         text-align: center;
         width: 50%;
         padding: 25px 0;
         color: #888;
         position: relative;
         overflow: hidden;
        }
        #demo-themes .demo-theme:hover {
         color: #fff;
        }
        #demo-themes .theme-preview {
         width: 100%;
         position: absolute;
         top: 0;
         left: 0;
         bottom: 0;
         overflow: hidden !important;
        }
        #demo-themes .theme-preview img {
         width: 100%;
         position: absolute;
         display: block;
         top: 0;
         left: 0;
        }
        #demo-themes .demo-theme .overlay {
         background: #1d1d1d;
         background: rgba(0,0,0,.8);
         position: absolute;
         top: 0;
         bottom: 0;
         left: -100%;
         width: 100%;
        }
        #demo-themes .demo-theme span {
         position: relative;
         color: #fff;
         color: rgba(255,255,255,0);
        }
        #demo-themes .demo-theme span,
        #demo-themes .demo-theme .overlay {
         -webkit-transition: all .3s;
         -moz-transition: all .3s;
         -ms-transition: all .3s;
         -o-transition: all .3s;
         transition: all .3s;
        }
        #demo-themes .demo-theme.active span,
        #demo-themes .demo-theme:hover span {
         color: #fff;
         color: rgba(255,255,255,1);
        }
        #demo-themes .demo-theme.active .overlay,
        #demo-themes .demo-theme:hover .overlay {
         left: 0;
        }
        #demo-settings {
         position: fixed;
         right: -270px;
         width: 270px;
         top: 70px;
         padding-right: 10px;  
         background: #333;
         border-radius: 5px;
         -webkit-transition: all .3s;
         -moz-transition: all .3s;
         -ms-transition: all .3s;
         -o-transition: all .3s;
         transition: all .3s;
         -webkit-touch-callout: none;
         -webkit-user-select: none;
         -khtml-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         z-index: 999998;
        }
        #demo-settings.open {
         right: -10px;
        }
        #demo-settings > .header {
         position: relative;
         z-index: 100000;
         line-height: 20px;
         background: #444;
         color: #fff;
         font-size:  11px;
         font-weight: 600;
         padding: 10px 20px;
         margin: 0;
        }
        #demo-settings > div {
         position: relative;
         z-index: 100000;
         background: #282828;
         border-bottom-right-radius: 5px;
         border-bottom-left-radius: 5px;
        }
        #demo-settings-toggler {
         font-size: 21px;
         width: 50px;
         height: 40px;
         padding-right: 10px;
         position: absolute;
         left: -40px;
         top: 0;
         background: #444;
         text-align: center;
         line-height: 40px;
         color: #fff;
         border-radius: 5px;
         z-index: 99999;
         text-decoration: none !important;
         -webkit-transition: color .3s;
         -moz-transition: color .3s;
         -ms-transition: color .3s;
         -o-transition: color .3s;
         transition: color .3s;
        }
        #demo-settings.open #demo-settings-toggler {
         font-size: 16px;
         color: #888;
        }
        #demo-settings.open #demo-settings-toggler:hover {
         color: #fff;
        }
        #demo-settings.open #demo-settings-toggler:before {
         content: "\f00d";
        }
        #demo-settings-list {
         padding: 0;
         margin: 0;
        }
        #demo-settings-list li {
         padding: 0;
         margin: 0;
         list-style: none;
         position: relative;
        }
        #demo-settings-list li > span {
         line-height: 20px;
         color: #fff;
         display: block;
         padding: 12px 20px;
         cursor: pointer;
        }
        #demo-settings-list li + li {
         border-top: 1px solid #333;
        }
        #demo-settings .demo-checkbox {
         position: absolute;
         right: 20px;
         top: 12px;
        }
        .right-to-left #demo-settings {
         left: -270px;
         right: auto;
         padding-right: 0;
         padding-left: 10px;
        }
        .right-to-left #demo-settings.open {
         left: -10px;
         right: auto;
        }
        .right-to-left #demo-settings-toggler {
         padding-left: 10px;
         padding-right: 0;
         left: auto;
         right: -40px;
        }
        .right-to-left #demo-settings .demo-checkbox {
         right: auto;
         left: 20px;
        }
        </style></head>
<body class="theme-default main-menu-animated no-main-menu dont-animate-mm-content-sm animate-mm-md animate-mm-lg dont-animate-mm-content-sm animate-mm-md animate-mm-lg modal-open" style="height: 100%;">
    <link href="./UNHCR Refugee Assistance Information System_files/TelerikFix.css" rel="stylesheet">
    <script>var init = [];</script>
    <!-- Demo script -->
    <script src="./UNHCR Refugee Assistance Information System_files/demo.min.js.download"></script>
    <!-- / Demo script -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9TX8Z" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="main-wrapper">
        <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
            <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
            <div class="navbar-inner">
                <div class="navbar-header">
                    <a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx" class="navbar-brand">
                        <div>
                            <img src="./UNHCR Refugee Assistance Information System_files/main-navbar-logo.png" alt="RAIS">
                        </div>
                         <span id="toplable">UNHCR  RAIS</span>

                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>
                </div>


                <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                    <div id="mainMenuMaster">
                        <div class="right clearfix">
                            <ul class="nav navbar-nav pull-right right-navbar-nav">
                            </ul>
                        </div>
                    <ul class="nav navbar-nav"><li></li><li class="dropdown" runat="server" id="m1"><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-icon fa fa-group">&nbsp;&nbsp;</span>Cases Information</a><ul class="dropdown-menu"><li><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx"><span class="menu-icon fa fa-search">&nbsp;&nbsp;</span>Search Cases</a></li></ul></li><li class="dropdown" runat="server" id="m55"><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-icon fa fa-ticket">&nbsp;&nbsp;</span>Ticketing</a><ul class="dropdown-menu"><li><a href="https://raislibya.azurewebsites.net/InfoLine/NewTicket.aspx"><span class="menu-icon fa fa-plus">&nbsp;&nbsp;</span>Ticketing - New Ticket</a></li><li><a href="https://raislibya.azurewebsites.net/InfoLine/SearchTickets.aspx"><span class="menu-icon fa fa-phone">&nbsp;&nbsp;</span>Ticketing - Search Tickets</a></li></ul></li><li class="dropdown" runat="server" id="m2"><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-icon fa fa-ambulance">&nbsp;&nbsp;</span>Assistance</a><ul class="dropdown-menu"><li><a href="https://raislibya.azurewebsites.net/CoreReliefItem/AssistanceSearch.aspx"><span class="menu-icon fa fa-search">&nbsp;&nbsp;</span>Assistance - Search</a></li><li><a href="https://raislibya.azurewebsites.net/CoreReliefItem/nAssistanceSearch.aspx"><span class="menu-icon fa fa-plus">&nbsp;&nbsp;</span>Assistance - Single Bulk</a></li><li><a href="https://raislibya.azurewebsites.net/CoreReliefItem/nCRIBulkUpload.aspx"><span class="menu-icon fa fa-upload">&nbsp;&nbsp;</span>Assistance - Bulk Upload</a></li></ul></li><li class="dropdown" runat="server" id="m5"><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-icon fa fa-arrows-alt">&nbsp;&nbsp;</span>Referrals</a><ul class="dropdown-menu"><li><a href="https://raislibya.azurewebsites.net/Referral/Referral.aspx?RefId=New&amp;CaseNo=New"><span class="menu-icon fa fa-plus">&nbsp;&nbsp;</span>Referrals - New Case</a></li><li><a href="https://raislibya.azurewebsites.net/Referral/ReferralSearchMyReferrals.aspx"><span class="menu-icon fa fa-arrows">&nbsp;&nbsp;</span>Referrals - My Cases</a></li><li><a href="https://raislibya.azurewebsites.net/Referral/ReferralSearchIncoming.aspx"><span class="menu-icon fa fa-sign-in">&nbsp;&nbsp;</span>Referrals - Incoming Cases</a></li><li><a href="https://raislibya.azurewebsites.net/Referral/ReferralSearchOutgoing.aspx"><span class="menu-icon fa fa-sign-out">&nbsp;&nbsp;</span>Referrals - Outgoing Cases</a></li><li><a href="https://raislibya.azurewebsites.net/Referral/ReferralBulk.aspx"><span class="menu-icon fa fa-upload">&nbsp;&nbsp;</span>Referrals - Bulk Upload</a></li><li><a href="https://raislibya.azurewebsites.net/Referral/ReferralExport.aspx"><span class="menu-icon fa fa-file-excel-o">&nbsp;&nbsp;</span>Referrals - Exports</a></li><li><a href="https://raislibya.azurewebsites.net/Referral/ReferralTagSearch.aspx"><span class="menu-icon fa fa-cloud">&nbsp;&nbsp;</span>Referrals - Search by Tags</a></li></ul></li><li class="dropdown" runat="server" id="m7"><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#" class="dropdown-toggle" data-toggle="dropdown"><span class="menu-icon fa fa-print">&nbsp;&nbsp;</span>Reports</a><ul class="dropdown-menu"><li><a href="https://raislibya.azurewebsites.net/Reports/Checker.aspx"><span class="menu-icon fa fa-check-circle-o">&nbsp;&nbsp;</span>Case / Individual Checker</a></li></ul></li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#"><span class="menu-icon fa fa-user">&nbsp;&nbsp;</span>Rashad  Alabdali</a><ul class="dropdown-menu"><li><a href="https://raislibya.azurewebsites.net/ChangeExpiredPassword.aspx"><span class="menu-icon fa fa-unlock-alt">&nbsp;&nbsp;</span>Change Password</a></li><li><a href="https://raislibya.azurewebsites.net/Account/EditProfile.aspx"><span class="menu-icon fa fa-user">&nbsp;&nbsp;</span>My Profile</a></li><li><a href="https://raislibya.azurewebsites.net/Account/Help.aspx"><span class="menu-icon fa fa-h-square">&nbsp;&nbsp;</span>Help</a></li><li><a href="https://raislibya.azurewebsites.net/LogOut.aspx"><span class="menu-icon fa fa-power-off">&nbsp;&nbsp;</span>Sign Out</a></li></ul></li></ul></div>
                </div>
                <div id="al" class="alert alert-danger" style="height: 55px; margin: 0px;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Warning!</strong>&nbsp;&nbsp;<span id="lblMessage">   Due to the Security Policy, Please consider changing your Password      </span>
                </div>
                
            </div>
        </div>
        <div id="main-menu" role="navigation">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div id="main-menu-inner" style="overflow: hidden; width: auto; height: 100%;">
                <ul class="navigation">
                </ul>
            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        </div>

        <div>
        </div>

        <div id="content-wrapper" style="height: auto; overflow: scroll">
            <form method="post" action="https://raislibya.azurewebsites.net/Core/MainSearch.aspx" id="ctl02">
<div class="aspNetHidden">
<input type="hidden" name="MasteradStyleSheetManager_TSSM" id="MasteradStyleSheetManager_TSSM" value="">
<input type="hidden" name="RadScriptManager2_TSM" id="RadScriptManager2_TSM" value=";;System.Web.Extensions, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35:en-US:ba1d5018-bf9d-4762-82f6-06087a49b5f6:ea597d4b:b25378d2">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['ctl02'];
if (!theForm) {
    theForm = document.ctl02;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="./UNHCR Refugee Assistance Information System_files/WebResource.axd" type="text/javascript"></script>


<script src="./UNHCR Refugee Assistance Information System_files/Telerik.Web.UI.WebResource.axd" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/Core.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/PopupScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/jQuery.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/jQueryPlugins.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/AnimationFramework.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/IETouchActionManager.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/AnimationScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/Draggable.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/Resizable.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/ShortCutManagerScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/MaterialRippleScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/TouchScrollExtender.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadWindowScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadWindowManager.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/Ajax.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/OverlayScript.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadInputScript.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadMaskedInputScript.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/NavigationScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/OData.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadComboBoxScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/LiteView.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadMonthYearPickerScript.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadCalendarScript.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadCalendarCommonScript.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadPickersPopupDirectionEnumeration.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadDateInputScript.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadButtonScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadGridScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadNotification.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadXmlHttpPanel.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/ScrollingScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadMenuScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadContextMenuScripts.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/RadMenuItem.js.download" type="text/javascript"></script>
<script src="./UNHCR Refugee Assistance Information System_files/LiteView.js(1).download" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E2380354">
	<input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0">
	<input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="839fS1NqvGmQzXL8sGgUV/TXD/YzlEJ+CcJaGRfqk/atVpv7tCHW8j/qiBoxHn+Lp+pDORKE+o51NWnSUwDeV0KaZ7NQ134HK9InAf4N6i95AqGq+mHz0BbFfs+3OtfSU8WjAVZQTfkdmyhmWPOYdChMYZbF1aOJRDOdq6xP1KQMtLFa2ysXYuuAdKyWNuP5wWl9iw14xdZ5XqCYItRwIOEEZmL2GeKyGIVvFTi+RpE/2ANvHQjP6t+2Ye5nYwvxD0fKnl9f0BxXlhZ3tSe0Z6bDTHChVMB0kVyiRhv67UsEBGvHDmXCCNiaoM1Z7H1Dg7jhwS+LktWF3EGVaVGHoq+43O4QmiBehpO2FAhP5WOXbSk3LO/nnU/A2FPzxoJxNg+x/qpOmR/jfzmuMph+0UGSjzYKPzwm2mjQR33ETJSQuQOHK2gtzumB6FcdbF9qpORbCkPxMVMLiwlfpvVCT/ggdsucv1aN1rmw25qI9Ic=">
</div>
                <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$RadScriptManager2', 'ctl02', ['tctl00$ContentPlaceHolder1$ctl00$ContentPlaceHolder1$pMainPanelPanel','','tctl00$ContentPlaceHolder1$ctl00$ContentPlaceHolder1$dgvSearchPanel','','tctl00$ContentPlaceHolder1$RadAjaxManager1SU','ContentPlaceHolder1_RadAjaxManager1SU'], ['ctl00$ContentPlaceHolder1$btnSearch','','ctl00$ContentPlaceHolder1$RadAjaxManager1','','ctl00$ContentPlaceHolder1$dgvSearch',''], [], 1000, 'ctl00');
//]]>
</script>

                <div id="ctl00_RadWindowManager1" style="display:none;">
	<!-- 2021.3.914.45 --><div id="ctl00_RadWindowManager1_alerttemplate" style="display:none;">
		<div class="rwDialog rwAlertDialog">
			<div class="rwDialogContent">
				<div class="rwDialogMessage">{1}</div>
			</div>
			<div class="rwDialogButtons">
				<button type="button" class="rwOkBtn" onclick="$find('{0}').close(true); return false;">##LOC[OK]##</button>
			</div>
		</div>
		</div><div id="ctl00_RadWindowManager1_prompttemplate" style="display:none;">
		<div class="rwDialog rwPromptDialog">
			<div class="rwDialogContent">
				<div class="rwDialogMessage">{1}</div>
				<div class="rwPromptInputContainer">
					<script type="text/javascript">
						function RadWindowprompt_detectenter(id, ev, input) {
							if (!ev) ev = window.event;
							if (ev.keyCode == 13) {
								var but = input.parentNode.parentNode.parentNode.getElementsByTagName("button")[0];
								if (but) {
									if (but.click) {
										but.click();
									}
									else if (but.onclick) {
										but.focus();
										var click = but.onclick;
										but.onclick = null;
										if (click) click.call(but);
									}
								}
								return false;
							}
							else return true;
						}
					</script>
					<input title="Enter Value" onkeydown="return RadWindowprompt_detectenter('{0}', event, this);" type="text" class="rwPromptInput radPreventDecorate" value="{2}">
				</div>
			</div>
			<div class="rwDialogButtons">
				<button type="button" class="rwOkBtn" onclick="$find('{0}').close(this.parentNode.parentNode.getElementsByTagName('input')[0].value); return false;">##LOC[OK]##</button>
				<button type="button" class="rwCancelBtn" onclick="$find('{0}').close(null); return false;">##LOC[Cancel]##</button>
			</div>
		</div>
		</div><div id="ctl00_RadWindowManager1_confirmtemplate" style="display:none;">
		<div class="rwDialog rwConfirmDialog">
			<div class="rwDialogContent">
				<div class="rwDialogMessage">{1}</div>
			</div>
			<div class="rwDialogButtons">
				<button type="button" class="rwOkBtn" onclick="$find('{0}').close(true); return false;">##LOC[OK]##</button>
				<button type="button" class="rwCancelBtn" onclick="$find('{0}').close(false); return false;">##LOC[Cancel]##</button>
			</div>
		</div>
		</div><input id="ctl00_RadWindowManager1_ClientState" name="ctl00_RadWindowManager1_ClientState" type="hidden">
</div>
                
    <div class="page-header">
        <h1><i class="fa fa-search"></i>&nbsp;&nbsp;<span id="ctl00_head_blockWinterPageHeaderRadLabel" class="RadLabel RadLabel_Material" style="font-weight:bold;">Search</span></h1>
    </div>
    <link href="./UNHCR Refugee Assistance Information System_files/bootstrap-submenu.min.css" rel="stylesheet">

    
        <script type="text/javascript">
            function recogIRIS(irisConfig) {

                var _EyeCloudXML = buildIrisConfigXml(irisConfig);

                var _PIN = '';
                var _StatusStr = '';
                var _StatusVal = '';
                var _PIN = '';


                plugin.EC_Recog(_EyeCloudXML, _StatusVal, _StatusStr).then(
                    function (data) {

                        ParseXML(data);

                        if (PIN != '') {
                            var ajaxManager$ = $find("ctl00_ContentPlaceHolder1_RadAjaxManager1");
                            var IndID = ReadXML(data, "IndID");
                            
                            if (IndID && IndID != '') {

                                var res = ajaxManager$.ajaxRequest('IRIS_PIN:' + PIN + ';IndividualID:' + IndID);

                               // var dgvSearch$ = $find("ctl00_ContentPlaceHolder1_dgvSearch").get_masterTableView();

                                // dgvSearch$.rebind();

                            } else {
                                var res = ajaxManager$.ajaxRequest('IRIS_PIN:' + PIN);
                            }
                        } else {
                            alert(StatusStr);
                        }
                    });
            }

            function buildIrisConfigXml(irisConfig) {
                var irisConfigJson = jQuery.parseJSON(irisConfig);

                var root = '<EyeBankXML></EyeBankXML>';
                var parser = new DOMParser();
                var xmlDoc = parser.parseFromString(root, 'text/xml');

                jQuery.each(irisConfigJson, function (index, value) {
                    var newElement = xmlDoc.createElement(index);
                    newElement.textContent = value;
                    xmlDoc.getElementsByTagName('EyeBankXML')[0].appendChild(newElement);
                });

                return new XMLSerializer().serializeToString(xmlDoc);
            }


        </script>
    

                
    <div id="ContentPlaceHolder1_RadAjaxManager1SU" style="display: block;">
	<span id="ctl00_ContentPlaceHolder1_RadAjaxManager1" style="display:none;"></span>
</div>
    <div id="ctl00_ContentPlaceHolder1_RadWindowManager1" style="display:none;">
	<div id="ctl00_ContentPlaceHolder1_RadWindowManager1_alerttemplate" style="display:none;">
		<div class="rwDialog rwAlertDialog">
			<div class="rwDialogContent">
				<div class="rwDialogMessage">{1}</div>
			</div>
			<div class="rwDialogButtons">
				<button type="button" class="rwOkBtn" onclick="$find('{0}').close(true); return false;">##LOC[OK]##</button>
			</div>
		</div>
		</div><div id="ctl00_ContentPlaceHolder1_RadWindowManager1_prompttemplate" style="display:none;">
		<div class="rwDialog rwPromptDialog">
			<div class="rwDialogContent">
				<div class="rwDialogMessage">{1}</div>
				<div class="rwPromptInputContainer">
					<script type="text/javascript">
						function RadWindowprompt_detectenter(id, ev, input) {
							if (!ev) ev = window.event;
							if (ev.keyCode == 13) {
								var but = input.parentNode.parentNode.parentNode.getElementsByTagName("button")[0];
								if (but) {
									if (but.click) {
										but.click();
									}
									else if (but.onclick) {
										but.focus();
										var click = but.onclick;
										but.onclick = null;
										if (click) click.call(but);
									}
								}
								return false;
							}
							else return true;
						}
					</script>
					<input title="Enter Value" onkeydown="return RadWindowprompt_detectenter('{0}', event, this);" type="text" class="rwPromptInput radPreventDecorate" value="{2}">
				</div>
			</div>
			<div class="rwDialogButtons">
				<button type="button" class="rwOkBtn" onclick="$find('{0}').close(this.parentNode.parentNode.getElementsByTagName('input')[0].value); return false;">##LOC[OK]##</button>
				<button type="button" class="rwCancelBtn" onclick="$find('{0}').close(null); return false;">##LOC[Cancel]##</button>
			</div>
		</div>
		</div><div id="ctl00_ContentPlaceHolder1_RadWindowManager1_confirmtemplate" style="display:none;">
		<div class="rwDialog rwConfirmDialog">
			<div class="rwDialogContent">
				<div class="rwDialogMessage">{1}</div>
			</div>
			<div class="rwDialogButtons">
				<button type="button" class="rwOkBtn" onclick="$find('{0}').close(true); return false;">##LOC[OK]##</button>
				<button type="button" class="rwCancelBtn" onclick="$find('{0}').close(false); return false;">##LOC[Cancel]##</button>
			</div>
		</div>
		</div><input id="ctl00_ContentPlaceHolder1_RadWindowManager1_ClientState" name="ctl00_ContentPlaceHolder1_RadWindowManager1_ClientState" type="hidden">
</div>
    <div id="ContentPlaceHolder1_RadAjaxLoadingPanel1" class="RadAjax RadAjax_Bootstrap" style="display:none;">
	<div class="raDiv">

	</div><div class="raColor raTransp">

	</div>
</div>
    <div class="RadAjaxPanel" id="ctl00_ContentPlaceHolder1_ctl00_ContentPlaceHolder1_pMainPanelPanel" style="display: block; width: 100%;">
	<div id="ctl00_ContentPlaceHolder1_pMainPanel" style="">
		
        <div class="panel-group panel-group-info" id="accordion-example">
            <div id="ContentPlaceHolder1_pSearhKey" class="panel">
                <div class="panel-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#collapseOne">
                        <span id="ctl00_ContentPlaceHolder1_SearchbyIdRadLabel" class="RadLabel RadLabel_Material" style="color:White;font-size:Medium;">Search by Identifiers</span>
                    </a>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                        <div class="row">
                            <div id="ContentPlaceHolder1_pSearhKey_CaseNo" class="col-md-3">
                                <label for="ctl00_ContentPlaceHolder1_sCaseNo" id="ctl00_ContentPlaceHolder1_CaseNoRadLabel" class="RadLabel RadLabel_Material" style="font-size:Medium;">Case No.</label>
                                <div id="ctl00_ContentPlaceHolder1_sCaseNo_wrapper" title="Case No" class="RadInput RadInput_Bootstrap" style="width:100%;">
			<input id="ctl00_ContentPlaceHolder1_sCaseNo" name="ctl00$ContentPlaceHolder1$sCaseNo" type="text" size="20" class="riTextBox riEnabled" title="Case No" value=""><input id="ctl00_ContentPlaceHolder1_sCaseNo_ClientState" name="ctl00_ContentPlaceHolder1_sCaseNo_ClientState" type="hidden" autocomplete="off" value="{&quot;enabled&quot;:true,&quot;emptyMessage&quot;:&quot;&quot;,&quot;validationText&quot;:&quot;&quot;,&quot;valueAsString&quot;:&quot;___-__C______&quot;,&quot;valueWithPromptAndLiterals&quot;:&quot;___-__C______&quot;,&quot;lastSetTextBoxValue&quot;:&quot;___-__C______&quot;}">
		</div>
                            </div>
                            
                            <div id="ContentPlaceHolder1_pSearhKey_IndividualId" class="col-md-3">
                                <label for="ctl00_ContentPlaceHolder1_sIndividualId" id="ctl00_ContentPlaceHolder1_IndividualIDRadLabel" class="RadLabel RadLabel_Material" style="font-size:Medium;">Individual ID</label>
                                <div id="ctl00_ContentPlaceHolder1_sIndividualId_wrapper" title="Individual Id" class="RadInput RadInput_Bootstrap" style="width:100%;">
			<input id="ctl00_ContentPlaceHolder1_sIndividualId" name="ctl00$ContentPlaceHolder1$sIndividualId" type="text" size="20" class="riTextBox riEnabled" title="Individual Id" value=""><input id="ctl00_ContentPlaceHolder1_sIndividualId_ClientState" name="ctl00_ContentPlaceHolder1_sIndividualId_ClientState" type="hidden" autocomplete="off" value="{&quot;enabled&quot;:true,&quot;emptyMessage&quot;:&quot;&quot;,&quot;validationText&quot;:&quot;&quot;,&quot;valueAsString&quot;:&quot;___-________&quot;,&quot;valueWithPromptAndLiterals&quot;:&quot;___-________&quot;,&quot;lastSetTextBoxValue&quot;:&quot;___-________&quot;}">
		</div>
                            </div>
                            
                        </div>
                        <div class="row" style="padding-top: 10px">
                            
                            <div id="ContentPlaceHolder1_pSearhKey_DocumentNumber" class="col-md-3">
                                <label for="ctl00_ContentPlaceHolder1_sDocId" id="ctl00_ContentPlaceHolder1_DocumentIDRadLabel1" class="RadLabel RadLabel_Material" style="font-size:Medium;">Document ID</label>
                                <span id="ctl00_ContentPlaceHolder1_sDocId_wrapper" class="RadInput RadInput_Bootstrap" style="width:100%;"><input id="ctl00_ContentPlaceHolder1_sDocId" name="ctl00$ContentPlaceHolder1$sDocId" size="20" class="riTextBox riEnabled" title="Document Id" type="text" value=""><input id="ctl00_ContentPlaceHolder1_sDocId_ClientState" name="ctl00_ContentPlaceHolder1_sDocId_ClientState" type="hidden" autocomplete="off" value="{&quot;enabled&quot;:true,&quot;emptyMessage&quot;:&quot;&quot;,&quot;validationText&quot;:&quot;&quot;,&quot;valueAsString&quot;:&quot;&quot;,&quot;lastSetTextBoxValue&quot;:&quot;&quot;}"></span>
                            </div>
                            <div id="ContentPlaceHolder1_pSearhKey_PhoneNumber" class="col-md-3">
                                <label for="ctl00_ContentPlaceHolder1_sPhoneNo" id="ctl00_ContentPlaceHolder1_PhoneNumberRadLabel" class="RadLabel RadLabel_Material" style="font-size:Medium;">Phone Number</label>
                                <span id="ctl00_ContentPlaceHolder1_sPhoneNo_wrapper" class="RadInput RadInput_Bootstrap" style="width:100%;"><input id="ctl00_ContentPlaceHolder1_sPhoneNo" name="ctl00$ContentPlaceHolder1$sPhoneNo" size="20" class="riTextBox riEnabled" title="PhoneNo (CoA)" type="text" value=""><input id="ctl00_ContentPlaceHolder1_sPhoneNo_ClientState" name="ctl00_ContentPlaceHolder1_sPhoneNo_ClientState" type="hidden" autocomplete="off" value="{&quot;enabled&quot;:true,&quot;emptyMessage&quot;:&quot;&quot;,&quot;validationText&quot;:&quot;&quot;,&quot;valueAsString&quot;:&quot;&quot;,&quot;lastSetTextBoxValue&quot;:&quot;&quot;}"></span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="ContentPlaceHolder1_pSearhName" class="panel">
                <div class="panel-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-example" href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#collapseTwo">
                        <span id="ctl00_ContentPlaceHolder1_SearchbyNameRadLabel" class="RadLabel RadLabel_Material" style="color:White;font-size:Medium;">Search by Name</span>
                    </a>
                </div>
                <!-- / .panel-heading -->
                <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                        <div class="row">
                            <div id="ContentPlaceHolder1_pSearhName_Name" class="col-md-6">
                                <label for="ctl00_ContentPlaceHolder1_sIndividualName" id="ctl00_ContentPlaceHolder1_FullNameRadLabel" class="RadLabel RadLabel_Material" style="font-size:Medium;">Full Name (English / Native Language)</label>
                                <span id="ctl00_ContentPlaceHolder1_sIndividualName_wrapper" class="RadInput RadInput_Bootstrap" style="width:100%;"><input id="ctl00_ContentPlaceHolder1_sIndividualName" name="ctl00$ContentPlaceHolder1$sIndividualName" size="20" class="riTextBox riEmpty" title="Individual Name" value="Start with first name ..." type="text"><input id="ctl00_ContentPlaceHolder1_sIndividualName_ClientState" name="ctl00_ContentPlaceHolder1_sIndividualName_ClientState" type="hidden" autocomplete="off" value="{&quot;enabled&quot;:true,&quot;emptyMessage&quot;:&quot;Start with first name ...&quot;,&quot;validationText&quot;:&quot;&quot;,&quot;valueAsString&quot;:&quot;&quot;,&quot;lastSetTextBoxValue&quot;:&quot;Start with first name ...&quot;}"></span>
                            </div>
                            <div id="ContentPlaceHolder1_pSearhName_Sex" class="col-md-2">
                                <label for="ctl00_ContentPlaceHolder1_sGender_Input" id="ctl00_ContentPlaceHolder1_GenderRadLabel" class="RadLabel RadLabel_Material" style="font-size:Medium;">Sex</label>
                                <div id="ctl00_ContentPlaceHolder1_sGender" class="RadComboBox RadComboBox_Bootstrap" style="width:100%;white-space:normal;">
			<span class="rcbInner rcbReadOnly"><input name="ctl00$ContentPlaceHolder1$sGender" type="text" class="rcbInput radPreventDecorate" id="ctl00_ContentPlaceHolder1_sGender_Input" value="ALL" readonly="readonly" title="Sex" autocomplete="off"><button class="rcbActionButton" tabindex="-1" type="button"><span id="ctl00_ContentPlaceHolder1_sGender_Arrow" class="p-icon p-i-arrow-60-down"></span><span class="rcbButtonText">select</span></button></span><div class="rcbSlide" style="z-index:6000;display:none;"><div id="ctl00_ContentPlaceHolder1_sGender_DropDown" class="RadComboBoxDropDown RadComboBoxDropDown_Bootstrap "><div class="rcbScroll rcbWidth"><ul class="rcbList"><li class="rcbItem">ALL</li><li class="rcbItem">Male</li><li class="rcbItem">Female</li></ul></div></div></div><input id="ctl00_ContentPlaceHolder1_sGender_ClientState" name="ctl00_ContentPlaceHolder1_sGender_ClientState" type="hidden" autocomplete="off">
		</div>
                            </div>
                            <div id="ContentPlaceHolder1_pSearhName_CoO" class="col-md-2">
                                <label for="ctl00_ContentPlaceHolder1_sCOO_Input" id="ctl00_ContentPlaceHolder1_OriginCountryRadLabel" class="RadLabel RadLabel_Material" style="font-size:Medium;">Origin Country</label>
                                <div id="ctl00_ContentPlaceHolder1_sCOO" class="RadComboBox RadComboBox_Bootstrap" style="width:100%;white-space:normal;">
			<span class="rcbInner"><input name="ctl00$ContentPlaceHolder1$sCOO" type="text" class="rcbInput radPreventDecorate" id="ctl00_ContentPlaceHolder1_sCOO_Input" value="ALL" title="Origin Country" autocomplete="off"><button class="rcbActionButton" tabindex="-1" type="button"><span id="ctl00_ContentPlaceHolder1_sCOO_Arrow" class="p-icon p-i-arrow-60-down"></span><span class="rcbButtonText">select</span></button></span><div class="rcbSlide" style="z-index:6000;display:none;"><div id="ctl00_ContentPlaceHolder1_sCOO_DropDown" class="RadComboBoxDropDown RadComboBoxDropDown_Bootstrap "><div class="rcbScroll rcbWidth"><ul class="rcbList"><li class="rcbItem">ALL</li><li class="rcbItem">AFG</li><li class="rcbItem">AIA</li><li class="rcbItem">ALB</li><li class="rcbItem">ALG</li><li class="rcbItem">AND</li><li class="rcbItem">ANG</li><li class="rcbItem">ANT</li><li class="rcbItem">ARE</li><li class="rcbItem">ARG</li><li class="rcbItem">ARM</li><li class="rcbItem">ASM</li><li class="rcbItem">ATA</li><li class="rcbItem">SSD</li><li class="rcbItem">SUD</li><li class="rcbItem">AUS</li><li class="rcbItem">AZE</li><li class="rcbItem">BAH</li><li class="rcbItem">BAR</li><li class="rcbItem">BDI</li><li class="rcbItem">BEL</li><li class="rcbItem">BEN</li><li class="rcbItem">BER</li><li class="rcbItem">BGD</li><li class="rcbItem">BHS</li><li class="rcbItem">BHU</li><li class="rcbItem">BKF</li><li class="rcbItem">BLR</li><li class="rcbItem">BOL</li><li class="rcbItem">BOT</li><li class="rcbItem">BRA</li><li class="rcbItem">BRU</li><li class="rcbItem">BSN</li><li class="rcbItem">BUL</li><li class="rcbItem">BVT</li><li class="rcbItem">BZE</li><li class="rcbItem">CAM</li><li class="rcbItem">CAN</li><li class="rcbItem">CAR</li><li class="rcbItem">CAY</li><li class="rcbItem">CCK</li><li class="rcbItem">CHD</li><li class="rcbItem">CHI</li><li class="rcbItem">CHL</li><li class="rcbItem">CMR</li><li class="rcbItem">COB</li><li class="rcbItem">COD</li><li class="rcbItem">COI</li><li class="rcbItem">COK</li><li class="rcbItem">COL</li><li class="rcbItem">COS</li><li class="rcbItem">CUB</li><li class="rcbItem">CVI</li><li class="rcbItem">CXR</li><li class="rcbItem">CYP</li><li class="rcbItem">CZE</li><li class="rcbItem">DEN</li><li class="rcbItem">DJB</li><li class="rcbItem">DMA</li><li class="rcbItem">DOM</li><li class="rcbItem">DUB</li><li class="rcbItem">ECU</li><li class="rcbItem">EGU</li><li class="rcbItem">ERT</li><li class="rcbItem">EST</li><li class="rcbItem">ETH</li><li class="rcbItem">FGU</li><li class="rcbItem">FIJ</li><li class="rcbItem">FIN</li><li class="rcbItem">FLK</li><li class="rcbItem">FNC</li><li class="rcbItem">FPO</li><li class="rcbItem">FRA</li><li class="rcbItem">FRO</li><li class="rcbItem">FSM</li><li class="rcbItem">GAB</li><li class="rcbItem">GAM</li><li class="rcbItem">GBR</li><li class="rcbItem">GEO</li><li class="rcbItem">GFR</li><li class="rcbItem">GHA</li><li class="rcbItem">GIB</li><li class="rcbItem">GNB</li><li class="rcbItem">GRE</li><li class="rcbItem">GRL</li><li class="rcbItem">GRN</li><li class="rcbItem">GUA</li><li class="rcbItem">GUI</li><li class="rcbItem">GUM</li><li class="rcbItem">GUY</li><li class="rcbItem">HAI</li><li class="rcbItem">HKG</li><li class="rcbItem">HMD</li><li class="rcbItem">HON</li><li class="rcbItem">HRV</li><li class="rcbItem">HUN</li><li class="rcbItem">ICE</li><li class="rcbItem">LAO</li><li class="rcbItem">IND</li><li class="rcbItem">INS</li><li class="rcbItem">IOT</li><li class="rcbItem">IRE</li><li class="rcbItem">IRN</li><li class="rcbItem">IRQ</li><li class="rcbItem">ISR</li><li class="rcbItem">ITA</li><li class="rcbItem">JAM</li><li class="rcbItem">JOR</li><li class="rcbItem">JPN</li><li class="rcbItem">KAZ</li><li class="rcbItem">KEN</li><li class="rcbItem">KGZ</li><li class="rcbItem">KIR</li><li class="rcbItem">KNA</li><li class="rcbItem">KOR</li><li class="rcbItem">MAU</li><li class="rcbItem">KUR</li><li class="rcbItem">KUW</li><li class="rcbItem">MIC</li><li class="rcbItem">LBR</li><li class="rcbItem">LBY</li><li class="rcbItem">LCA</li><li class="rcbItem">LEB</li><li class="rcbItem">LES</li><li class="rcbItem">LIE</li><li class="rcbItem">LKA</li><li class="rcbItem">LTU</li><li class="rcbItem">LUX</li><li class="rcbItem">LVA</li><li class="rcbItem">MAC</li><li class="rcbItem">MAD</li><li class="rcbItem">MAR</li><li class="rcbItem">MAU</li><li class="rcbItem">MCD</li><li class="rcbItem">MCO</li><li class="rcbItem">MDA</li><li class="rcbItem">MDV</li><li class="rcbItem">MEX</li><li class="rcbItem">MHL</li><li class="rcbItem">MLI</li><li class="rcbItem">MLS</li><li class="rcbItem">MLW</li><li class="rcbItem">MNE</li><li class="rcbItem">MNG</li><li class="rcbItem">MNP</li><li class="rcbItem">MOR</li><li class="rcbItem">MOZ</li><li class="rcbItem">MSR</li><li class="rcbItem">MTA</li><li class="rcbItem">MTS</li><li class="rcbItem">MYA</li><li class="rcbItem">MYT</li><li class="rcbItem">NAM</li><li class="rcbItem">NAN</li><li class="rcbItem">NCL</li><li class="rcbItem">NEP</li><li class="rcbItem">NET</li><li class="rcbItem">NFK</li><li class="rcbItem">NGR</li><li class="rcbItem">NIC</li><li class="rcbItem">NIG</li><li class="rcbItem">NIU</li><li class="rcbItem">NOR</li><li class="rcbItem">NRU</li><li class="rcbItem">NZL</li><li class="rcbItem">OMN</li><li class="rcbItem">PAK</li><li class="rcbItem">PAL</li><li class="rcbItem">PAN</li><li class="rcbItem">PAR</li><li class="rcbItem">PCN</li><li class="rcbItem">PER</li><li class="rcbItem">PHI</li><li class="rcbItem">PLW</li><li class="rcbItem">PNG</li><li class="rcbItem">POL</li><li class="rcbItem">POR</li><li class="rcbItem">PUE</li><li class="rcbItem">QAT</li><li class="rcbItem">REU</li><li class="rcbItem">ROM</li><li class="rcbItem">RSA</li><li class="rcbItem">RUS</li><li class="rcbItem">RWA</li><li class="rcbItem">SAL</li><li class="rcbItem">SAU</li><li class="rcbItem">SCG</li><li class="rcbItem">SEN</li><li class="rcbItem">SER</li><li class="rcbItem">SEY</li><li class="rcbItem">SGS</li><li class="rcbItem">SHN</li><li class="rcbItem">SIK</li><li class="rcbItem">SIN</li><li class="rcbItem">SJM</li><li class="rcbItem">SLE</li><li class="rcbItem">SMA</li><li class="rcbItem">TUN</li><li class="rcbItem">SOM</li><li class="rcbItem">SYR</li><li class="rcbItem">SPA</li><li class="rcbItem">YEM</li></ul></div></div></div><input id="ctl00_ContentPlaceHolder1_sCOO_ClientState" name="ctl00_ContentPlaceHolder1_sCOO_ClientState" type="hidden" autocomplete="off">
		</div>
                                
                            </div>
                            <div id="ContentPlaceHolder1_pSearhName_DateOfBirth" class="col-md-2">
                                <div>
                                    <label for="ctl00_ContentPlaceHolder1_sDOB_dateInput" id="ctl00_ContentPlaceHolder1_DateofBirthRadLabel" class="RadLabel RadLabel_Material" style="font-size:Medium;">Date of Birth</label>
                                </div>
                                <div>
                                    <input type="hidden" name="ctl00_ContentPlaceHolder1_sDOB_AD" id="ctl00_ContentPlaceHolder1_sDOB_AD" value="[[1900,1,1],[2099,12,31],[2021,12,14]]"><div id="ctl00_ContentPlaceHolder1_sDOB_wrapper" title="Date of Birth (Month / Year)" class="RadPicker RadMonthYearPicker RadPicker_Bootstrap">
			<input style="visibility:hidden;display:block;float:right;margin:0 0 -1px -1px;width:1px;height:1px;overflow:hidden;border:0;padding:0;" id="ctl00_ContentPlaceHolder1_sDOB" name="ctl00$ContentPlaceHolder1$sDOB" type="text" class="rdfd_ radPreventDecorate" value="" title="Visually hidden input created for functionality purposes."><div id="ctl00_ContentPlaceHolder1_sDOB_dateInput_wrapper" class="RadInput RadInput_Bootstrap">
				<input id="ctl00_ContentPlaceHolder1_sDOB_dateInput" name="ctl00$ContentPlaceHolder1$sDOB$dateInput" class="riTextBox riEnabled" type="text"><div class="rcSelect">
					<a title="Open the monthyear view popup." href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#" id="ctl00_ContentPlaceHolder1_sDOB_popupButton" class="rcCalPopup"></a><div id="ctl00_ContentPlaceHolder1_sDOB_wrapperElement" style="display: none"><table summary="Table holding time picker for selecting time of day." id="ctl00_ContentPlaceHolder1_sDOB_MonthYearTableViewID" class="RadCalendarMonthView RadCalendarMonthView_Bootstrap">
						<caption style="display:none;">
							Month year picker
						</caption><thead>
							<tr style="display:none;">
								<th scope="col"><span style="display: none">empty</span></th>
							</tr>
						</thead><tbody>
							<tr>
								<td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Jan</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Feb</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2017</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2022</a></td>
							</tr><tr>
								<td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Mar</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Apr</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2018</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2023</a></td>
							</tr><tr>
								<td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">May</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Jun</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2019</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2024</a></td>
							</tr><tr>
								<td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Jul</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Aug</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2020</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2025</a></td>
							</tr><tr>
								<td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Sep</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Oct</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2021</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">2026</a></td>
							</tr><tr>
								<td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Nov</a></td><td><a href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">Dec</a></td><td><a id="ctl00_ContentPlaceHolder1_sDOB_dateInput_sDOB_NavigationPrevLink" title="<" href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">&lt;</a></td><td><a id="ctl00_ContentPlaceHolder1_sDOB_dateInput_sDOB_NavigationNextLink" title=">" href="https://raislibya.azurewebsites.net/Core/MainSearch.aspx#">&gt;</a></td>
							</tr><tr>
								<td class="rcButtons" colspan="4"><a id="ctl00_ContentPlaceHolder1_sDOB_dateInput_sDOB_TodayButton" class="rcTodayButton" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$sDOB$dateInput$sDOB_TodayButton','')">Today</a><a id="ctl00_ContentPlaceHolder1_sDOB_dateInput_sDOB_OkButton" class="rcOkButton" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$sDOB$dateInput$sDOB_OkButton','')">OK</a><a id="ctl00_ContentPlaceHolder1_sDOB_dateInput_sDOB_CancelButton" class="rcCancelButton" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$sDOB$dateInput$sDOB_CancelButton','')">Cancel</a></td>
							</tr>
						</tbody>
					</table></div>
				</div><input id="ctl00_ContentPlaceHolder1_sDOB_dateInput_ClientState" name="ctl00_ContentPlaceHolder1_sDOB_dateInput_ClientState" type="hidden" autocomplete="off" value="{&quot;enabled&quot;:true,&quot;emptyMessage&quot;:&quot;&quot;,&quot;validationText&quot;:&quot;&quot;,&quot;valueAsString&quot;:&quot;&quot;,&quot;minDateStr&quot;:&quot;1900-01-01-00-00-00&quot;,&quot;maxDateStr&quot;:&quot;2099-12-31-00-00-00&quot;,&quot;lastSetTextBoxValue&quot;:&quot;&quot;}">
			</div><input id="ctl00_ContentPlaceHolder1_sDOB_ClientState" name="ctl00_ContentPlaceHolder1_sDOB_ClientState" type="hidden" value="{&quot;minDateStr&quot;:&quot;1/1/1900 0:0:0&quot;,&quot;maxDateStr&quot;:&quot;12/31/2099 0:0:0&quot;}" autocomplete="off">
		</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-6">
                <button type="submit" name="ctl00$ContentPlaceHolder1$btnSearch" value="Search..." id="ctl00_ContentPlaceHolder1_btnSearch" class="RadButton rbPrimaryButton RadButton_Bootstrap rbButton rbRounded rbIconButton" tabindex="0"><span class="rbIcon p-icon rbPrimaryIcon rbSearch"></span><span class="rbText">Search...</span><input id="ctl00_ContentPlaceHolder1_btnSearch_ClientState" name="ctl00_ContentPlaceHolder1_btnSearch_ClientState" type="hidden" autocomplete="off" value="{&quot;text&quot;:&quot;Search...&quot;,&quot;value&quot;:&quot;&quot;,&quot;checked&quot;:false,&quot;target&quot;:&quot;&quot;,&quot;navigateUrl&quot;:&quot;&quot;,&quot;commandName&quot;:&quot;&quot;,&quot;commandArgument&quot;:&quot;&quot;,&quot;autoPostBack&quot;:true,&quot;selectedToggleStateIndex&quot;:0,&quot;validationGroup&quot;:null,&quot;readOnly&quot;:false,&quot;primary&quot;:true,&quot;enabled&quot;:true}"></button>
                <button type="submit" name="ctl00$ContentPlaceHolder1$btnIRISRecog" value="IRIS Recognition" id="ctl00_ContentPlaceHolder1_btnIRISRecog" class="RadImageButton RadButton RadButton_Bootstrap rbButton rbRounded rbIconButton" primary="True" tabindex="0">
                        <i class="fa fa-eye"></i>
                        <b>IRIS Recognition</b>
                    <input id="ctl00_ContentPlaceHolder1_btnIRISRecog_ClientState" name="ctl00_ContentPlaceHolder1_btnIRISRecog_ClientState" type="hidden" autocomplete="off" value="{&quot;text&quot;:&quot;IRIS Recognition&quot;,&quot;value&quot;:&quot;&quot;,&quot;enabled&quot;:true,&quot;autoPostBack&quot;:true,&quot;commandName&quot;:&quot;&quot;,&quot;commandArgument&quot;:&quot;&quot;,&quot;validationGroup&quot;:null}"></button>
                <button type="submit" name="ctl00$ContentPlaceHolder1$btnClear" value="Clear" id="ctl00_ContentPlaceHolder1_btnClear" class="RadButton RadButton_Bootstrap rbButton rbRounded rbIconButton" tabindex="0"><span class="rbIcon p-icon rbPrimaryIcon rbRemove"></span><span class="rbText">Clear</span><input id="ctl00_ContentPlaceHolder1_btnClear_ClientState" name="ctl00_ContentPlaceHolder1_btnClear_ClientState" type="hidden" autocomplete="off" value="{&quot;text&quot;:&quot;Clear&quot;,&quot;value&quot;:&quot;&quot;,&quot;checked&quot;:false,&quot;target&quot;:&quot;&quot;,&quot;navigateUrl&quot;:&quot;&quot;,&quot;commandName&quot;:&quot;&quot;,&quot;commandArgument&quot;:&quot;&quot;,&quot;autoPostBack&quot;:true,&quot;selectedToggleStateIndex&quot;:0,&quot;validationGroup&quot;:null,&quot;readOnly&quot;:false,&quot;primary&quot;:false,&quot;enabled&quot;:true}"></button>


            </div>

            <div class="col-md-6">
                <span id="ctl00_ContentPlaceHolder1_IRIS_Search_Status_lbl" class="RadLabel RadLabel_Material" style="font-size:Medium;"></span>
            </div>

        </div>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-12">
                <div class="RadAjaxPanel" id="ctl00_ContentPlaceHolder1_ctl00_ContentPlaceHolder1_dgvSearchPanel" style="display: block;">
			<div id="ctl00_ContentPlaceHolder1_dgvSearch" class="RadGrid RadGrid_Bootstrap">

			<input id="ctl00_ContentPlaceHolder1_dgvSearch_ClientState" name="ctl00_ContentPlaceHolder1_dgvSearch_ClientState" type="hidden" autocomplete="off">	</div>

		</div>
            </div>
        </div>
    
	</div><div class="RadAjaxPanel" id="ctl00_ContentPlaceHolder1_ctl00_ContentPlaceHolder1_dgvSearchPanel">

	</div>
</div>

    
        <script type="text/javascript" src="./UNHCR Refugee Assistance Information System_files/EyeCloudWeb.js.download"></script>

        <object id="plugin" type="application/x-eyecloudweb" width="0" height="0">
            <param name="onload" value="pluginLoaded">
        </object>

        <script type="application/javascript">

          //  find IRIS button
          //  var iRecogBiometricsBtn = $('#ctl00_ContentPlaceHolder1_btnIRISRecog')
              var iRecogBiometricsBtn=$("ctl00_ContentPlaceHolder1_btnIRISRecog")
          
            if (iRecogBiometricsBtn != null)
               // alert(iRecogBiometricsBtn +"ctl00_ContentPlaceHolder1_btnIRISRecog")
                load();         

            
         </script>

        <script type="text/javascript">                        

            $(document).keypress(function (e) {
                var keycode = (e.keyCode ? e.keyCode : e.which);
                if (keycode == '13') {
                    var button = $telerik.findButton("ctl00_ContentPlaceHolder1_btnSearch");
                    button.click();
                }
            });

            $(document).load(function () {     
                
                plugin = document.getElementById("plugin");
                if (!plugin.valid) {
                    var irisSearchBtn=$("ctl00_ContentPlaceHolder1_btnIRISRecog")
                   // var irisSearchBtn = $('#ctl00_ContentPlaceHolder1_btnIRISRecog');
                    irisSearchBtn.hide();
                }
            } )


            function showLoading() {

            }


        </script>
    

                <hr class="no-grid-gutter-h grid-gutter-margin-b no-margin-t">
                
                
                
                <!-- container -->


                <div class="row" style="padding-bottom: 10px; padding-left: 10px; font-style: italic; font-size: smaller">
                    <p>
                        © 2014 -
						<script lang="JavaScript" type="text/javascript">
                            now = new Date
                            theYear = now.getYear()
                            if (theYear < 1900)
                                theYear = theYear + 1900
                            document.write(theYear)
                        </script>20212021
                        <span id="ctl00_copyrightRadLabel" class="RadLabel RadLabel_Material">Developed by UNHCR MENA Bureau - Data Management Group,  RAIS</span>
                    </p>
                </div>
                <div id="ctl00_RadNotification1" style="display:none;">
	<input id="ctl00_RadNotification1_ClientState" name="ctl00_RadNotification1_ClientState" type="hidden" autocomplete="off">
</div>
            

<script type="text/javascript">
//<![CDATA[
window.__TsmHiddenField = $get('RadScriptManager2_TSM');
theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadWindowManager, {"_enableRippleEffect":true,"_renderMode":2,"clientStateFieldID":"ctl00_RadWindowManager1_ClientState","formID":"ctl02","iconUrl":"","minimizeIconUrl":"","name":"RadWindowManager1","skin":"Material","windowControls":"[]"}, null, null, $get("ctl00_RadWindowManager1"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadAjaxManager, {"_updatePanels":"","ajaxSettings":[{InitControlID : "ctl00_ContentPlaceHolder1_btnSearch",UpdatedControls : [{ControlID:"ctl00_ContentPlaceHolder1_pMainPanel",PanelID:""}]},{InitControlID : "ctl00_ContentPlaceHolder1_RadAjaxManager1",UpdatedControls : [{ControlID:"ctl00_ContentPlaceHolder1_RadAjaxManager1",PanelID:""},{ControlID:"ctl00_ContentPlaceHolder1_dgvSearch",PanelID:""}]},{InitControlID : "ctl00_ContentPlaceHolder1_dgvSearch",UpdatedControls : [{ControlID:"ctl00_ContentPlaceHolder1_pMainPanel",PanelID:""},{ControlID:"ctl00_ContentPlaceHolder1_dgvSearch",PanelID:""}]}],"clientEvents":{OnRequestStart:"",OnResponseEnd:""},"defaultLoadingPanelID":"ContentPlaceHolder1_RadAjaxLoadingPanel1","enableAJAX":true,"enableHistory":false,"links":[],"styles":[],"uniqueID":"ctl00$ContentPlaceHolder1$RadAjaxManager1","updatePanelsRenderMode":0}, null, null, $get("ctl00_ContentPlaceHolder1_RadAjaxManager1"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadWindowManager, {"_renderMode":2,"clientStateFieldID":"ctl00_ContentPlaceHolder1_RadWindowManager1_ClientState","formID":"ctl02","iconUrl":"","minimizeIconUrl":"","name":"RadWindowManager1","skin":"Bootstrap","windowControls":"[]"}, null, null, $get("ctl00_ContentPlaceHolder1_RadWindowManager1"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadAjaxLoadingPanel, {"initialDelayTime":0,"isSticky":false,"minDisplayTime":0,"skin":"Bootstrap","uniqueID":"ctl00$ContentPlaceHolder1$RadAjaxLoadingPanel1","zIndex":90000}, null, null, $get("ContentPlaceHolder1_RadAjaxLoadingPanel1"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMaskedTextBox, {"_displayText":"","_focused":false,"_initialMasks":[new Telerik.Web.UI.RadFreeMaskPart(),new Telerik.Web.UI.RadFreeMaskPart(),new Telerik.Web.UI.RadFreeMaskPart(),new Telerik.Web.UI.RadLiteralMaskPart('-'),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadLiteralMaskPart('C'),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart()],"_initialValueAsText":"","_postBackEventReferenceScript":"setTimeout(\"__doPostBack(\\\u0027ctl00$ContentPlaceHolder1$sCaseNo\\\u0027,\\\u0027\\\u0027)\", 0)","_renderMode":2,"_skin":"Bootstrap","_validationText":"","clientStateFieldID":"ctl00_ContentPlaceHolder1_sCaseNo_ClientState","enabled":true,"styles":{HoveredStyle: ["width:100%;", "riTextBox riHover"],InvalidStyle: ["width:100%;", "riTextBox riError"],DisabledStyle: ["width:100%;", "riTextBox riDisabled"],FocusedStyle: ["width:100%;", "riTextBox riFocused"],EmptyMessageStyle: ["width:100%;", "riTextBox riEmpty"],ReadOnlyStyle: ["width:100%;", "riTextBox riRead"],EnabledStyle: ["width:100%;", "riTextBox riEnabled"]}}, null, null, $get("ctl00_ContentPlaceHolder1_sCaseNo"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMaskedTextBox, {"_displayText":"","_focused":false,"_initialMasks":[new Telerik.Web.UI.RadFreeMaskPart(),new Telerik.Web.UI.RadFreeMaskPart(),new Telerik.Web.UI.RadFreeMaskPart(),new Telerik.Web.UI.RadLiteralMaskPart('-'),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart(),new Telerik.Web.UI.RadDigitMaskPart()],"_initialValueAsText":"","_postBackEventReferenceScript":"setTimeout(\"__doPostBack(\\\u0027ctl00$ContentPlaceHolder1$sIndividualId\\\u0027,\\\u0027\\\u0027)\", 0)","_renderMode":2,"_skin":"Bootstrap","_validationText":"","clientStateFieldID":"ctl00_ContentPlaceHolder1_sIndividualId_ClientState","enabled":true,"styles":{HoveredStyle: ["width:100%;", "riTextBox riHover"],InvalidStyle: ["width:100%;", "riTextBox riError"],DisabledStyle: ["width:100%;", "riTextBox riDisabled"],FocusedStyle: ["width:100%;", "riTextBox riFocused"],EmptyMessageStyle: ["width:100%;", "riTextBox riEmpty"],ReadOnlyStyle: ["width:100%;", "riTextBox riRead"],EnabledStyle: ["width:100%;", "riTextBox riEnabled"]}}, null, null, $get("ctl00_ContentPlaceHolder1_sIndividualId"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadTextBox, {"_displayText":"","_focused":false,"_initialValueAsText":"","_postBackEventReferenceScript":"setTimeout(\"__doPostBack(\\\u0027ctl00$ContentPlaceHolder1$sDocId\\\u0027,\\\u0027\\\u0027)\", 0)","_renderMode":2,"_skin":"Bootstrap","_validationText":"","clientStateFieldID":"ctl00_ContentPlaceHolder1_sDocId_ClientState","enabled":true,"styles":{HoveredStyle: ["width:100%;", "riTextBox riHover"],InvalidStyle: ["width:100%;", "riTextBox riError"],DisabledStyle: ["width:100%;", "riTextBox riDisabled"],FocusedStyle: ["width:100%;", "riTextBox riFocused"],EmptyMessageStyle: ["width:100%;", "riTextBox riEmpty"],ReadOnlyStyle: ["width:100%;", "riTextBox riRead"],EnabledStyle: ["width:100%;", "riTextBox riEnabled"]}}, null, null, $get("ctl00_ContentPlaceHolder1_sDocId"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadTextBox, {"_displayText":"","_focused":false,"_initialValueAsText":"","_postBackEventReferenceScript":"setTimeout(\"__doPostBack(\\\u0027ctl00$ContentPlaceHolder1$sPhoneNo\\\u0027,\\\u0027\\\u0027)\", 0)","_renderMode":2,"_skin":"Bootstrap","_validationText":"","clientStateFieldID":"ctl00_ContentPlaceHolder1_sPhoneNo_ClientState","enabled":true,"styles":{HoveredStyle: ["width:100%;", "riTextBox riHover"],InvalidStyle: ["width:100%;", "riTextBox riError"],DisabledStyle: ["width:100%;", "riTextBox riDisabled"],FocusedStyle: ["width:100%;", "riTextBox riFocused"],EmptyMessageStyle: ["width:100%;", "riTextBox riEmpty"],ReadOnlyStyle: ["width:100%;", "riTextBox riRead"],EnabledStyle: ["width:100%;", "riTextBox riEnabled"]}}, null, null, $get("ctl00_ContentPlaceHolder1_sPhoneNo"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadTextBox, {"_displayText":"Start with first name ...","_focused":false,"_initialValueAsText":"","_postBackEventReferenceScript":"setTimeout(\"__doPostBack(\\\u0027ctl00$ContentPlaceHolder1$sIndividualName\\\u0027,\\\u0027\\\u0027)\", 0)","_renderMode":2,"_skin":"Bootstrap","_validationText":"","clientStateFieldID":"ctl00_ContentPlaceHolder1_sIndividualName_ClientState","emptyMessage":"Start with first name ...","enabled":true,"styles":{HoveredStyle: ["width:100%;", "riTextBox riHover"],InvalidStyle: ["width:100%;", "riTextBox riError"],DisabledStyle: ["width:100%;", "riTextBox riDisabled"],FocusedStyle: ["width:100%;", "riTextBox riFocused"],EmptyMessageStyle: ["width:100%;", "riTextBox riEmpty"],ReadOnlyStyle: ["width:100%;", "riTextBox riRead"],EnabledStyle: ["width:100%;", "riTextBox riEnabled"]}}, null, null, $get("ctl00_ContentPlaceHolder1_sIndividualName"));
});

var callBackFrameUrl='/WebResource.axd?d=beToSAE3vdsL1QUQUxjWddjGMuYrIP_r6kVUf6Gqbekyy60suaar908ZaSeHOz-Hbl00IfaslO69y9n5fzBXgA2&t=637671196142241984';
WebForm_InitCallback();Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadComboBox, {"_dropDownWidth":0,"_height":0,"_renderMode":2,"_skin":"Bootstrap","_text":"ALL","_uniqueId":"ctl00$ContentPlaceHolder1$sGender","_value":"-","clientStateFieldID":"ctl00_ContentPlaceHolder1_sGender_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"value":"-","selected":true},{"value":"M"},{"value":"F"}],"localization":"{\"AllItemsCheckedString\":\"All items checked\",\"ItemsCheckedString\":\"items checked\",\"CheckAllString\":\"Check All\"}","selectedIndex":0}, null, null, $get("ctl00_ContentPlaceHolder1_sGender"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadComboBox, {"_dropDownWidth":0,"_height":0,"_renderMode":2,"_skin":"Bootstrap","_text":"ALL","_uniqueId":"ctl00$ContentPlaceHolder1$sCOO","_value":"-","clientStateFieldID":"ctl00_ContentPlaceHolder1_sCOO_ClientState","collapseAnimation":"{\"duration\":450}","expandAnimation":"{\"duration\":450}","itemData":[{"value":"-","selected":true},{"value":"AFG"},{"value":"AIA"},{"value":"ALB"},{"value":"ALG"},{"value":"AND"},{"value":"ANG"},{"value":"ANT"},{"value":"ARE"},{"value":"ARG"},{"value":"ARM"},{"value":"ASM"},{"value":"ATA"},{"value":"SSD"},{"value":"SUD"},{"value":"AUS"},{"value":"AZE"},{"value":"BAH"},{"value":"BAR"},{"value":"BDI"},{"value":"BEL"},{"value":"BEN"},{"value":"BER"},{"value":"BGD"},{"value":"BHS"},{"value":"BHU"},{"value":"BKF"},{"value":"BLR"},{"value":"BOL"},{"value":"BOT"},{"value":"BRA"},{"value":"BRU"},{"value":"BSN"},{"value":"BUL"},{"value":"BVT"},{"value":"BZE"},{"value":"CAM"},{"value":"CAN"},{"value":"CAR"},{"value":"CAY"},{"value":"CCK"},{"value":"CHD"},{"value":"CHI"},{"value":"CHL"},{"value":"CMR"},{"value":"COB"},{"value":"COD"},{"value":"COI"},{"value":"COK"},{"value":"COL"},{"value":"COS"},{"value":"CUB"},{"value":"CVI"},{"value":"CXR"},{"value":"CYP"},{"value":"CZE"},{"value":"DEN"},{"value":"DJB"},{"value":"DMA"},{"value":"DOM"},{"value":"DUB"},{"value":"ECU"},{"value":"EGU"},{"value":"ERT"},{"value":"EST"},{"value":"ETH"},{"value":"FGU"},{"value":"FIJ"},{"value":"FIN"},{"value":"FLK"},{"value":"FNC"},{"value":"FPO"},{"value":"FRA"},{"value":"FRO"},{"value":"FSM"},{"value":"GAB"},{"value":"GAM"},{"value":"GBR"},{"value":"GEO"},{"value":"GFR"},{"value":"GHA"},{"value":"GIB"},{"value":"GNB"},{"value":"GRE"},{"value":"GRL"},{"value":"GRN"},{"value":"GUA"},{"value":"GUI"},{"value":"GUM"},{"value":"GUY"},{"value":"HAI"},{"value":"HKG"},{"value":"HMD"},{"value":"HON"},{"value":"HRV"},{"value":"HUN"},{"value":"ICE"},{"value":"LAO"},{"value":"IND"},{"value":"INS"},{"value":"IOT"},{"value":"IRE"},{"value":"IRN"},{"value":"IRQ"},{"value":"ISR"},{"value":"ITA"},{"value":"JAM"},{"value":"JOR"},{"value":"JPN"},{"value":"KAZ"},{"value":"KEN"},{"value":"KGZ"},{"value":"KIR"},{"value":"KNA"},{"value":"KOR"},{"value":"MAU"},{"value":"KUR"},{"value":"KUW"},{"value":"MIC"},{"value":"LBR"},{"value":"LBY"},{"value":"LCA"},{"value":"LEB"},{"value":"LES"},{"value":"LIE"},{"value":"LKA"},{"value":"LTU"},{"value":"LUX"},{"value":"LVA"},{"value":"MAC"},{"value":"MAD"},{"value":"MAR"},{"value":"MAU"},{"value":"MCD"},{"value":"MCO"},{"value":"MDA"},{"value":"MDV"},{"value":"MEX"},{"value":"MHL"},{"value":"MLI"},{"value":"MLS"},{"value":"MLW"},{"value":"MNE"},{"value":"MNG"},{"value":"MNP"},{"value":"MOR"},{"value":"MOZ"},{"value":"MSR"},{"value":"MTA"},{"value":"MTS"},{"value":"MYA"},{"value":"MYT"},{"value":"NAM"},{"value":"NAN"},{"value":"NCL"},{"value":"NEP"},{"value":"NET"},{"value":"NFK"},{"value":"NGR"},{"value":"NIC"},{"value":"NIG"},{"value":"NIU"},{"value":"NOR"},{"value":"NRU"},{"value":"NZL"},{"value":"OMN"},{"value":"PAK"},{"value":"PAL"},{"value":"PAN"},{"value":"PAR"},{"value":"PCN"},{"value":"PER"},{"value":"PHI"},{"value":"PLW"},{"value":"PNG"},{"value":"POL"},{"value":"POR"},{"value":"PUE"},{"value":"QAT"},{"value":"REU"},{"value":"ROM"},{"value":"RSA"},{"value":"RUS"},{"value":"RWA"},{"value":"SAL"},{"value":"SAU"},{"value":"SCG"},{"value":"SEN"},{"value":"SER"},{"value":"SEY"},{"value":"SGS"},{"value":"SHN"},{"value":"SIK"},{"value":"SIN"},{"value":"SJM"},{"value":"SLE"},{"value":"SMA"},{"value":"TUN"},{"value":"SOM"},{"value":"SYR"},{"value":"SPA"},{"value":"YEM"}],"localization":"{\"AllItemsCheckedString\":\"All items checked\",\"ItemsCheckedString\":\"items checked\",\"CheckAllString\":\"Check All\"}","markFirstMatch":true,"selectedIndex":0}, null, null, $get("ctl00_ContentPlaceHolder1_sCOO"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadDateInput, {"_displayText":"","_focused":false,"_initialValueAsText":"","_postBackEventReferenceScript":"__doPostBack(\u0027ctl00$ContentPlaceHolder1$sDOB\u0027,\u0027\u0027)","_renderMode":2,"_skin":"Bootstrap","_validationText":"","clientStateFieldID":"ctl00_ContentPlaceHolder1_sDOB_dateInput_ClientState","dateFormat":"dd/MM/yyyy","dateFormatInfo":{"DayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"MonthNames":["January","February","March","April","May","June","July","August","September","October","November","December",""],"AbbreviatedDayNames":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"AbbreviatedMonthNames":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",""],"AMDesignator":"AM","PMDesignator":"PM","DateSeparator":"/","TimeSeparator":":","FirstDayOfWeek":0,"DateSlots":{"Month":1,"Day":0,"Year":2},"ShortYearCenturyEnd":2029,"TimeInputOnly":false,"MonthYearOnly":false},"displayDateFormat":"dd/MM/yyyy","enabled":true,"incrementSettings":{InterceptArrowKeys:true,InterceptMouseWheel:true,Step:1},"minDate":"1900-01-01-00-00-00","styles":{HoveredStyle: ["", "riTextBox riHover"],InvalidStyle: ["", "riTextBox riError"],DisabledStyle: ["", "riTextBox riDisabled"],FocusedStyle: ["", "riTextBox riFocused"],EmptyMessageStyle: ["", "riTextBox riEmpty"],ReadOnlyStyle: ["", "riTextBox riRead"],EnabledStyle: ["", "riTextBox riEnabled"]}}, null, null, $get("ctl00_ContentPlaceHolder1_sDOB_dateInput"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadMonthYearPicker, {"_FormatInfoArray":[["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],["January","February","March","April","May","June","July","August","September","October","November","December",""],["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",""],"dd MMMM yyyy HH:mm:ss","dd MMMM yyyy","HH:mm:ss","d MMMM","ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027","dd/MM/yyyy","HH:mm","yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss","yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027","MMMM yyyy","AM","PM","/",":",1],"_PopupButtonSettings":{ ResolvedImageUrl : "", ResolvedHoverImageUrl : ""},"_animationSettings":{ShowAnimationDuration:300,ShowAnimationType:1,HideAnimationDuration:300,HideAnimationType:1},"_culture":"en-GB","_enableKeyboardNavigation":false,"_popupControlID":"ctl00_ContentPlaceHolder1_sDOB_popupButton","_renderMode":2,"clientStateFieldID":"ctl00_ContentPlaceHolder1_sDOB_ClientState","focusedDate":"2021-12-14-00-00-00","minDate":"1900-01-01-00-00-00","monthYearNavigationSettings":["Today","OK","Cancel","Cancel","True","True","300","1","300","1","False"],"skin":"Bootstrap","stylesHash":{"FastNavigationStyle": ["", "RadCalendarMonthView RadCalendarMonthView_Bootstrap"]}}, null, {"dateInput":"ctl00_ContentPlaceHolder1_sDOB_dateInput"}, $get("ctl00_ContentPlaceHolder1_sDOB"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadButton, {"_accessKey":"","_hasIcon":true,"_hasImage":false,"_isClientSubmit":false,"_isImageButton":false,"_postBackReference":"","_renderMode":2,"clientStateFieldID":"ctl00_ContentPlaceHolder1_btnSearch_ClientState","confirmSettings":{},"iconData":{"primaryCssClass":"rbSearch"},"imageData":{},"primary":true,"text":"Search...","toggleStatesData":[],"uniqueGroupName":"","uniqueID":"ctl00$ContentPlaceHolder1$btnSearch"}, null, null, $get("ctl00_ContentPlaceHolder1_btnSearch"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadImageButton, {"_accessKey":"","_hasImage":false,"_isClientSubmit":false,"_postBackReference":"","_renderMode":2,"clientStateFieldID":"ctl00_ContentPlaceHolder1_btnIRISRecog_ClientState","confirmSettings":{},"imageData":{},"text":"IRIS Recognition","uniqueID":"ctl00$ContentPlaceHolder1$btnIRISRecog"}, null, null, $get("ctl00_ContentPlaceHolder1_btnIRISRecog"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadButton, {"_accessKey":"","_hasIcon":true,"_hasImage":false,"_isClientSubmit":false,"_isImageButton":false,"_postBackReference":"","_renderMode":2,"clientStateFieldID":"ctl00_ContentPlaceHolder1_btnClear_ClientState","confirmSettings":{},"iconData":{"primaryCssClass":"rbRemove"},"imageData":{},"text":"Clear","toggleStatesData":[],"uniqueGroupName":"","uniqueID":"ctl00$ContentPlaceHolder1$btnClear"}, null, null, $get("ctl00_ContentPlaceHolder1_btnClear"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadGrid, {"ClientID":"ctl00_ContentPlaceHolder1_dgvSearch","ClientSettings":{"AllowAutoScrollOnDragDrop":true,"ShouldCreateRows":true,"DataBinding":{},"Selecting":{"CellSelectionMode":0,"AllowRowSelect":true,"EnableDragToSelectRows":true},"Scrolling":{},"Resizing":{},"ClientMessages":{},"KeyboardNavigationSettings":{"AllowActiveRowCycle":false,"EnableKeyboardShortcuts":true,"FocusKey":89,"InitInsertKey":73,"RebindKey":82,"ExitEditInsertModeKey":27,"UpdateInsertItemKey":13,"DeleteActiveRow":127,"ExpandDetailTableKey":39,"CollapseDetailTableKey":37,"MoveDownKey":40,"MoveUpKey":38,"SaveChangesKey":85,"CancelChangesKey":81},"Animation":{},"Virtualization":{}},"Skin":"Bootstrap","SortingSettings":{"SortToolTip":"Click here to sort","SortedAscToolTip":"Sorted asc","SortedDescToolTip":"Sorted desc","SortedBackColor":{"R":0,"G":0,"B":0,"A":0,"IsKnownColor":false,"IsEmpty":true,"IsNamedColor":false,"IsSystemColor":false,"Name":"0"},"EnableSkinSortStyles":true,"ViewState":{}},"UniqueID":"ctl00$ContentPlaceHolder1$dgvSearch","_activeRowIndex":"","_controlToFocus":"","_currentPageIndex":0,"_defaultDateTimeFormat":"M/d/yyyy h:mm:ss tt","_editIndexes":"[]","_embeddedSkin":true,"_freezeText":"Freeze","_gridTableViewsData":"[{\"ClientID\":\"\",\"UniqueID\":null,\"PageSize\":10,\"PageCount\":1,\"EditMode\":\"EditForms\",\"AllowPaging\":true,\"CurrentPageIndex\":0,\"VirtualItemCount\":0,\"AllowMultiColumnSorting\":false,\"AllowNaturalSort\":true,\"AllowFilteringByColumn\":false,\"PageButtonCount\":10,\"HasDetailTables\":false,\"HasMultiHeaders\":false,\"CheckListWebServicePath\":\"\",\"GroupLoadMode\":\"Server\",\"PagerAlwaysVisible\":false,\"IsItemInserted\":false,\"clientDataKeyNames\":[],\"hasDetailItemTemplate\":false,\"_dataBindTemplates\":false,\"_selectedItemStyle\":\"\",\"_selectedItemStyleClass\":\"rgSelectedRow\",\"_columnsData\":[{\"UniqueName\":\"column\",\"Resizable\":true,\"Reorderable\":true,\"Selectable\":false,\"Groupable\":false,\"ColumnType\":\"GridButtonColumn\",\"ColumnGroupName\":\"\",\"Editable\":false,\"DataTypeName\":\"System.String\",\"ButtonType\":\"FontIconButton\",\"CommandName\":\"View\",\"CommandArgument\":\"\",\"Text\":\"View\",\"DataTextField\":\"\",\"DataTextFormatString\":\"\",\"ImageUrl\":\"\",\"Display\":true},{\"UniqueName\":\"Photo\",\"Resizable\":true,\"Reorderable\":true,\"Selectable\":true,\"Groupable\":true,\"ColumnType\":\"GridBinaryImageColumn\",\"ColumnGroupName\":\"\",\"Editable\":true,\"DataTypeName\":\"System.String\",\"DataAlternateTextField\":\"\",\"DataAlternateTextFormatString\":\"\",\"Display\":true},{\"UniqueName\":\"ProcessStatus\",\"Resizable\":true,\"Reorderable\":true,\"Selectable\":true,\"Groupable\":true,\"ColumnType\":\"GridBoundColumn\",\"ColumnGroupName\":\"\",\"Editable\":true,\"SortExpression\":\"ProcessStatus\",\"DataTypeName\":\"System.String\",\"DataField\":\"ProcessStatus\",\"Display\":true}]}]","_masterClientID":"","_shouldFocusOnPage":false,"_unfreezeText":"Unfreeze","allowMultiRowSelection":false,"clientStateFieldID":"ctl00_ContentPlaceHolder1_dgvSearch_ClientState","renderMode":2}, null, null, $get("ctl00_ContentPlaceHolder1_dgvSearch"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadAjaxPanel, {"clientEvents":{OnRequestStart:"",OnResponseEnd:""},"enableAJAX":true,"enableHistory":false,"links":[],"loadingPanelID":"","styles":[],"uniqueID":"ctl00$ContentPlaceHolder1$pMainPanel"}, null, null, $get("ctl00_ContentPlaceHolder1_pMainPanel"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadButton, {"_accessKey":"","_hasIcon":false,"_hasImage":false,"_isClientSubmit":false,"_isImageButton":false,"_postBackReference":"","_renderMode":2,"autoPostBack":false,"clientStateFieldID":"ctl00_RadNotification1_C_continueSession_ClientState","confirmSettings":{},"iconData":{},"imageData":{},"text":"Continue Your Session","toggleStatesData":[],"uniqueGroupName":"","uniqueID":"ctl00$RadNotification1$C$continueSession"}, {"clicked":ContinueSession}, null, $get("ctl00_RadNotification1_C_continueSession"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadXmlHttpPanel, {"_isCallbackPanel":true,"_uniqueId":"ctl00$RadNotification1$XmlPanel","clientStateFieldID":"ctl00_RadNotification1_XmlPanel_ClientState","enableClientScriptEvaluation":true,"loadingPanelID":""}, null, null, $get("ctl00_RadNotification1_XmlPanel"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadContextMenu, {"_childListElementCssClass":"rmActive rmVertical rmGroup rmLevel1","_renderMode":2,"_skin":"Metro","clientStateFieldID":"ctl00_RadNotification1_TitleMenu_ClientState","collapseAnimation":"{\"duration\":450}","enableRoundedCorners":true,"expandAnimation":"{\"duration\":450}","itemData":[],"targets":[]}, null, null, $get("ctl00_RadNotification1_TitleMenu"));
});
Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadNotification, {"_audioMimeType":"audio/wav","_audioUrl":"none","autoCloseDelay":60000,"clientStateFieldID":"ctl00_RadNotification1_ClientState","formID":"ctl02","height":"100px","keepOnMouseOver":false,"position":22,"showCloseButton":false,"showInterval":5340000,"title":"Continue Your Session","value":"../SessionExpired.aspx","width":"240px"}, {"hidden":OnClientHidden,"showing":OnClientShowing}, null, $get("ctl00_RadNotification1"));
});
//]]>
</script>
<div id="ctl00_RadNotification1_popup" class="RadNotification RadNotification_Metro rnRoundedCorners" style="display: none; position: absolute; height: 100px; width: 240px; z-index: 10000;">
		<div class="rnTitleBar" id="ctl00_RadNotification1_titlebar">
			<span class="rnIcon rnIconInfo"></span><span class="rnTitleBarTitle">Continue Your Session</span>
		</div><div id="ctl00_RadNotification1_XmlPanel" class="RadXmlHttpPanel">
			<div id="ctl00_RadNotification1_C" class="rnContentWrapper" style="height: 69.4286px; width: 232px;">
				
                        <div class="row">
                            <div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
                                <span id="ctl00_RadNotification1_C_timeremainingRadLabel" class="RadLabel RadLabel_Material"> Time remaining:&nbsp;</span>
                                <span id="timeLbl">60</span>
                                <button type="submit" name="ctl00$RadNotification1$C$continueSession" value="Continue Your Session" id="ctl00_RadNotification1_C_continueSession" class="RadButton RadButton_Metro rbButton rbRounded rbIconButton" style="margin-top: 10px;" tabindex="0"><span class="rbText">Continue Your Session</span><input id="ctl00_RadNotification1_C_continueSession_ClientState" name="ctl00_RadNotification1_C_continueSession_ClientState" type="hidden" autocomplete="off" value="{&quot;text&quot;:&quot;Continue Your Session&quot;,&quot;value&quot;:&quot;&quot;,&quot;checked&quot;:false,&quot;target&quot;:&quot;&quot;,&quot;navigateUrl&quot;:&quot;&quot;,&quot;commandName&quot;:&quot;&quot;,&quot;commandArgument&quot;:&quot;&quot;,&quot;autoPostBack&quot;:false,&quot;selectedToggleStateIndex&quot;:0,&quot;validationGroup&quot;:null,&quot;readOnly&quot;:false,&quot;primary&quot;:false,&quot;enabled&quot;:true}"></button>
                            </div>
                        </div>
                    
			</div><input type="hidden" name="ctl00$RadNotification1$hiddenState" id="ctl00_RadNotification1_hiddenState" value="../SessionExpired.aspx"><input id="ctl00_RadNotification1_XmlPanel_ClientState" name="ctl00_RadNotification1_XmlPanel_ClientState" type="hidden" autocomplete="off">
		</div><div tabindex="0" id="ctl00_RadNotification1_TitleMenu" style="display: none; visibility: visible; z-index: 7000;">
			<div class="RadMenu RadMenu_Metro RadMenu_Context RadMenu_Metro_Context rmRoundedCorners rmRoundedCorners_Metro" id="ctl00_RadNotification1_TitleMenu_detached" style="display: none; visibility: visible; z-index: 10100;">

			<ul class="rmActive rmVertical rmGroup rmLevel1" style="float: left;"></ul></div><input class="rmActive rmVertical rmGroup rmLevel1" id="ctl00_RadNotification1_TitleMenu_ClientState" name="ctl00_RadNotification1_TitleMenu_ClientState" type="hidden" autocomplete="off">
		</div>
	</div></form>
        </div>
        <div id="main-menu-bg"></div>
    </div>
    
        <script type="text/javascript">
            var prm = Sys.WebForms.PageRequestManager.getInstance();
            prm.add_beginRequest(beginRequest);
            function beginRequest() {
                prm._scrollPosition = null;
            }
        </script>
        <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">' + "<" + "/script>"); </script>

        <script src="./UNHCR Refugee Assistance Information System_files/bootstrap.min.js.download"></script>
        <script src="./UNHCR Refugee Assistance Information System_files/bootstrap-submenu.min.js.download" type="text/javascript"></script>
        <script src="./UNHCR Refugee Assistance Information System_files/pixel-admin.min.js.download"></script>
        <script type="text/javascript">
            init.push(function () {
                $('.dropdown-submenu > a').submenupicker();
            })
            window.PixelAdmin.start(init);
        </script>
        <script type="text/javascript">
            function requestStart(sender, args) { if (args.get_eventTarget().indexOf("ExportToExcelButton") >= 0) { args.set_enableAjax(false); } }
            var mainLblCounter = null; var timeLeftCounter = null; var seconds = 60; var secondsBeforeShow = 60; var mainLabel;
            function pageLoad() { var xmlPanel = $find("ctl00_RadNotification1")._xmlPanel; xmlPanel.set_enableClientScriptEvaluation(true); };
            function stopTimer(timer) { clearInterval(this[timer]); this[timer] = null; };
            function resetTimer(timer, func, interval) { this.stopTimer(timer); this[timer] = setInterval(Function.createDelegate(this, func), interval); };
            function OnClientShowing(sender, args) { resetTimer("timeLeftCounter", UpdateTimeLabel, 1000); }
            function updateMainLabel(toReset) { secondsBeforeShow = (toReset === true) ? 60 : secondsBeforeShow - 1; mainLabel.innerHTML = secondsBeforeShow; }
            function OnClientHidden() { updateMainLabel(true); mainLabel.style.display = ""; }
            function UpdateTimeLabel(toReset) { var sessionExpired = (seconds === 0); if (sessionExpired) { stopTimer("timeLeftCounter"); window.location.href = $find("ctl00_RadNotification1").get_value(); } else { var timeLbl = $get("timeLbl"); timeLbl.innerHTML = seconds--; } }
            function ContinueSession() { var notification = $find("ctl00_RadNotification1"); notification.update(); notification.hide(); var showIntervalStorage = notification.get_showInterval(); notification.set_showInterval(0); notification.set_showInterval(showIntervalStorage); stopTimer("timeLeftCounter"); seconds = 60; updateMainLabel(true); }

            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                // Avoid following the href location when clicking
                event.preventDefault();
                // Avoid having the menu to close when clicking
                event.stopPropagation();
                // If a menu is already open we close it
                $('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
                // opening the one you clicked on
                $(this).parent().addClass('open');

                var menu = $(this).parent().find("ul");
                var menupos = menu.offset();

                if ((menupos.left + menu.width()) + 30 > $(window).width()) {
                    var newpos = -menu.width();
                } else {
                    var newpos = $(this).parent().width();
                }
                menu.css({ left: newpos });

            });

        </script>
    


<div id="small-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div id="tablet-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div id="demo-settings">
 
 <h5 class="header">SETTINGS</h5>
 <div>
   <ul id="demo-settings-list">
     <li class="clearfix">
       <span>Fixed navbar</span>
       <div class="demo-checkbox"><div class="switcher switcher-theme-square switcher-sm"><input type="checkbox" id="demo-fixed-navbar" class="demo-settings-switcher" data-class="switcher-sm"><div class="switcher-toggler"></div><div class="switcher-inner"><div class="switcher-state-on"><span class="fa fa-check" style="font-size:11px;"></span></div><div class="switcher-state-off"><span class="fa fa-times" style="font-size:11px;"></span></div></div></div></div>
     </li>
     <li class="clearfix">
       <span>Fixed main menu</span>
       <div class="demo-checkbox"><div class="switcher switcher-theme-square switcher-sm"><input type="checkbox" id="demo-fixed-menu" class="demo-settings-switcher" data-class="switcher-sm"><div class="switcher-toggler"></div><div class="switcher-inner"><div class="switcher-state-on"><span class="fa fa-check" style="font-size:11px;"></span></div><div class="switcher-state-off"><span class="fa fa-times" style="font-size:11px;"></span></div></div></div></div>
     </li>
     <li class="clearfix">
       <span>Right-to-left direction</span>
       <div class="demo-checkbox"><div class="switcher switcher-theme-square switcher-sm"><input type="checkbox" id="demo-rtl" class="demo-settings-switcher" data-class="switcher-sm"><div class="switcher-toggler"></div><div class="switcher-inner"><div class="switcher-state-on"><span class="fa fa-check" style="font-size:11px;"></span></div><div class="switcher-state-off"><span class="fa fa-times" style="font-size:11px;"></span></div></div></div></div>
     </li>
     <li class="clearfix">
       <span>Main menu on the right</span>
       <div class="demo-checkbox"><div class="switcher switcher-theme-square switcher-sm"><input type="checkbox" id="demo-menu-rigth" class="demo-settings-switcher" data-class="switcher-sm"><div class="switcher-toggler"></div><div class="switcher-inner"><div class="switcher-state-on"><span class="fa fa-check" style="font-size:11px;"></span></div><div class="switcher-state-off"><span class="fa fa-times" style="font-size:11px;"></span></div></div></div></div>
     </li>
     <li class="clearfix">
       <span>Hide main menu</span>
       <div class="demo-checkbox"><div class="switcher switcher-theme-square switcher-sm"><input type="checkbox" id="demo-no-menu" class="demo-settings-switcher" data-class="switcher-sm"><div class="switcher-toggler"></div><div class="switcher-inner"><div class="switcher-state-on"><span class="fa fa-check" style="font-size:11px;"></span></div><div class="switcher-state-off"><span class="fa fa-times" style="font-size:11px;"></span></div></div></div></div>
     </li>
   </ul>
 </div>
 <h5 class="header">THEMES</h5>
 <div id="demo-themes">
<div class="demo-themes-row"><a href="#" class="demo-theme active" data-theme="default"><div class="theme-preview"><img src="../assets/demo/themes/default.png" alt=""></div><div class="overlay"></div><span>Default</span></a><a href="#" class="demo-theme" data-theme="asphalt"><div class="theme-preview"><img src="../assets/demo/themes/asphalt.png" alt=""></div><div class="overlay"></div><span>Asphalt</span></a></div><div class="demo-themes-row"><a href="#" class="demo-theme" data-theme="purple-hills"><div class="theme-preview"><img src="../assets/demo/themes/purple-hills.png" alt=""></div><div class="overlay"></div><span>Purple Hills</span></a><a href="#" class="demo-theme" data-theme="adminflare"><div class="theme-preview"><img src="../assets/demo/themes/adminflare.png" alt=""></div><div class="overlay"></div><span>Adminflare</span></a></div><div class="demo-themes-row"><a href="#" class="demo-theme" data-theme="dust"><div class="theme-preview"><img src="../assets/demo/themes/dust.png" alt=""></div><div class="overlay"></div><span>Dust</span></a><a href="#" class="demo-theme" data-theme="frost"><div class="theme-preview"><img src="../assets/demo/themes/frost.png" alt=""></div><div class="overlay"></div><span>Frost</span></a></div><div class="demo-themes-row"><a href="#" class="demo-theme" data-theme="fresh"><div class="theme-preview"><img src="../assets/demo/themes/fresh.png" alt=""></div><div class="overlay"></div><span>Fresh</span></a><a href="#" class="demo-theme" data-theme="silver"><div class="theme-preview"><img src="../assets/demo/themes/silver.png" alt=""></div><div class="overlay"></div><span>Silver</span></a></div><div class="demo-themes-row"><a href="#" class="demo-theme" data-theme="clean"><div class="theme-preview"><img src="../assets/demo/themes/clean.png" alt=""></div><div class="overlay"></div><span>Clean</span></a><a href="#" class="demo-theme" data-theme="white"><div class="theme-preview"><img src="../assets/demo/themes/white.png" alt=""></div><div class="overlay"></div><span>White</span></a></div>
 </div>
</div><div id="small-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div id="tablet-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div class="modal-backdrop fade in"></div></body>
</html>