<?php
$numbers=[1,2,3,4,5,6,7,8,9,10,11,12,13];
$count=0;
for($i=0;$i<13;$i++)
{
    if($numbers[$i]==15)
    {
        $count++;
    }
}
if($count== 0)
    {
        echo "Number 15 is not found in the array ";

    }else{
        echo "Number 15 is found in the array ";
    }
?>