<html>

<div class="Report">
	<form action="q1.php" method="post">
	<label for="Name">Name of the Student</label>
	<input type="text" name="name" id="name" required><br><br>

    

	Marks in each Subject:<br>
	<label for="s1">Subject 1:</label>
	<input type="text" name="mark1" id="s1" required><br>

	<label for="s2">Subject 2:</label>
	<input type="text" name="mark2" id="s2" required><br>

	<label for="s3">Subject 3:</label>
	<input type="text" name="mark3" id="s3" required><br>

	<label for="s4">Subject 4:</label>
	<input type="text" name="mark4" id="s4" required><br>

	<label for="s5">Subject 5:</label>
	<input type="text" name="mark5" id="s5" required><br>
	<input type="submit" value="Submit">
	</form>
</div>

</html>

<?php

$yourname = @$_POST["name"];

$mk1 = @$_POST["mark1"];
$mk2 = @$_POST["mark2"];
$mk3 = @$_POST["mark3"];
$mk4 = @$_POST["mark4"];
$mk5 = @$_POST["mark5"];

$total=($mk1+$mk2+$mk3+$mk4+$mk5);
$per=($mk1+$mk2+$mk3+$mk4+$mk5)/500 *100;

$connect=mysqli_connect("localhost","root","") or die(mysql_error());

mysqli_select_db($connect,"result") or die("ERROR");

$write=mysqli_query($connect,"Insert into class1 values('','$yourname','$mk1','$mk2','$mk3','$mk4','$mk5','$total','500','$per')") or die(mysqli_error($connect));




if($yourname)
{
	echo "Total Marks Obtained: ".$total."<br>";
	echo "Total Marks: 500 <br>";
	echo "Percentage:".$per."%";
}
?>