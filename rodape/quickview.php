    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="active">
          <a href="#quickview-alerts" data-toggle="tab">Atualização</a>
        </li>
        <li>
          <a href="#quickview-chat" data-toggle="tab">Equipe</a>
        </li>
      </ul>
      <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- END Notes !-->
        <!-- BEGIN Atualização !-->
        <div class="tab-pane fade in active no-padding" id="quickview-alerts">
          <div class="view-port clearfix" id="alerts">
            <!-- BEGIN Alerts View !-->
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default navbar-sm">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <!--<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-more"></i>-->
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Notificações
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <!--<a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-search"></i>
                  </a>-->
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <!-- BEGIN Alert List !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <!-- BEGIN List Group !-->

                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Status Server
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                   <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12 fs-12" >
                          <span class="text-master link">16/02/2017<br></span>
                          <span class="text-master">Concluído a etapa de programação da página Entretenimento</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12">
                          <span class="text-master link">13/01/2017, 12:39, CPS-BR<br></span>
                          <span class="text-master">Atualização do HTML, CSS e JS</span>
                        </p>
                      </a>


                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
              </div>
              <!-- END Alert List !-->
            </div>
            <!-- EEND Alerts View !-->
          </div>
        </div>
        <!-- END Equipe !-->
        <div class="tab-pane fade no-padding" id="quickview-chat">
          <div class="view-port clearfix" id="chat">
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <!--<a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-plus"></i>
                  </a>-->
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Nossa Equipe

                  </div>
                  <!-- BEGIN Header Controler !-->
                  <!--<a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-more"></i>
                  </a>-->
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">

                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">Lista</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/comuns/img/profiles/4x.jpg" data-src="/comuns/img/profiles/4.jpg" src="/comuns/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">Waldir Mauricio Junior</span>
                          <span class="block text-master hint-text fs-12">Desenvolvedor Web</span>
                        </p>
                      </a>
                    </li>

                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="/comuns/img/profiles/4x.jpg" data-src="/comuns/img/profiles/4.jpg" src="/comuns/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">Luis Felipe Fregolon</span>
                          <span class="block text-master hint-text fs-12">Produção Audiovisual</span>

                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
              </div>
            </div>
            <!-- BEGIN Conversation View  !-->
            <!-- END Conversation View  !-->
          </div>
        </div>
      </div>
    </div>