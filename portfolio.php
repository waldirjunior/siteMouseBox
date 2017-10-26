<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Portfólio - MouseBox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="/comuns/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/comuns/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/comuns/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/comuns/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="/comuns/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/comuns/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
	<link href="comuns/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header ">
    <!-- BEGIN SIDEBPANEL-->
    <?php include_once "topo/menu.php"; ?>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
       <?php include_once "topo/header.php"; ?>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">

      <?php 

          // Define uma lista com os arquivos que poderão ser chamados na URL
          $permitidos = array('blank', 'ptluisfelipe');
          // Verifica se a variável $_GET['pagina'] existe E se ela faz parte da lista de arquivos permitidos
          if (isset($_GET['pagina']) AND (array_search($_GET['pagina'], $permitidos) !== false)) {
            // Pega o valor da variável $_GET['pagina']
            $arquivo = $_GET['pagina'];
            $arquivo = "/uc/". $arquivo . ".php";
          } else {
            // Se não existir variável $_GET ou ela não estiver na lista de permissões, define um valor padrão
            $arquivo = '/uc/blank.php';
          }
          include($_SERVER['DOCUMENT_ROOT'].$arquivo);

      ?>


      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->


    <?php include_once "rodape/quickview.php"; ?>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    <?php include_once "rodape/overlay.php"; ?>
    <!-- END OVERLAY -->

    <!-- BEGIN VENDOR JS -->
    <?php include_once "rodape/scripts-blank.php"; ?>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>