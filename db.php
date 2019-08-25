<?php 
 $link = mysqli_connect("localhost", "vanshd_root", "Vansh@321", "vanshd_lovequizz");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}?>