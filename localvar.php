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
        function abc() //deafult
        {
            $num = 45;
            echo "This is local variable" . $num;
        }

        function cal($x,$y) //paramterzied
        {
            $n1 = $x;
            $n2 = $y;
            $sum = $n1 + $n2;
            echo "Addition is ". $sum; 
            
        }
        abc();
        cal(10,10);
        
    
    ?>
</body>
</html>