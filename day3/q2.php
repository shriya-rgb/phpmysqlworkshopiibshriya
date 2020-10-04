<?php

//error_reporting(0);
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"result") or die("ERROR");


if ($connect) {
//echo "connect";
$extract = mysqli_query($connect,"SELECT * FROM class1 WHERE name='rohan'");
//echo "false";
while ($row = mysqli_fetch_assoc($extract)) {
//echo "true";
$s1 = $row["sub1"];
$s2 = $row["sub2"];
$s3 = $row["sub3"];
$s4 = $row["sub4"];
$s5 = 99;
//echo $s5;
$name1 = $row["name"];
$newtotal = $s1+$s2+$s3+$s4+$s5;
$newper = ($newtotal / 500 ) * 100 ;



$sql = "UPDATE class1 SET sub5='$s5' , totalobtained = '$newtotal' , percent = '$newper' WHERE name='$name1'";

  
   $retval = mysqli_query( $connect, $sql );
   
   if(! $retval ) {
      die('Could not update data: ' . mysqli_error());
   }
   echo "Updated data successfully\n";




}

}
else
{
	echo "not updated";
}

 ?>