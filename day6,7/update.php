<?php

if(@$_POST["update"])
{




$user=@$_POST["uname"];


$con=mysqli_connect("localhost","root","","school");
$sql1="select * from sheet where `sheet`.`username`='$user';";
$res1=mysqli_query($con,$sql1) or die("Error");


while($row= mysqli_fetch_assoc($res1))
{
    $m1=$row['html'];
    $m2=$row['mysql'];
    $m3=$row['php'];
    $per=$row['percentage'];
    $status=$row['result'];
    $name1=$row['name'];
}

echo "CURRENT DATA: <br>";

echo "NAME: ".$name1."<br>";
echo "Marks in PHP: ".$m1."<br>";
echo "Marks in SQL: ".$m2."<br>";
echo "Marks in PHP: ".$m3."<br>";


}



?>




<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>
</head>
<body>
<form action="update.php" method="POST">
Enter user id again for confirmation:
<input type="text" name="uname">
<br>

Enter new name:
<input type="text" name="name">
<br>
<br>



Enter new marks for HTML:
<input type="number" name="m1">
<br>
Enter new marks for SQL:
<input type="number" name="m2">
<br>
Enter new marks for PHP:
<input type="number " name="m3">
<br>




<br>
<input type="submit" value="UPDATE" name="update">
<br>
</form>
</body>
</html>

<?php

if(@$_POST["update"]  )
{
    $name=@$_POST["name"];

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

    $sql=mysqli_query($con,"UPDATE `sheet` SET `php` = '$t3', `mysql` =' $t2', `html` = '$t1'  WHERE `sheet`.`username` = '$user'");
    $sql1=mysqli_query($con,"UPDATE  `sheet` SET `percentage`=$per, `result`='$status' WHERE `sheet`.`username` = '$user' ");
    


    if($sql && $sql1 )

    {
        if($t1==$m1 ||$t2==$m2||$t3==$m3||$name==$name1)
        {

        }
        else
        {

        echo "UPDATED SUCCESSFULLY";

        }


    }

    else{

        echo "UPDATION FAILED";
    }
}
?>
