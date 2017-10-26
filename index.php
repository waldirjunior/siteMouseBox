<?php
  ob_start();
  session_start();
  if( !isset($_SESSION['site']) ) {
    header("Location: home.php");
    exit;
  }
?>
<!DOCTYPE HTML>
 <html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>MouseBox - A tecnologia move o mundo</title>
    <?php include $_SERVER['DOCUMENT_ROOT']."/topo/metatopo.php"; ?>

    <?php
      $ts = isset( $_GET['pagina'] ) ? $_GET['pagina'] : null;
      if($ts == 'inicio'){
    ?>
      <link href="comuns/revisar/components.css" rel="stylesheet" id="style_components" type="text/css" /><!--fica -->
      <link href="comuns/revisar/homeps.css" rel="stylesheet" type="text/css" />

    <?php } ?>

    <link href="comuns/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="comuns/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="comuns/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="comuns/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="comuns/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="comuns/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="comuns/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="comuns/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    <link href="comuns/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="comuns/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="comuns/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="comuns/css/pages.css" rel="stylesheet" type="text/css" />
    <script src="comuns/js/modernizr.js"></script> <!-- Modernizr -->
    <link class="main-stylesheet" href="comuns/css/home-css.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
    <link href="comuns/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
    <![endif]-->
  </head>
  <body class="fixed-header dashboard">
    <?php include_once "topo/menu.php"; ?>
    <div class="page-container ">
      <?php include_once "topo/header.php"; ?>

      <?php
            $page = isset( $_GET['pagina'] ) ? $_GET['pagina'] : null;
            if ($page=='') {
               $page = "uc/home.php";
                include $page;
            } else {
            if ($page!='') {
              if (file_exists('uc/'.$page.'.php')) {
                $page = "uc/". $page . ".php";
                include $page;
              }
              else if (file_exists('uc/'.$page.'.php')) {
                $page = "uc/". $page . ".php";
                include $page;
              }


              else {
                header("Location: 404.php");
                exit;
            }}}
        ?>

    </div>

    <?php include_once "rodape/quickview.php"; ?>
    <?php include_once "rodape/overlay.php"; ?>
    <?php include_once "rodape/scripts.php"; ?>
    <script src="comuns/js/main.js"></script> 

  </body>
</html>
<?php ob_end_flush(); ?>