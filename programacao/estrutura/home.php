<?php

  $novoid[] = array();
  $tempPosts = new Postagem();
  $novoid = $tempPosts->mostrarpostsprogramacao();

  //echo("<script>console.log('PHP: ".json_encode($novoid)."');</script>");


?>

      <div class="page-content-wrapper ">

        <div class="content ">

          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner">
                <ul class="breadcrumb">
                  <li>
                    <p>MouseBox</p>
                  </li>
                  <li><a href="#" class="active">PROGRAMAÇÃO</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="container-fluid container-fixed-lg">

           <div class="panel panel-transparent">

            <div class="panel-heading">
              <div class="panel-title">Lista de Códigos</div>
            </div>

            <div class="panel-body">
              <div class="row">

              <?php for($i=0;$i<count($novoid);$i++) { ?>
              <div class="col-md-4">
                  <div id="portlet-linear-color" class="panel panel-default">
                    <div class="panel-heading ">
                        <div class="panel-title"><?php echo $novoid[$i]['post_date']; ?></div>
                        <div class="panel-controls">
                        <ul>
                          <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                          </li>

                          <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                          </li>

                          <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                          </li>

                          </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                    <?php $tituloalt = $tempPosts->sluggify($novoid[$i]['post_title']);  ?>
                    <a href="/programacao/codigos/tag/<?php echo $novoid[$i]['ID']."/".$tituloalt; ?>" target="_blank" ><h3><?php echo $novoid[$i]['post_title']; ?></h3></a>
                    <iframe id="iframe_embed_13698688" src="/programacao/codigos/base/comuns/estrutura/estrutura.php?id=<?php echo $novoid[$i]['ID']; ?>"  allowtransparency="true" frameborder="0" scrolling="no" sandbox="allow-scripts allow-pointer-lock allow-same-origin"></iframe>
                    <p><?php echo $novoid[$i]['post_content']; ?>
                    </p>
                    </div>
                  </div>
              </div>
              <?php }?>

              </div>
            </div>
        </div>
          

          </div>

        </div>
        <?php  include_once  $_SERVER['DOCUMENT_ROOT']."/rodape/copyright.php";   ?>
      </div>

