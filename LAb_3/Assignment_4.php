<?php
$number_1=9;
$number_2=90;
$number_3=900;
if ($number_1>$number_2 && $number_1>$number_3)
{
    echo "Largest number is : ",$number_1;
}else if($number_2>$number_1 && $number_2>$number_3){
    echo "Largest number is : ",$number_2;
}else 
{
    echo "Largest number is : ",$number_3;
}
?>