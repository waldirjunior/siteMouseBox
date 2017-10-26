<?php require "classes/Url.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Programação - MouseBox</title>

    <?php include $_SERVER['DOCUMENT_ROOT']."/topo/metatopo.php"; ?>

    <link href="/comuns/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link href="/comuns/css/pages.css" rel="stylesheet" type="text/css" class="main-stylesheet" />
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="/comuns/css/windows.chrome.fix.css" />'
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

        <div id="principal">
            <?php
            $modulo = Url::getURL( 0 );

            if( $modulo == null )
                $modulo = "modulo1";

            if( file_exists( "modulos/" . $modulo . ".php" ) )
                require "modulos/" . $modulo . ".php";
            else
                require "modulos/404.php";
            ?>
        </div>
        <div id="navegacao">
            <p><a href="<?php echo URL::getBase(); ?>modulo1">Módulo 1</a></p>
            <p><a href="<?php echo URL::getBase(); ?>modulo2">Módulo 2</a></p>
            <p><a href="<?php echo URL::getBase(); ?>modulo3">Módulo 3</a></p>
            <p><a href="<?php echo URL::getBase(); ?>modulo4">Módulo 4</a></p>
            <p><a href="<?php echo URL::getBase(); ?>modulo5">Módulo 5</a></p>
            <p><a href="<?php echo URL::getBase(); ?>modulo6">Módulo 6</a></p>
            <p><a href="<?php echo URL::getBase(); ?>modulo7">Módulo 7</a></p>
            <p><a href="<?php echo URL::getBase(); ?>modulo8/parametro/sei-la/alguma_coisa/25/quase-nada">
                Módulo 8 com sub-módulo</a></p>
            <p><a href="<?php echo URL::getBase(); ?>qualquer">Módulo 404</a></p>
            <p><a href="<?php echo URL::getBase(); ?>teste.php">Teste.php</a></p>
        </div>

      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/quickview.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/overlay.php"); ?>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/scripts-blank.php"); ?>
  </body>
</html>