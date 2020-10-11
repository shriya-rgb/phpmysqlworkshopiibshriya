<html>
<body>
    
    <form action="q2_send_mail.php" method="POST">
    
    Name:
    <input type="text" name="name" id="name" required>
    <br>
    Email id:
    <input type="text" name="eid" id="eid" required >
    <br>

    Feedback:
    <br>
    <textarea name="feedback" id="" cols="30" rows="10" required></textarea>
    <br>
    <input type="submit" value="SUBMIT" name="submit">

    </form>


</body>

</html>


<?php


if(@$_POST['submit'])
{
    $name=@$_POST['name'];
    $to=@$_POST['eid'];
    $msg=@$_POST['feedback'];


    
    $subject="Feedback response";

    $from="From:kadamsg19@student.mes.ac.in";

    mail($to,$subject,"Thanks for your feedback",$from);


    mail("shriyakadam70@gmail.com","copy of response",$msg,$from);


}
?>
