<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Pemrograman Web 2</title>
        
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.googleapis.com.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace-skins.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/ace-extra.min.jss');?>"></script>
    
</head>
    <body class="no-skin">
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ul><!-- /.breadcrumb -->

                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                Dashboard
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    overview &amp; stats
                                </small>
                            </h1>
                        </div><!-- /.page-header -->
                        <div class="row">
                            <div class="col-xs-12">
                                    <div class="alert alert-block alert-info">
                                        <button type="button" class="close" data-dismiss="alert">
                                            <i class="ace-icon fa fa-times"></i>
                                        </button>
                                        <i class="ace-icon fa fa-check green"></i>
                                        Selamat datang
                                        <strong class="green">
                                            <b>Admin</b>
                                        </strong>,<br><br>
                                        Berusaha dan berdoa
                                    </div>
                                    <div class="widget-header widget-header-flat widget-header-small">
                                        <h5 class="widget-title">
                                            <i class="ace-icon fa fa-signal"></i>
                                            Kelola Halaman Web
                                        </h5>
                                    </div>
                                    <br>
                                    <div class="widget-body">
                                        <div class="infobox infobox-green ">
                                            <div class="infobox-icon">
                                                <i class="ace-icon fa fa-comments"></i>
                                            </div>
                                            <div class="infobox-data">
                                                <span class="infobox-data-number">0</span>
                                                <div class="infobox-content">Komentar &nbsp;
                                                +
                                                    <span class="label label-info arrowed-right arrowed-in">New</span>
                                                </div>
                                            </div>
                                                <div class="stat stat-success">4</div>
                                        </div>
                                        <div class="infobox infobox-red">
                                            <div class="infobox-icon">
                                                <i class="ace-icon fa fa-flask"></i>
                                            </div>
                                            <div class="infobox-data">
                                                <span class="infobox-data-number">0</span>
                                                <div class="infobox-content">Testimoni &nbsp;
                                                +
                                                <span class="label label-info arrowed-right arrowed-in">New</span>
                                                </div>
                                            </div>
                                                <div class="stat stat-success">5</div>
                                        </div>
                                        <div class="infobox infobox-orange2">
                                            <div class="infobox-icon">
                                                <i class="ace-icon fa fa-download"></i>
                                            </div>
                                            <div class="infobox-data">
                                                <span class="infobox-data-number">100</span>
                                                <div class="infobox-content"><i>pageviews</i></div>
                                            </div>
                                        </div>
                                    </div><!-- /.widget-body -->
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.custom.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easypiechart.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.sparkline.index.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flot.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flot.pie.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flot.resize.min.js');?>"></script>
        
        <!-- ace scripts -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/ace-elements.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/ace.min.js');?>"></script>
        
    </body>
</html>
