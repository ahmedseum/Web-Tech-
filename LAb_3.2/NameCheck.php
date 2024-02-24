<?php

$name = $_REQUEST["Name"];
if($name=="")
{
    echo "Can not be empty ";
}else if (strlen($name)<2)
{
    echo "Must Contain 2 words";
}else if ($name[0]=='0'||$name[0]=='1'||$name[0]=='2'||$name[0]=='3'||$name[0]=='4'||$name[0]=='5'||$name[0]=='6'||$name[0]=='7'||$name[0]=='8'||$name[0]=='9')
{
    echo "Must start with letter";
}else{
    echo $name;
}
?>