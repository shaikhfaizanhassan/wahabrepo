<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Student Marksheet</h1>
    
    <?php 
        //student Detail
        $studentID = 1024;
        $studentName = "Ali Khan";
        $gender = "Male";

        //subject detail 
        $eng    = 5;
        $urd    = 5;
        $math   = 5;
        $phy    = 5;
        $chem   = 5;

        //Calcuation marks
        $total_marks = 500;
        $obatined = $eng + $urd + $math + $phy + $chem;
        $percenatge = $obatined / $total_marks *100;

        //Print Student Detail
        echo "Student ID" . $studentID . "<br>";
        echo "Student Name" . $studentName . "<br>";
        echo "Student Gender" . $gender . "<br>";
        echo "==============================================<br>";

        //print subject marks
        echo "English Marks " . $eng . "<br>";
        echo "URdu Marks " . $urd . "<br>";
        echo "Math Marks " . $math . "<br>";
        echo "phy Marks " . $phy . "<br>";
        echo "Chemistry Marks " . $chem . "<br>";
        echo "==============================================<br>";
        
        //print calculation
        echo "Total Marks " . $total_marks . "<br>";
        echo "Obtained Marks " . $obatined . "<br>";
        echo "Overall Percentage " . $percenatge . "%" . "<br>";
        echo "==============================================<br>";
        
        //condition to check grade
        if($percenatge >=50 && $percenatge <=60)
        {
            echo "Your Grade is C";
        }
        else if($percenatge >=60 && $percenatge <=70)
        {
            echo "Your Grade is B";
        }
        else if($percenatge >=70 && $percenatge <=80)
        {
            echo "Your Grade is A";
        }
        else if($percenatge >=80 && $percenatge <=100)
        {
            echo "Your Grade is A+";
        }
        else
        {
            echo "You Failed Try Again Next Time";
        }
        
        
        
        
    
    ?>
</center>
    
</body>
</html>