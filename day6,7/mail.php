
<!DOCTYPE html>
<html lang="en">
<head>

    <title>MAIL</title>
</head>
<body>
<form action="mail.php" method="POST">
Enter Parent's email id:
<input type="email" name="email" id="">
<input type="submit" value="Submit" name="submit" >
</form>
</body>
</html>


<?php
if(isset($_POST["submit"]))
{
    $name='Shriya';
    $email=$_POST['email'];   
    $subject='Marksheet of '.$name;
    $m1=96;
    $message='<html>
    <br>
    <br>
    <br>
    <br>
    <table border="1" style="border-collapse: collapse; width: 50%;">
    <tbody>
    <tr>
    <td>Name</td>
    <td>Subject</td>
    <td>Marks</td>
    </tr>
    <tr>
    <td rowspan="3">Shriya Kadam</td>
    <td>HTML</td>
    <td>'.$m1.'</td>
    </tr>
    <tr>
    <td>PHP</td>
    <td>90</td>
    </tr>
    <tr>
    <td>MySQL</td>
    <td>86</td>
    </tr>
    <tr>
    <td>Percentage</td>
    <td >'.(91+1).'</td>
    </tr>
    <tr>
    <td >Result</td>
    <td><strong>Pass</strong></td>
    </tr>
    </tbody>
    </table>
    <p></p>
    </html>';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($email,$subject,$message,$headers);
}
?>
