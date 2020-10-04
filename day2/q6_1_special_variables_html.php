<html>
<head>
</head>
<body>
<p>Enter length of sides:</p>
<form action="q6_1.php" method="GET">

Side a: <input type="number" min="1" name="s1"><br>
Side b: <input type="number" min="1" name="s2"><br>
Side c: <input type="number" min="1" name="s3"><br>
<input type="submit" value="Check" name="xyz"/>
</form>
</body>
<?php
if(isset($_GET['xyz']))
{
$a=$_GET['s1'];
$b=$_GET['s2'];
$c=$_GET['s3'];
$i=0;
if($a==$b & $b==$c){
    echo "Triangle is an equilateral triangle.";
}

elseif($a==$b | $a==$c | $b==$c){
    echo "Triangle is an isosceles triangle.";
}
else{
    if($a*$a==$b*$b+$c*$c | $b*$b==$a*$a+$c*$c | $c*$c==$b*$b+$a*$a){
        echo "Triangle is a right angled triangle.";
    }
    else{
        echo "Triangle is a scalene triangle.";
    }
       
    }
}?>
</html>