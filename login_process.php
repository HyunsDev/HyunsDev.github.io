<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
  $password = $_GET["password"];
  if($password == "3071"){
    header('Location: /php');
  } else {
    echo "<script>
  alert('암호가 틀렸습니다.');
  document.location.href='login.php';
</script>
";
;
  }

   ?>
</body>
</html>
