<?php
$site='https://google.com';
$url='https://cutt.ly/api/api.php';
$link = urlencode($site);
$key='0c8d5cebe5924b4f216d91fc761c19bc8d8d7';
$json = file_get_contents($url."?key=$key&short=$link&name=$name");
$data = json_decode ($json, true);
echo $data["url"]["shortLink"];
?>