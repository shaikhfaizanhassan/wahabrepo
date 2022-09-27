<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .t1{
            color:#234d56;
        }
    </style>
</head>
<body>
   <center>
    <h1>PHP Session 1</h1>
    <?php  
       echo "<h1><span class='t1'>Welcome</span> To Aptech</h1>";
       //create a variable
       $employeeID = 154;
       $employeeName = "Hasnian Baig";
       $email = "h@gmail.com";
       $password = "1245";
       $designation = "Web Developer";
       $salary = 50000;

        /*
       echo "Employee ID " . $employeeID . "<br>";
       echo "Employee Name " . $employeeName. "<br>";
       echo "Employee Email " . $email. "<br>";
       echo "Employee Password " . $password. "<br>";
       echo "Employee Desgination " . $designation. "<br>";
       echo "Employee Salary " . $salary. "<br>";
        */

        echo "ID " . $employeeID . "<br>" . "Name" . $employeeName . "<br>" . "Email " . $email;

       
       
    ?>
   </center> 
</body>
</html>