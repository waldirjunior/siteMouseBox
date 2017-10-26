<?php

      //find out which feed was selected

      $xml=("http://feeds.feedburner.com/ProjetosTerrivelbox?format=xml");


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

<?php

$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=3; $i++) {

  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;

?>

      <div class="col-lg-3 col-md-6">
          <div class="portlet light">
              <div class="photo">
                  <img src="/comuns/img/web_training.png" alt="" class="img-responsive" /> </div>
              <div class="title">
                  <span> <?php  echo ("<a href='" . $item_link  . "'>" . $item_title . "</a>"); ?> </span>
              </div>
              <div class="desc">

              </div>
          </div>
      </div>

   <?php
}
?>
