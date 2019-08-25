<?php 
 $link = mysqli_connect("localhost", "xyz", "xyz@321", "xyz");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}?>
