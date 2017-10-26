<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Designer - MouseBox</title>
    <?php include $_SERVER['DOCUMENT_ROOT']."/topo/metatopo.php"; ?>
    <link href="/comuns/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/comuns/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/codrops-dialogFx/dialog.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/codrops-dialogFx/dialog-sandra.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/plugins/jquery-nouislider/jquery.nouislider.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/comuns/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/comuns/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
	<link href="/comuns/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header ">
    <!-- BEGIN SIDEBPANEL-->
    <?php include($_SERVER['DOCUMENT_ROOT']."/topo/menu.php"); ?>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <?php include($_SERVER['DOCUMENT_ROOT']."/topo/header.php"); ?>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
            <!-- START CATEGORY -->
            <div class="gallery">
              <div class="gallery-filters p-t-20 p-b-10">
                <ul class="list-inline text-right">
                  <li class="hint-text">Filtrar: </li>
                  <li><a href="#" class="active text-master p-r-5 p-l-5">Nome</a></li>
                  <li><a href="#" class="text-master hint-text p-r-5 p-l-5">Views</a></li>
                  <li>
                    <button class="btn btn-primary m-l-10" data-toggle="filters">Mais Filtros</button>
                  </li>
                </ul>
              </div>
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item first" data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/1.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="2" data-height="2">
                <!-- START PREVIEW -->
                <div class="live-tile slide" data-speed="750" data-delay="4000" data-mode="carousel">
                  <div class="slide-front">
                    <img src="/comuns/img/gallery/2_1.jpg" alt="" class="image-responsive-height">
                  </div>
                  <div class="slide-back">
                    <img src="/comuns/img/gallery/2_2.jpg" alt="" class="image-responsive-height">
                    <img src="/comuns/img/gallery/2_2.jpg" alt="" class="image-responsive-height">
                  </div>
                </div>
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info more-content">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <h3 class="pull-left bold text-white no-margin">Nome da Arte</h3>
                        <div class="clearfix"></div>
                        <span class="hint-text pull-left text-white">Hand and mind crafted</span>
                        <div class="clearfix"></div>
                      </div>
                      <div class="">
                        <h5 class="text-white light">Most Sold Item in the marketplace</h5>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/3.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/4.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/5.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/6.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/7.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/8.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/9.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/10.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/11.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/12.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/13.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
              <!-- START GALLERY ITEM -->
              <!-- 
                    FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN 
                    FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT 
                -->
              <div class="gallery-item " data-width="1" data-height="1">
                <!-- START PREVIEW -->
                <img src="/comuns/img/gallery/14.jpg" alt="" class="image-responsive-height">
                <!-- END PREVIEW -->
                <!-- START ITEM OVERLAY DESCRIPTION -->
                <div class="overlayer bottom-left full-width">
                  <div class="overlayer-wrapper item-info ">
                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                      <div class="">
                        <p class="pull-left bold text-white fs-14 p-t-10">Nome da Arte</p>
                        <div class="clearfix"></div>
                      </div>
                      <div class="m-t-10">
                        <div class="thumbnail-wrapper d32 circular m-t-5">
                          <img width="40" height="40" src="/comuns/img/profiles/avatar.jpg" data-src="/comuns/img/profiles/avatar.jpg" data-src-retina="/comuns/img/profiles/avatar2x.jpg" alt="">
                        </div>
                        <div class="inline m-l-10">
                          <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                          <p class="rating">
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star rated"></i>
                            <i class="fa fa-star"></i>
                          </p>
                        </div>
                        <div class="pull-right m-t-10">
                          <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END PRODUCT OVERLAY DESCRIPTION -->
              </div>
              <!-- END GALLERY ITEM -->
            </div>
            <!-- END CATEGORY -->
          </div>
          <!-- START DIALOG -->
          <div id="itemDetails" class="dialog item-details">
            <div class="dialog__overlay"></div>
            <div class="dialog__content">
              <div class="container-fluid">
                <div class="row dialog__overview">
                  <div class="col-sm-7 no-padding item-slideshow-wrapper full-height">
                    <div class="item-slideshow full-height">
                      <div class="slide" data-image="/comuns/img/gallery/item-square.jpg">
                      </div>
                      <div class="slide" data-image="/comuns/img/gallery/item-square.jpg">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 visible-xs bg-info-dark">
                    <div class="container-xs-height">
                      <div class="row row-xs-height">
                        <div class="col-xs-8 col-xs-height col-middle no-padding">
                          <div class="thumbnail-wrapper d32 circular inline">
                            <img width="32" height="32" src="/comuns/img/profiles/2.jpg" data-src="/comuns/img/profiles/2.jpg" data-src-retina="/comuns/img/profiles/2x.jpg" alt="">
                          </div>
                          <div class="inline m-l-15">
                            <p class="text-white no-margin">Alex Nester</p>
                            <p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
                          </div>
                        </div>
                        <div class="col-xs-4 col-xs-height col-middle text-right  no-padding">
                          <h2 class="bold text-white price font-montserrat">$20.00</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5 p-r-35 p-t-35 p-l-35 full-height item-description">
                    <h2 class="semi-bold no-margin font-montserrat">Nome da Arte</h2>
                    <p class="rating fs-12 m-t-5">
                      <i class="fa fa-star "></i>
                      <i class="fa fa-star "></i>
                      <i class="fa fa-star "></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </p>
                    <p class="fs-13">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful.
                    </p>
                  </div>
                </div>
                <div class="row dialog__footer bg-info-dark hidden-xs">
                  <div class="col-sm-7 full-height separator">
                    <div class="container-xs-height">
                      <div class="row row-xs-height">
                        <div class="col-xs-7 col-xs-height col-middle no-padding">
                          <div class="thumbnail-wrapper d48 circular inline">
                            <img width="48" height="48" src="/comuns/img/profiles/2.jpg" data-src="/comuns/img/profiles/2.jpg" data-src-retina="/comuns/img/profiles/2x.jpg" alt="">
                          </div>
                          <div class="inline m-l-15">
                            <p class="text-white no-margin">Alex Nester</p>
                            <p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
                          </div>
                        </div>
                        <div class="col-xs-5 col-xs-height col-middle text-right  no-padding">
                          <h2 class="bold text-white price font-montserrat">Licença</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5 full-height">
                    <ul class="recommended list-inline pull-right m-t-10 m-b-0">
                      <li>
                        <a href="#"><img src="/comuns/img/gallery/thumb-1.jpg"></a>
                      </li>
                      <li>
                        <a href="#"><img src="/comuns/img/gallery/thumb-2.jpg"></a>
                      </li>
                      <li>
                        <a href="#"><img src="/comuns/img/gallery/thumb-3.jpg"></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <button class="close action top-right" data-dialog-close><i class="pg-close fs-14"></i>
              </button>
            </div>
          </div>
          <!-- END DIALOG -->
          <div class="quickview-wrapper" id="filters">
            <div class="padding-40 ">
              <a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#filters" href="#"></a>
              <form class="" role="form">
                <h5 class="all-caps font-montserrat fs-12 m-b-20">Advance filters</h5>
                <div class="form-group form-group-default ">
                  <label>Project</label>
                  <input type="email" class="form-control" placeholder="Type of select a label">
                </div>
                <h5 class="all-caps font-montserrat fs-12 m-b-20 m-t-25">Advance filters</h5>
                <div class="radio radio-danger">
                  <input type="radio" checked="checked" value="1" name="filter" id="asc">
                  <label for="asc">Ascending order</label>
                  <br>
                  <input type="radio" value="2" name="filter" id="views">
                  <label for="views">Most viewed</label>
                  <br>
                  <input type="radio" value="3" name="filter" id="cost">
                  <label for="cost">Cost</label>
                  <br>
                  <input type="radio" value="4" name="filter" id="latest">
                  <label for="latest">Latest</label>
                </div>
                <h5 class="all-caps font-montserrat fs-12 m-b-20 m-t-25">Price range</h5>
                <div class="bg-danger m-b-10" id="slider-margin">
                </div>
                <button class="pull-right btn btn-danger btn-cons m-t-40">Apply</button>
              </form>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/copyright.php"); ?>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/quickview.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT']."/rodape/overlay.php"); ?>
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
    <script src="/comuns/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/comuns/plugins/jquery-isotope/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/codrops-dialogFx/dialogFx.js" type="text/javascript"></script>
    <script src="/comuns/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/jquery-nouislider/jquery.nouislider.min.js" type="text/javascript"></script>
    <script src="/comuns/plugins/jquery-nouislider/jquery.liblink.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/comuns/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="/comuns/js/gallery.js" type="text/javascript"></script>
    <script src="/comuns/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>