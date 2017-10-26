<div class="page-content-wrapper ">
        <div class="content ">
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner" style="transform: translateY(0px); opacity: 1;">
                <ul class="breadcrumb">
                  <li>
                    <p>PROGRAMAÇÃO</p>
                  </li>
                  <li><a href="#" class="active"><?php echo $novoid['post_title']; ?></a>
                  </li>
                </ul>
                <div class="row">
                  <div class="col-lg-7 col-md-6 ">
                    <!-- COMEÇO CODIGO FORA -->
                      <!-- START PANEL -->
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <div class="panel-title">Códigos
                          </div>
                          <div class="tools">
                            <a class="collapse" href="javascript:;"></a>
                            <a class="config" data-toggle="modal" href="#grid-config"></a>
                            <a class="reload" href="javascript:;"></a>
                            <a class="remove" href="javascript:;"></a>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12">


                            <div class="panel panel-transparent ">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-fillup hidden-sm hidden-xs" data-init-reponsive-tabs="dropdownfx">
                                  <li class="active">
                                    <a data-toggle="tab" href="#slide1" aria-expanded="false"><span>HTML</span></a>
                                  </li>
                                  <li class="">
                                    <a data-toggle="tab" href="#slide2" aria-expanded="false"><span>CSS</span></a>
                                  </li>
                                  <li class="">
                                    <a data-toggle="tab" href="#slide3" aria-expanded="true"><span>JAVASCRIPT</span></a>
                                  </li>
                                </ul>
                                <!-- Tab panes -->

                                <div class="tab-content">
                                  <div class="tab-pane slide-left active" id="slide1">
                                    <div class="row ">
                                      <div class="col-md-12">
                                       <div id="html_editor">
                                           <?php echo $htmlts; ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane slide-left" id="slide2">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div id="css_editor">
                                          <?php echo $csst; ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane slide-left" id="slide3">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div id="javascript_editor">
                                           <?php echo $jstsml; ?>
                                        </div>
                                       <br />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- FIM DO CODIGOS FORA -->
                  </div>
                  <div class="col-lg-5 col-md-6 ">
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">
                      <div class="panel-heading">
                        <div class="panel-title"><h2><?php echo $novoid['post_title']; ?></h2>
                        </div>
                      </div>
                      <div class="panel-body">
                        <h4><?php echo $novoid['post_content']; ?></h4>
                        <br>
                        <div>
                          <div class="profile-img-wrapper m-t-5 inline">
                            <img width="35" height="35" src="/comuns/img/profiles/avatar_small.jpg" alt="" data-src="/comuns/img/profiles/avatar_small.jpg" data-src-retina="/comuns/img/profiles/avatar_small2x.jpg">
                            <div class="chat-status available">
                            </div>
                          </div>
                          <div class="inline m-l-10">
                            <p class="small hint-text m-t-5">http://codepen.io/matt-west/pen/KjEHg</p>
                            <p class="small hint-text m-t-5">A PEN BY Matt West</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END PANEL -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid container-fixed-lg">

              <iframe src="/programacao/codigos/base/comuns/estrutura/estrutura.php?id=<?php echo $id; ?>" width="100%" height="500px" frameborder="none"></iframe>

               <?php /* include $_SERVER['DOCUMENT_ROOT']."/programacao/base/comuns/". $id . ".php"; */?>
          </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/copyright.php"); ?>
      </div>















