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

        .my-box{
          border:1px solid; padding:20px 30px 20px 30px;
          display: table;
          margin-left: auto;
          margin-right: auto;
        }

        body{
            text-align: center;
            font-family: netmarbleB;
        }

        h1{
            color:Orange;
        }

        ol {
          display: table;
          margin-left: auto;
          margin-right: auto;
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
    <h1><a href="index.php">Hyuns Space</a></h1>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <div class="my-box">
      <p style="color: Orange">글 수정하기!</p>

    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="제목을 입력하세요!" value="<?php print_title(); ?>">
      </p>
      <p>
        <textarea name="description" placeholder="본문을 입력하세요!"><?php print_description(); ?></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
    </div>
  </body>
</html>
