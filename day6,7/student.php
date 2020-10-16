<?php
session_start();


$user=$_SESSION['user']  ;


$conn = mysqli_connect("localhost","root","","school") or die(mysqli_connect_error());
$query = "SELECT * FROM sheet WHERE username='$user' "or die("cannot connect") ;

  $results = mysqli_query($conn, $query) or die("Wrong query");

  while ($row = mysqli_fetch_assoc($results)) {
$name=$row['name'];
    $m1=$row['html'];
    $m2=$row['mysql'];
    $m3=$row['php'];
    $per=$row['percentage'];
    $status=$row['result'];

    
  }

?>



<html>

<body>
<br>
<br>
<br>
<br>
<table border="4" style="border-collapse: collapse; width: 50%;">
<tbody>
<tr style="height: 27px;">
<td style="width: 33.3333%; height: 27px;">Name</td>
<td style="width: 33.3333%; height: 27px;">Subject</td>
<td style="width: 29.3578%; height: 27px;">Marks</td>
</tr>
<tr style="height: 58px;">
<td style="width: 33.3333%; height: 168px;" rowspan="3"><?php echo $user; ?></td>
<td style="width: 33.3333%; height: 58px;">HTML</td>
<td style="width: 29.3578%; height: 58px;"><?php echo $m1; ?></td>
</tr>
<tr style="height: 56px;">
<td style="width: 33.3333%; height: 56px;">PHP</td>
<td style="width: 29.3578%; height: 56px;"><?php echo $m2; ?></td>
</tr>
<tr style="height: 54px;">
<td style="width: 33.3333%; height: 54px;">MySQL</td>
<td style="width: 29.3578%; height: 54px;"><?php echo $m3; ?></td>
</tr>
<tr style="height: 74px;">
<td style="width: 33.3333%; height: 74px;">Percentage</td>
                <td style="width: 62.6911%; height: 74px;" colspan="2"><?php echo $per; ?></td>
                </tr>
<tr style="height: 84px;">
<td style="width: 33.3333%; height: 84px;">Result</td>
<td style="width: 62.6911%; height: 84px;" colspan="2"><strong><?php echo $status; ?></strong></td>
</tr>
</tbody>
</table>
<p></p>








    
    <form action="student.php" method="POST">
    
    Enter your parents email id:
    <input type="email" name="eid" id="">

    <input type="submit" value="SEND" name="send">
    
    
    
    </form>
</body>

</html>

<?php

if(@$_POST["send"])
{

   //if($per<60)
   // {
       // echo "Sorry you have scored less than 60% we cannot send mail";
  //  }
//
  //  else{

$email=@$_POST["email"];

echo $email;


$subject='CONGRATULATIONS !!! Marksheet of '.$name;

$message='<html>
<br>
<br>
<br>
<br>
<table border="4" style="border-collapse: collapse; width: 50%;">
<tbody>
<tr style="height: 27px;">
<td style="width: 33.3333%; height: 27px;">Name</td>
<td style="width: 33.3333%; height: 27px;">Subject</td>
<td style="width: 29.3578%; height: 27px;">Marks</td>
</tr>
<tr style="height: 58px;">
<td style="width: 33.3333%; height: 168px;" rowspan="3"><?php echo $user; ?></td>
<td style="width: 33.3333%; height: 58px;">HTML</td>
<td style="width: 29.3578%; height: 58px;"><?php echo $m1; ?></td>
</tr>
<tr style="height: 56px;">
<td style="width: 33.3333%; height: 56px;">PHP</td>
<td style="width: 29.3578%; height: 56px;"><?php echo $m2; ?></td>
</tr>
<tr style="height: 54px;">
<td style="width: 33.3333%; height: 54px;">MySQL</td>
<td style="width: 29.3578%; height: 54px;"><?php echo $m3; ?></td>
</tr>
<tr style="height: 74px;">
<td style="width: 33.3333%; height: 74px;">Percentage</td>
                <td style="width: 62.6911%; height: 74px;" colspan="2"><?php echo $per; ?></td>
                </tr>
<tr style="height: 84px;">
<td style="width: 33.3333%; height: 84px;">Result</td>
<td style="width: 62.6911%; height: 84px;" colspan="2"><strong><?php echo $status; ?></strong></td>
</tr>
</tbody>
</table>
<p></p>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail("kadamsg19@student.mes.ac.in",$subject,$message,$headers);


//}





}
