<?php $uri = $_SERVER['REQUEST_URI'];
echo $uri; // Outputs: URI
 echo " ";
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url; // Outputs: Full URL
  echo " ";
$query = $_SERVER['QUERY_STRING'];
echo $query; // Outputs: Query String
?>