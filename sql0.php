<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>시간표 조회</title>
    <style>
      table, th, td {
        font-family: Serif;
        border: 3px solid #375984;
        border-collapse: collapse;
      }
      td {
        width: 50px;
        height: 50px;
      }
      table {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <table>
      <th colspan="6" height="35">11학년 2반 시간표</th>
      <tr>
        <td>교시</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td>
      </tr>
      <?php
      $mysqli = mysqli_connect("localhost", "root", "111111", "오송고등학교");
      $sql = "select * from a12";
      $result = mysqli_query($mysqli, $sql);
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>
          <td>{$row['교시']}</td><td>{$row['월']}</td><td>{$row['화']}</td><td>{$row['수']}</td><td>{$row['목']}</td><td>{$row['금']}</td>
        </tr>";
      }
      ?>
    </table>
  </body>
</html>
