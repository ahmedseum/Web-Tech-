<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$Username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$conpass=$_REQUEST['confirmpassword'];
$DOB=$_REQUEST['date'];
if($name=="" ||$email=="" ||$Username=="" ||$password=="" ||$conpass=="" ||$DOB=="" ||$_POST('gender'))
{
    print("Must not enpty ");
}
?>