<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="date[]" value="">
      <input type="submit" name="" value="chk">
    </form>
    <?php
    $test=$_POST['date'][1];
    echo "sss <br />\n";
    echo $test;
    ?>
  </body>
</html>
