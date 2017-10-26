<?php include $_SERVER['DOCUMENT_ROOT']."/comuns/funcoes/posts.php";

  $id = isset( $_GET['id'] ) ? $_GET['id'] : null;

  $tempGames = new Games();
  $tempGames->id = $id;
  $novoid = $tempGames->retornarvalorid($id);

  //echo("<script>console.log('PHP: ".json_encode($novoid)."');</script>");

  $htmlts = html_entity_decode($novoid['post_html']);
  $csst = html_entity_decode($novoid['post_css']);
  $jstsml = html_entity_decode($novoid['post_js']);

  $csst = decodeHtmlEnt($csst);
  $jstsml = decodeHtmlEnt($jstsml);
  $htmlts = decodeHtmlEnt($htmlts);
    

  function decodeHtmlEnt($str) {
      $ret = html_entity_decode($str, ENT_COMPAT, 'UTF-8');
      $p2 = -1;
      for(;;) {
          $p = strpos($ret, '&#', $p2+1);
          if ($p === FALSE)
              break;
          $p2 = strpos($ret, ';', $p);
          if ($p2 === FALSE)
              break;
              
          if (substr($ret, $p+2, 1) == 'x')
              $char = hexdec(substr($ret, $p+3, $p2-$p-3));
          else
              $char = intval(substr($ret, $p+2, $p2-$p-2));
              
          //echo "$char\n";
          $newchar = iconv(
              'UCS-4', 'UTF-8',
              chr(($char>>24)&0xFF).chr(($char>>16)&0xFF).chr(($char>>8)&0xFF).chr($char&0xFF) 
          );
          //echo "$newchar<$p<$p2<<\n";
          $ret = substr_replace($ret, $newchar, $p, 1+$p2-$p);
          $p2 = $p + strlen($newchar);
      }
      return $ret;
  }

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Estrutura</title>

    <!-- Bootstrap Core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <style type="text/css">
      <?php echo $csst; ?>
    </style>

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body> 


    <!-- Page Content -->
    <div class="container">

        <?php echo htmlspecialchars_decode($htmlts); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  <!--  <script type="text/javascript" src="js/estrutura.js"></script>-->

  <script type="text/javascript">
      <?php echo $jstsml; ?>
  </script>



</body>

</html>
