  <div class="content full-height" style="padding-top: 21px;">
          <!-- END SECONDARY SIDEBAR MENU -->
          <div class="inner-content full-height">

            <?php

              $curl = curl_init();

              curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.themoviedb.org/3/authentication/token/new?api_key=0f622d177c9e3c70f3676e062e9d34b3",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_POSTFIELDS => "{}",
              ));

              $response = curl_exec($curl);
              $err = curl_error($curl);

              curl_close($curl);

              if ($err) {
                echo "cURL Error #:" . $err;
              } else {
                echo $response;
              }

            ?>
          </div>
          <!-- END APP -->
        </div>