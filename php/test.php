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
        <h1 class="text-muted"><a href="index.php" style="color:Orange">Hyuns Memo Site</a></h3>
      </div>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <a href="create.php">[새로운 글 작성하기]</a>
    <br>
    <?php if(isset($_GET['id'])) { ?>
      <a href="update.php?id=<?=$_GET['id']?>">[글 업데이트]</a>
      <br>

      <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="글 삭제하기">
      </form>

    <?php } ?>

    <p>= View =</p>
    <div class="col-md-3" style="text-align: center; margin-left: auto; margin-right: auto;">
      <h2>
        <?php
        print_title();
        ?>
      </h2>
      <?php
      print_description();
       ?>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </div>
  </body>
</html>
