<?php
require('lib/print.php');
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php
      print_title();
      ?>
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
            font-size: 200%
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
    <div class="container">
      <div class="header">
        <h1 class="text-muted"><a href="index.php" style="color:#4D4580">Hyuns Memo Site</a></h3>
      </div>
      <div class="col-xs-12 col-md-6">
        <h2>글 목록</h2>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <p style="color:Orange">글 작성하기</p>
  </div>
    <div class="col-xs-12 col-md-6" style="text-align: center; margin-left: auto; margin-right: auto;">
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="제목을 입력하세요!">
      </p>
      <p>
        <textarea name="description" placeholder="내용을 입력하세요!"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </div>
<?php
require('view/bottom.php');
?>
