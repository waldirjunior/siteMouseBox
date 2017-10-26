
<?php include $_SERVER['DOCUMENT_ROOT']."/comuns/funcoes/games.php";

  $id = isset( $_GET['id'] ) ? $_GET['id'] : null;

?>

<?php
  $tempGames = new Games();
  $tempGames->id = $id;
  $novoid = $tempGames->retornarvalorid($id);

?>


  <div class="page-content-wrapper full-height">
        <!-- START PAGE CONTENT -->
        <div class="content full-height">
          <!-- START APP -->
          <!-- START SECONDARY SIDEBAR MENU-->
          <nav class="secondary-sidebar padding-30">
            <a href="https://archive.org/details/msdos_Disneys_Aladdin_1994" target="_blank" class="btn btn-complete btn-block btn-compose m-b-30"><?php echo $novoid['n_titulo']; ?></a>
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

          <div class="split-view" style="overflow: hidden; background-color: black;">
            <br />
            <div align="center">
              <h2 class="text-white"><?php echo $novoid['n_titulo']; ?></h2>
            </div>
            <br />
            <div align="center">
                <?php echo $novoid['n_frame']; ?>
                <!--<iframe src="#" width="760" height="484" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe>-->
             </div>




          </div>
          </div>
          <!-- END APP -->
        </div>
        <!-- END PAGE CONTENT -->
      </div>


