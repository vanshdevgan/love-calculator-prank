<?php $uri = $_SERVER['REQUEST_URI'];
 // echo " Outputs: URI ";
// echo $uri; // Outputs: URI

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  // echo " FULL URL - ";
// echo $url; // Outputs: Full URL
$wpurl=$url;
$query = $_SERVER['QUERY_STRING'];
// echo " QUERY STRING ";
// echo $query; // Outputs: Query String
// echo " MOdified";
$domain = str_replace($uri, '', $url) ;
$endurl='/timeline.php?userid=';
$fdomain=$domain.$endurl;//fulldomain

?>