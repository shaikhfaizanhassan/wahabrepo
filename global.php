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
    $name = "Abdul Wahab"; 
       function abc()
       {
            global $name;
            echo "My name is " . $name;
       }
       function abc1()
       {
        global $name;
        echo $name;
       }
       abc();
       abc1(); 
    
    ?>
</body>
</html>