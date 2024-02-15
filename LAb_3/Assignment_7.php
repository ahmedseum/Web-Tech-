<?php
for($i=0;$i<3;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        echo "* ";
    }  
    echo"<br>"; 
}
echo"<br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<=2-$i;$j++)
    {
        echo $j+1," ";
    }  
    echo"<br>"; 
}
echo"<br>";
for($i='A';$i<='C';$i++)
{
    for($j='A';$j<=$i;$j++)
    {
        echo $j," ";
    }  
    echo"<br>"; 
}
?>