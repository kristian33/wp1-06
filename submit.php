<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $age = filter_input (INPUT_POST, 'age');

      if ($age >= 18) {
      echo "dostaneš alkohol";
}
      elseif ($age >= 15) {
      echo "Občanku máš, ještě si ale počkej.";
}

      else {
      echo "nedostaneš alkohol";
}
    ?>
  </body>
</html>
