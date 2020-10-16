<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">



    <title>Document</title>
</head>
<body>
<form action="insert.php" method="POST">

Enter name:
<input type="text" name="name">
<br>
Enter username:
<input type="text" name="username">
<br>

Enter marks for HTML:
<input type="number" name="m1">
<br>
Enter marks for SQL:
<input type="number" name="m2">
<br>
Enter marks for PHP:
<input type="number " name="m3">
<br>


<br>
<input type="submit" value="INSERT" name="insert">
<br>
</form>
</body>
</html>

<?php

if(@$_POST["insert"])
{

    $name=@$_POST["name"];
    $uname=@$_POST["username"];
    $t1=@$_POST["m1"];
    $t2=@$_POST["m2"];
    $t3=@$_POST["m3"];



    $tot=$t1+$t2+$t3;
    $per=$tot/3;

    if($per>=60)
    {
        $status='P';
    }
    else{
        $status='F';
    }

    $con=mysqli_connect("localhost","root","","school");

    $sql="Insert into sheet values('$name','$uname',$t1,$t2,$t3,$per,'$status')";

    $res=mysqli_query($con,$sql);

    if($res)
    {
        echo "INSERTED SUCCESSFULLY";
    }

    else{

        echo "INSERTION FAILED";
    }

    

}


?>
