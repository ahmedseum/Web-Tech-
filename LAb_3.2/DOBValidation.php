<?php
$dd = $_REQUEST["dd"];
$mm = $_REQUEST["mm"];
$yy = $_REQUEST["yyy"];

if($dd==""||$mm==""||$yy=="")
{
    echo "Can not be empty ";
}elseif($dd/31>1 || $mm/12>1 || $yy/1000<1)
{
    echo "Invalid Formate";
}
?>