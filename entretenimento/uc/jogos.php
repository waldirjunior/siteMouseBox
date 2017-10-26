<?php

$nomejogo = $_GET['jogo'];
$nomejogo = str_replace(str_split('-'), ' ', $nomejogo);
$link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

?>

<div class="page-content-wrapper full-height">
        <!-- START PAGE CONTENT -->
        <div class="content full-height">
          <!-- START APP -->
          <!-- START SECONDARY SIDEBAR MENU-->
          <nav class="secondary-sidebar padding-30">
            <a href="<?php $link ?>" target="_blank" class="btn btn-complete btn-block btn-compose m-b-30"><?php echo $nomejogo ?></a>
            <p class="menu-title">INFOMAÇÕES</p>

            <ul class="main-menu">
              <li class="active">
                <a href="#">
                  <span class="title"><i class="pg-inbox"></i> Descrição</span>
                </a>
              </li>
              <li class="active">
                <a href="#">
                  <span class="title"><i class="pg-sent"></i> Gênero</span>
                </a>
              </li>
              <li class="active">
                <a href="#">
                  <span class="title"><i class="pg-sent"></i> Emulador</span>
                </a>
              </li>
              <li class="active">
                <a href="#">
                  <span class="title"><i class="pg-sent"></i> Download</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="title"><i class="pg-spam"></i> Compartilhar</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- END SECONDARY SIDEBAR MENU -->
          <div class="inner-content full-height">

          <div class="split-view">

          <?php
            $categoria = $_GET['categoria'];
            $jogo = $_GET['jogo'];

            /*if($jogo == "zombie-mayhem"){
              if ($categoria == "acao") {

                    echo  "<iframe src='/entretenimento/jogos/$categoria/$jogo/index.php' width='100%' height='100%' frameborder='0' scrolling='none'></iframe>";


              }
            }*/


           
            if ($page=='') {
              header("Location: /404.php");
                exit;
            } else {
            if ($page!='') {
              if (file_exists('jogos/'.$categoria.'/'.$jogo.'/index.php')) {

                echo  "<iframe src='/entretenimento/jogos/$categoria/$jogo/index.php' width='100%' height='100%' frameborder='0' scrolling='none'></iframe>";

              }else {
                header("Location: /404.php");
                exit;
            }}}
        ?>



          </div>
          </div>
          <!-- END APP -->
        </div>
        <!-- END PAGE CONTENT -->
      </div>


