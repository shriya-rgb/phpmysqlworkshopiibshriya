<html>
<body>
<p></p>
<form action="q6_2.php" method="POST">
Enter your name: <input type="text" name="name"><br>
Subject 1 marks: <input type="number" min="0" max=100 name="S1"><br>
Subject 2 marks: <input type="number" min="0" max=100 name="S2"><br>
Subject 3 marks: <input type="number" min="0" max=100 name="S3"><br>
Subject 4 marks: <input type="number" min="0" max=100 name="S4"><br>
Subject 5 marks: <input type="number" min="0" max=100 name="S5"><br>
<input type="submit" value="Submit" name="abc"/>
</form>
</body>
</html>

<?php
if(isset($_POST['abc']))
{
 echo "Name of Student:";
 echo $_POST['name']."<br>";
 echo "Marks in Each Subject:<br>";
 echo "Subject 1: ";
 echo $_POST['S1']."<br>";
 echo "Subject 2: ";
 echo $_POST['S2']."<br>";
 echo "Subject 3: ";
 echo $_POST['S3']."<br>";
 echo "Subject 4: ";
 echo $_POST['S4']."<br>";
 echo "Subject 5: ";
 echo $_POST['S5']."<br>";
 echo "Total Marks Obtained: ";
 echo $_POST['S1']+$_POST['S2']+$_POST['S3']+$_POST['S4']+$_POST['S5']."<br>";
 echo "Percentage: ";
 echo (($_POST['S1']+$_POST['S2']+$_POST['S3']+$_POST['S4']+$_POST['S5'])/5)."%.<br>";
}?>