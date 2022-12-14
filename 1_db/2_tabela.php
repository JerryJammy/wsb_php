<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./styles/style.css">
  </head>
  <body>
    <h3>Użytkownicy z tabeli</h3>
    <table>
      <tr>
        <th>Imię i nazwisko</th>
        <th>Miasto</th>
        <th>Data utworzenia konta</th>
      </tr>

      <?php
        //tabela
        require_once("./scripts/1_connect.php");
        $sql = "SELECT * FROM `users` INNER JOIN `cities` ON `users`.`city_id`=`cities`.`id`;";
        $result = $conn->query($sql);
        while ($user = $result->fetch_assoc()) {
          // echo $user['name'];
          echo <<< E
          <tr>
            <td>$user[name] $user[surname]</td>
            <td>$user[city]</td>
            <td>$user[created_at]</td>
          </tr>

          E;
        }
      ?>
    </table>

  </body>
</html>
