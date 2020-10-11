<html>
<body>
<form action="q1_md5.php" method="POST">
    Enter your username: 
    <input type="text" name="uname" id=""><br>
    Enter your Password:
    <input type="password" name="upwd" id=""> <br>
    <input type="submit" value="SUBMIT" name="submit">
</form>
</body>
</html>
<?php
if(@$_POST['submit'])
{
    $uname=@$_POST['uname'];
    $upwd=@$_POST['upwd'];
    $encupwd=md5($upwd);
    $con=mysqli_connect("localhost","root","","result");
    if($con)
    {
        $ins=mysqli_query($con,"INSERT into info values('$uname','$encupwd') ") or die("ERROR");
        if($ins)
        {
            echo "DATA ENTERED SUCCESSFULLY <br>" ;
        }
        else
        {
            echo "FAILED to insert data<br>";
        }
    }
    else
    {
        echo "Database connection failed";
    }
}
?>
