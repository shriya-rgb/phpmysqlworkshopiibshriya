<?php
    $a=array(array(2,4),array(4,5));
    $b=array(array(4,6),array(6,7));

    echo "Matrix Addition <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }
?>