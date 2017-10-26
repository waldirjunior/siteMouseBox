<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Social MouseBox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="comuns/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="comuns/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="comuns/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="comuns/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Tecnologia" name="description" />
    <meta content="Waldir Mauricio" name="author" />
    <link href="/comuns/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/codrops-stepsform/css/component.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/comuns/css/themes/simple.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
	<link href="comuns/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header no-header">
    <!-- BEGIN SIDEBPANEL-->
     <?php 
      include_once  $_SERVER['DOCUMENT_ROOT']."/topo/menu.php";

     ?>

    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
     <?php 
      include_once  $_SERVER['DOCUMENT_ROOT']."/topo/header.php";
     ?>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <?php 

          // Define uma lista com os arquivos que poderão ser chamados na URL
          $permitidos = array('blank', 'waldir.m.jr');
          $arquivo = '/uc/blank.php';
          // Verifica se a variável $_GET['pagina'] existe E se ela faz parte da lista de arquivos permitidos
          if (isset($_GET['pagina']) AND (array_search($_GET['pagina'], $permitidos) !== false)) {
            // Pega o valor da variável $_GET['pagina']
            $arquivo = $_GET['pagina'];
            $arquivo = "/uc/". $arquivo . ".php";
          } else {
            // Se não existir variável $_GET ou ela não estiver na lista de permissões, define um valor padrão
            header("Location: /index.php");
          }
          include($_SERVER['DOCUMENT_ROOT'].$arquivo);



      ?>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!--START QUICKVIEW -->
    <?php 

      include_once  $_SERVER['DOCUMENT_ROOT']."/rodape/quickview.php";
    ?>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    <?php 

        include_once  $_SERVER['DOCUMENT_ROOT']."/rodape/overlay.php";

    ?>
    <!-- END OVERLAY -->

    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="/comuns/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="/comuns/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="/comuns/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="/comuns/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="/comuns/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="/comuns/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="/comuns/plugins/classie/classie.js"></script>
    <script src="/comuns/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/comuns/plugins/jquery-isotope/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/classie/classie.js" type="text/javascript"></script>
    <script src="/comuns/plugins/codrops-stepsform/js/stepsForm.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/comuns/js/pages.min.js"></script>
    <script src="/comuns/js/pages.social.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="/comuns/js/scripts.js" type="text/javascript"></script>
    <script src="/comuns/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>