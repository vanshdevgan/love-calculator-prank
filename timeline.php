<?php session_start();
include 'db.php';
include 'timelineheader.php';
$nuid=$_GET['userid'];

if(!isset($_COOKIE['secretid']) && !isset($_COOKIE['userid']))
{
    if(!isset($_GET['userid'])){
    include 'lovacalc.php';
        
    }
    else
    {
        include 'lovecalc.php';
    }
}

else 
{
    include 'dashboard.php';
}
?>
            