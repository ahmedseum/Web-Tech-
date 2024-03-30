<?php
$firstname=$_REQUEST['F_name'];
$lastname=$_REQUEST['L_name'];
$DOB=$_REQUEST['DOB'];
$emal=$_REQUEST['email'];
$Phone=$_REQUEST['Phone'];
$password=$_REQUEST['password'];
$c_password=$_REQUEST['c_password'];
$gender="";
$namere=false;
$fullname=$firstname." ".$lastname;
if($firstname==""||$lastname==""||$DOB==""||isset($_POST['Gender'])==false||$emal==""||$Phone==""||$password==""||$c_password=="")
{
    echo "Field cannot be empty ";
}elseif($firstname!=$lasetname and $firstname=="" && $lastname=="" )
{
    echo "Must write Full name";
}elseif($fullname[0]>='a' || $fullname[0]<='z' ||$fullname[0]>='A' || $fullname[0]<='Z' )
{
    $namere=true;
}else
{
    for($i=0;$i<strlen($fullname);$i++)
    {
        if($fullname[$i]>='a' || $fullname[$i]<='z' ||$fullname[$i]>='A' || $fullname[$i]<='Z'||$fullname[$i]=='.'||$fullname[$i]<='-')
        {
            $namere=true;
            if($namere==false)
                {
                    echo "enter valid email";
                    break;
                }
        }
    }
}

?>