<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Filmes e Séries - MouseBox</title>

    <?php include $_SERVER['DOCUMENT_ROOT']."/topo/metatopo.php"; ?>

    <link href="../../comuns/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="../../comuns/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../comuns/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../../comuns/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../comuns/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../comuns/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../comuns/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="../../comuns/plugins/jquery-menuclipper/jquery.menuclipper.css" rel="stylesheet" type="text/css" />
    <link href="../../comuns/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="../../comuns/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header   ">
    <!-- BEGIN SIDEBPANEL-->
    <?php include($_SERVER['DOCUMENT_ROOT']."/topo/menu.php"); ?>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
      <!-- START HEADER -->
      <?php include($_SERVER['DOCUMENT_ROOT']."/topo/header.php"); ?>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper full-height">
        <!-- START PAGE CONTENT -->
        <?php
            $page = $_GET['pagina'];
            if ($page=='') {
               $page = "uc/home.php";
                include $page;
            } else {
            if ($page!='') {
              if (file_exists('uc/'.$page.'.php')) {
                $page = "uc/". $page . ".php";
                include $page;
              }else {
                header("Location: /404.php");
                exit;
            }}}
        ?>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/quickview.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/overlay.php"); ?>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="../../comuns/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="../../comuns/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="../../comuns/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="../../comuns/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="../../comuns/plugins/classie/classie.js"></script>
    <script src="../../comuns/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="../../comuns/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="../../comuns/plugins/jquery-menuclipper/jquery.menuclipper.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="../../comuns/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- END PAGE LEVEL JS -->
  </body>
</html>