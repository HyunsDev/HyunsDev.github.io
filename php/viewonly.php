<?php
require('lib/print.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
    <style type="text/css">

        @font-face {

          font-family:"netmarbleB";
          src:url("netmarbleB.ttf") format("truetype");
          font-style:normal;
          font-weight:normal;

        }

        body{
            text-align: center;
            font-family: netmarbleB;
        }

        .my-box{

          border:1px solid; padding:10px 30px 10px 30px;
          display: table;
          margin-left: auto;
          margin-right: auto;
        }

        ol {
          display: table;
          margin-left: auto;
          margin-right: auto;
        }

        h1{
            color:Orange;
        }

        a{
            color:darkcyan;
        }

        h2{
            color:Peru;
        }
    </style>
  </head>
  <body>
    <h1 style="color:Orange">Hyuns Web</h1>
    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
     ?>
  </body>
</html>
