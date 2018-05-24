<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $salary = 90000;
    $car = 500000;
    $vila = True;

  if (($salary>=90000) && ($car>=500000) || ($vila)) {
    echo "Pražská štětka chce chlápka.";
  }
  elseif ($salary<90000) {
    echo "Je to pražanda.";
  }
  elseif ($car<500000) {
    "Nechce ho ikdyž je bohatý";
  }
  else {
    echo "Vůbec ho nechce je bez peněz";
  }
      ?>

  </body>
</html>
