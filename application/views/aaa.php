<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <!-- App title -->
    <title>Dashboard - <?php echo $this->config->item('nama_aplikasi') . " " . $this->config->item('versi'); ?></title>

    <!-- App CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="<?= site_url('') ?>" class="logo"><span>CB<span>T</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title"><?php echo $this->config->item('nama_aplikasi') . " " . $this->config->item('versi'); ?></h4>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="<?php echo base_url(); ?>assets/images/h.png" alt="user-img"
                         title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                </div>
                <h5 class="text-capitalize"><a href="#"><?= $sess_user; ?></a></h5>
                <ul class="list-inline">
                    <li>
                        <a href="#" onclick="return rubah_password();">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>adm/logout"
                           onclick="return confirm('Apakah Anda Yakin Ingin Keluar Dari Sistem..?');""
                        class="text-custom">
                        <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">Navigation</li>
                    <li>
                        <a href="<?= site_url() ?>" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span>
                        </a>
                    </li>
                    <?php
                    $CI =& get_instance();
                    $sess_level = $CI->session->userdata('admin_level');
                    $url = $CI->uri->segment(2); ?>
                    <?php if ($sess_level == 'guru'): ?>
                        <li>
                            <a href="<?= site_url('adm/m_soal') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Soal </span> </a>
                        </li>
                        <li>
                            <a href="<?= site_url('adm/m_ujian') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Ujian </span> </a>
                        </li>
                        <li>
                            <a href="<?= site_url('adm/h_ujian') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Hasil Ujian </span> </a>
                        </li>
                    <?php elseif ($sess_level == 'siswa'): ?>
                        <li>
                            <a href="<?= site_url('adm/ikuti_ujian') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Ujian </span> </a>
                        </li>
                    <?php elseif ($sess_level == 'admin'): ?>
                        <li>
                            <a href="<?= site_url('adm/m_siswa') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Data Siswa </span> </a>
                        </li>
                        <li>
                            <a href="<?= site_url('adm/m_guru') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Data Guru/Dosen </span> </a>
                        </li>
                        <li>
                            <a href="<?= site_url('adm/m_mapel') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Data Mapel </span> </a>
                        </li>
                        <li>
                            <a href="<?= site_url('adm/m_soal') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Soal </span> </a>
                        </li>
                        <li>
                            <a href="<?= site_url('adm/m_km_dasar') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Komptensi Dasar </span> </a>
                        </li>
                        <li>
                            <a href="<?= site_url('adm/h_ujian') ?>" class="waves-effect"><i
                                        class="zmdi zmdi-format-underlined"></i>
                                <span> Hasil Ujian </span> </a>
                        </li>
                    <?php else: ?>
                        <?php
                        $menu = array(
                            array("icon" => "dashboard", "url" => "", "text" => "Dashboard")
                        );
                        if ($url == "ikut_ujian") {
                            $menu = null;
                        }
                        ?>
                    <?php endif; ?>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <?php echo $this->load->view($p); ?>

                <!-- End row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            <a href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi') . " " . $this->config->item('versi') . "</a><br> Waktu Server: " . tjs(date('Y-m-d H:i:s'), "s") . " - Waktu Database: " . tjs($this->waktu_sql, "s"); ?>

        </footer>

    </div>
    <!-- End content-page -->


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    <div id="tampilkan_modal"></div>

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<?php
if ($this->uri->segment(2) == "m_soal" && $this->uri->segment(3) == "edit") {
    ?>
    <script src="<?php echo base_url(); ?>___/plugin/ckeditor/ckeditor.js"></script>
    <?php
}
?>
<script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

<script src="<?php echo base_url(); ?>___/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.min.js"></script>


<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.plugin.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdown.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script>

<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    var editor_style = "<?php echo $this->config->item('editor_style'); ?>";
    var uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

</body>
</html>