<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>시간표 조회</title>
  </head>
  <body>
    <ol>
      <?php
      $mysqli = mysqli_connect("localhost", "root", "111111", "오송고등학교");
      $sql = "select * from a12";
      $result = mysqli_query($mysqli, $sql);
      $row = mysqli_fetch_array($result);
      ?>
    </ol>
    <table border="2">
      <th colspan="6">1학년 12반 시간표</th>
      <tr>
        <td>교시</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td>
      </tr>
      <tr>
        <td>1</td><td><?=$row['월']?></td><td><?=$row['화']?></td><td><?=$row['수']?></td><td><?=$row['목']?></td><td><?=$row['금']?></td>
      </tr>
      <?=$row = mysqli_fetch_array($result);?>
      <tr>
        <td>2</td><td><?=$row['월']?></td><td><?=$row['화']?></td><td><?=$row['수']?></td><td><?=$row['목']?></td><td><?=$row['금']?></td>
      </tr>
      <?=$row = mysqli_fetch_array($result);?>
      <tr>
        <td>3</td><td><?=$row['월']?></td><td><?=$row['화']?></td><td><?=$row['수']?></td><td><?=$row['목']?></td><td><?=$row['금']?></td>
      </tr>
      <?=$row = mysqli_fetch_array($result);?>
      <tr>
        <td>4</td><td><?=$row['월']?></td><td><?=$row['화']?></td><td><?=$row['수']?></td><td><?=$row['목']?></td><td><?=$row['금']?></td>
      </tr>
      <?=$row = mysqli_fetch_array($result);?>
      <tr>
        <td>5</td><td><?=$row['월']?></td><td><?=$row['화']?></td><td><?=$row['수']?></td><td><?=$row['목']?></td><td><?=$row['금']?></td>
      </tr>
      <?=$row = mysqli_fetch_array($result);?>
      <tr>
        <td>6</td><td><?=$row['월']?></td><td><?=$row['화']?></td><td><?=$row['수']?></td><td><?=$row['목']?></td><td><?=$row['금']?></td>
      </tr>
      <?=$row = mysqli_fetch_array($result);?>
      <tr>
        <td>7</td><td><?=$row['월']?></td><td><?=$row['화']?></td><td><?=$row['수']?></td><td><?=$row['목']?></td><td><?=$row['금']?></td>
      </tr>
      <?=$row = mysqli_fetch_array($result);?>
      <tr>
        <td>8</td><td><?=$row['월']?></td><td><?=$row['화']?></td><td><?=$row['수']?></td><td><?=$row['목']?></td><td><?=$row['금']?></td>
      </tr>
    </table>
  </body>
</html>
