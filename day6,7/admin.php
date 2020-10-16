
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<H2>SELECT THE FUNCTION YOU WANT TO PERFORM:

</H2>
<form action="insert.php" method="POST">

<input type="submit" value="INSERT">


</form>
<br><form action="update.php" method="POST">
Enter username:
<input type="text" name="uname" id="h">


<input type="submit" value="UPDATE" name="update">


</form>
<br>

<form action="admin.php" method="GET">
Enter username:
<input type="text" name="uname" id="">



<input type="submit" value="DELETE" name="DELETE">


</form>

    
</body>
</html>


<?php





if(@$_POST["DELETE"])
{

$user=@$_POST["username"];

$con=mysqli_connect("localhost","root","","school");


$query = "SELECT * FROM sheet WHERE username='$user' "or die("cannot connect") ;

  $results = mysqli_query($con, $query) or die("Wrong query");

  while ($row = mysqli_fetch_assoc($results)) {
$name=$row['name'];
    $m1=$row['html'];
    $m2=$row['mysql'];
    $m3=$row['php'];
    $per=$row['percentage'];
    $status=$row['result'];

    
  }

  echo "DELETED DATA: <br>";

echo "NAME: ".$name."<br>";
echo "Marks in PHP: ".$m1."<br>";
echo "Marks in SQL: ".$m2."<br>";
echo "Marks in PHP: ".$m3."<br>";





$sql=mysqli_query($con,"DELETE FROM `sheet` WHERE`username`='$user'");

if($sql)
{
    echo "DELETION SUCCESSFULL";
}
else{

    echo "UNSUCCESSFULL";
}



}


