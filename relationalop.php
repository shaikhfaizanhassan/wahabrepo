<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
      $num1 = 20;
      $num2 = 40;
      $plus = "+";
      $min = "-";
      $mul = "*";
      $div = "/";
      
      if($plus=="d")
      {
        $sum = $num1 + $num2;
        echo "Addition " .  $sum;
      }
      else if($min=="f")
      {
        $sum = $num1 - $num2;
        echo "Subs " .  $sum;
      }
      
      else if($div=="sd")
      {
        $sum = $num1 / $num2;
        echo "div " .  $sum;
      }
      else
      {
        echo "Invalid Op";
      }

      
    
    ?>
</body>
</html>