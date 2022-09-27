<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    
    <?php
    //index array
    $arr1=array("wahab","rehman","bilal","osama","hasnain","Faizan");
    $count = count($arr1);
    for($i=0;$i<$count;$i++)
    {
        echo $arr1[$i] ."<br>";
    }
    $sum = 0;
    $number = array(1,2,3,4,5,6,7,8,9,10);
    $countnum = count($number);
    for($x=0;$x<$countnum;$x++)
    {
        echo $number[$x] ."<br>";
        $sum = $sum + $number[$x];
    }

    echo $sum;

    ?>


    </center>
</body>
</html>