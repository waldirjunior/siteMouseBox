<?php

      //find out which feed was selected

      $xml=("http://feeds.feedburner.com/Terrivelbox?format=xml");


      $xmlDoc = new DOMDocument();
      $xmlDoc->load($xml);

      //get elements from "<channel>"
      $channel=$xmlDoc->getElementsByTagName('channel')->item(0);
      $channel_title = $channel->getElementsByTagName('title')
      ->item(0)->childNodes->item(0)->nodeValue;
      $channel_link = $channel->getElementsByTagName('link')
      ->item(0)->childNodes->item(0)->nodeValue;
      $channel_desc = $channel->getElementsByTagName('description')
      ->item(0)->childNodes->item(0)->nodeValue;

 
?>

      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <p>MouseBox</p>
                  </li>
                  <li>
                  <?php echo("<a href='" . $channel_link . "' class='active'>" . $channel_title . " - " . $channel_desc. "</a>"); ?>



                  </li>
                </ul>
                <!-- END BREADCRUMB -->
              </div>
            </div>  
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->

<?php

$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=7; $i++) {

  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;



?>

      <div class="panel panel-transparent">
            
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <div id="portlet-linear" class="panel panel-default">
                      <div class="panel-heading ">
                        <div class="panel-title">Notícias - <?php echo($channel_title); ?>
                        </div>
                        <div class="panel-controls">
                          <ul>

                            <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i
                        class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>

                          </ul>
                        </div>
                      </div>
                      <div class="panel-body">
                        <h3>

                        <?php  echo ("<a href='" . $item_link  . "'>" . $item_title . "</a>"); ?></h3>
                        <p><?php  echo ($item_desc); ?>
                        </p>
                      </div>
                    </div>
                  </div>

<?php


$i++;

  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;


?>



                  <div class="col-md-6">
                    <div id="portlet-circular" class="panel panel-default">
                      <div class="panel-heading ">
                        <div class="panel-title">Notícas <?php echo($channel_title); ?>
                        </div>
                        <div class="panel-controls">
                          <ul>

                            <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i
                        class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>

                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="panel-body">
                        <h3>
                        <?php  echo ("<a href='" . $item_link  . "'>" . $item_title . "</a>"); ?></h3>
                        <p><?php  echo ($item_desc); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>






               <?php
            }
            ?>

          </div>

        </div>

        <?php include_once  $_SERVER['DOCUMENT_ROOT']."/rodape/copyright.php"; ?>
      </div>


