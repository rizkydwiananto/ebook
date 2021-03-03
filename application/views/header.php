<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ebook | Electronic Book Rumah Sakit :: <?php echo $title;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Ionicons -->
    <link href="<?=base_url()?>assets/ionic-v.4.5.4/ionicons.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=base_url()?>bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css" type="text/css">
    <!-- Favicon -->
    <link href="<?=base_url()?>assets/images/foto/Logo-RSUD-Tebet-square.ico" rel="shortcut icon" />
    <!-- Pace style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/pace/pace.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <!-- jQuery 2.2.3 -->
    <script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="<?=base_url()?>bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- Ionic -->
    <script src="<?=base_url()?>assets/ionic-v.4.5.4/ionicons.js"></script>
    <!-- PACE -->
    <script src="<?=base_url()?>assets/bower_components/PACE/pace.min.js"></script>
    <!-- InputMask -->
    <script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?=base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src=".<?=base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- DataTables -->
    <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?=base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>assets/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>assets/dist/js/demo.js"></script>
    <!-- page script -->

</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b><i>e</i></b>-B</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>e</b>-<i>Book</i></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a>
                            <i class="fa fa-book margin-r-5"></i><b><i>Electronic</i></b> - BOOK | RUMAH SAKIT UMUM DAERAH TEBET
                        </a>
                    </li>

                    <li class="dropdown user user-menu open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" alt="User Image>
                            <span class="hidden-xs"><?php echo $this->session->userdata("username"); ?></span>
                        </a>
                        <i class="fa fa-sign-out"></i>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?=base_url()?>assets/images/foto/user.png" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $this->session->userdata("nama"); ?><br>
                                    <?php echo $this->session->userdata("unit"); ?>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?=base_url();?>user/profil" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=base_url();?>login/out" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=base_url()?>assets/images/foto/user-white.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $this->session->userdata("nama"); ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">NAVIGASI UTAMA</li>

                <!--MAIN MENU-->
                <li class="treeview <?php if ($title == 'Main Menu') { echo "active";} ?>">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?=base_url();?>dashboard"><i class="fa fa-circle-o"></i> Main Menu</a></li>
                    </ul>
                </li>

                <!--USER-->
                <li class="treeview <?php if ($title == 'Data User') { echo "active";}
                                        elseif ($title == 'Edit User') {echo "active";}
                                        elseif ($title == 'Data Akses') {echo "active";}
                                        elseif ($title == 'Tambah Akses') {echo "active";}
                                        elseif ($title == 'Edit Akses') {echo "active";}
                                        elseif ($title == 'Data Unit') {echo "active";}
                                        elseif ($title == 'Tambah Unit') {echo "active";}
                                        elseif ($title == 'Edit Unit') {echo "active";}
                                        elseif ($title == 'Profil') {echo "active";}
                                        elseif ($title == 'Tambah User') {echo "active";}?>">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>User</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <?php
                            if ($_SESSION['akses'] == 'Super Admin') {
                                echo '<li><a href="http://localhost/ebook/user"><i class="fa fa-circle-o"></i> Data User</a></li>';
                            } elseif ($_SESSION['akses'] == 'Apoteker') {
                                echo '<li><a href="http://localhost/ebook/user"><i class="fa fa-circle-o"></i> Data User</a></li>'

                        ?>
                        <?php } ?>
                        <li><a href="<?=base_url();?>user/data_akses"><i class="fa fa-circle-o"></i> Data Akses</a></li>
                        <li><a href="<?=base_url();?>user/data_unit"><i class="fa fa-circle-o"></i> Data Unit</a></li>
                        <li><a href="<?=base_url();?>user/profil_user"><i class="fa fa-circle-o"></i> Profil User</a></li>
                    </ul>
                </li>

                <!--KATEGORI-->
                <li class="treeview <?php if ($title == 'Data e-Book') { echo "active";}
                                    elseif ($title == 'Data Jenis E-book') {echo "active";}
                                    elseif ($title == 'Tambah e-Book') {echo "active";}
                                    elseif ($title == 'Tambah Jenis E-Book') {echo "active";}
                                    elseif ($title == 'Edit Jenis e_book') {echo "active";}?>">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span><i>e-Book</i></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?=base_url();?>ebook"></i><i class="fa fa-circle-o"></i> Data <i>e-Book</i></a></li>
                        <li><a href="<?=base_url();?>ebook/jenis_ebook"></i><i class="fa fa-circle-o"></i> Data Jenis <i>e-Book</i></a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1><?php echo $title; ?></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><?php echo $title; ?></a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!--<div class="box box-success">-->
                        <!-- /.box-header -->
                        <?php $this->load->view($view) ?>
                        <!-- /.box-body -->
                    <!--</div>-->
                    <!-- /.box -->


                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2019 | <a href="http://rdnanto.com">rdnanto</a>.</strong>
    </footer>
</div>
<!-- ./wrapper -->



<!-- TABLE -->
<script>
    $(function () {
        $('#example1').DataTable();
        $('#example3').DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //Date picker
        $('#datepicker1').datepicker({
            autoclose: true,todayHighlight: true,format: 'yyyy-mm-dd'
        })
        $('#datepicker2').datepicker({
            autoclose: true,todayHighlight: true,format: 'yyyy-mm-dd'
        })

        //Initialize Select2 Elements
        $('.select2').select2()
    });
</script>

<!-- LOADING PACE (yang loading jalan diatas) -->
<script type="text/javascript">
    // To make Pace works on Ajax calls
    $(document).ajaxStart(function () {
        Pace.restart()
    })
    $('.ajax').click(function () {
        $.ajax({
            url: '#', success: function (result) {
                $('.ajax-content').html('<hr>Ajax Request Completed !')
            }
        })
    })
</script>


</body>
</html>
