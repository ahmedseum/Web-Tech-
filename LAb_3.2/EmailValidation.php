<?php

$email = $_REQUEST["email"];
if($email=="")
{
    echo "Can not be empty ";
}else
{
    $checkat=0;$checkfot=0;
    for($i=0;$i<strlen($email);$i++)
    {
        if($email[$i]=='@')
        {
            $checkat=1;
        }elseif($email[$i]=='.')
        {
            $checkfot=1;
        }
    }
    if($checkat!=1||$checkfot!=1)
    {
        echo "Must have a valid email";
    }else{
        echo $email;
    }
}

?>