<!DOCTYPE html>
<html lang="en">
  <head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <link rel="manifest" href="manifest.json" />
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-38780407-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-38780407-2');
  </script>
  
  <!-- ios support -->
  <link rel="apple-touch-icon" href="images/icons/icon-72x72.png" />
  <link rel="apple-touch-icon" href="images/icons/icon-96x96.png" />
  <link rel="apple-touch-icon" href="images/icons/icon-128x128.png" />
  <link rel="apple-touch-icon" href="images/icons/icon-144x144.png" />
  <link rel="apple-touch-icon" href="images/icons/icon-152x152.png" />
  <link rel="apple-touch-icon" href="images/icons/icon-192x192.png" />
  <link rel="apple-touch-icon" href="images/icons/icon-384x384.png" />
  <link rel="apple-touch-icon" href="images/icons/icon-512x512.png" />
  <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
  <meta name="theme-color" content="#db4938" />

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/style.css" />
  <title>TEST PERURI ID</title>
  </head>

  <body>
    <h2>monitoring/monitoring</h2>
      <?php 
      $url = 'https://rtm.peruri.co.id/trusted/';
      $view = "CustomerReportNew/CustpmerReportNEW";
      $username = "bayu";
      $password = "ijnijn1q2w3e";

      $params = array(
          "username" => $username,
          "password" => $password,
      );
      $options = array(
          CURLOPT_URL             => $url,
          CURLOPT_RETURNTRANSFER  => true,    // return web page as var
          CURLOPT_CONNECTTIMEOUT  => 10,      // timeout on connect
          CURLOPT_TIMEOUT         => 10,      // timeout on response
          CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
          CURLOPT_POSTFIELDS      => $params
      );
      $curl_connection = curl_init();
      curl_setopt_array( $curl_connection, $options );
      $ticket = curl_exec($curl_connection);
      curl_close($curl_connection);
      ?>

      <script src="https://rtm.peruri.co.id/javascripts/api/tableau-2.min.js"></script>
      <div id="vizContainer"></div>
      <script type="text/javascript">
          function initViz() {
              var containerDiv = document.getElementById("vizContainer"),
              url = "<?php echo $url , $ticket, '/views/', $view;?>";
              options = {
                  hideTabs: true,
                  hideToolbar: true,
                  width: "100%",
                  height: "1024px"
              };
              var viz = new tableau.Viz(containerDiv, url, options); 
          }
          initViz();
      </script> 

  </body>
</html>