<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
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
    <h1><a href="index.php" style="color:Orange">Hyuns Space_PHP</a></h1><br>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <a href="create.php">[새로운 글 작성하기]</a><br>
    <?php if(isset($_GET['id'])) {?>
    <a href="update.php?id=<?$_GET['id']?>">[글 업데이트]</a>
  <?php } ?>
    <p>View</p>
    <div class="my-box">
    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
     ?>
  </body>
</div>
</html>
