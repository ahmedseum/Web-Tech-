<?php
$the_array=[
    [1,2,3,'A'],
    [1,2,'B','C'],
    [1,'C','D','E']];
for($i=0;$i<3;$i++)
{
    for($j=0;$j<4;$j++)
    {
        
        echo $the_array[$i][$j];
        if(3-$i==$the_array[$i][$j])
        {
            for($k=1;$k<=3-(3-$i);$k++)
            {
                echo '&nbsp';
            }
        }
    }
    echo "<br>";
}
?>
