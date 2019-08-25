<?php 
include 'db.php';
include 'urlget.php';
session_start();
//Receving POST VARIABLES HERE 
$username_value=$_POST['fname'];
$secretkey=$_POST['secretkey'];
$userid=$_POST['userid'];
//Giving POST VARIABLE SESSION
$_SESSION['secretkey']=$secretkey;
$_SESSION['userid']=$userid;
$_SESSION['username_value']=$username_value;
//Cookie Function
// function setcookievalue($secretkey,$userid) {
    
//    
// }
if(!isset($_COOKIE['secretid']) && !isset($_COOKIE['userid']))
{
    setcookie('secretid', $secretkey);
     setcookie('userid', $userid);
     setcookie('username', $username_value);
     $newurl=$fdomain.$userid;
     $_SESSION['newurl']=$newurl;
//API SHORTEN START
 $site=$_SESSION['newurl'];
$url='https://cutt.ly/api/api.php';
$finallink = urlencode($site);
$key='0c8d5cebe5924b4f216d91fc761c19bc8d8d7';
$json = file_get_contents($url."?key=$key&short=$finallink");
$data = json_decode ($json, true);
$_SESSION['finalurl']=$data["url"]["shortLink"];
//API SHORTEN END


$sql = "INSERT INTO users (secret,username,userid) VALUES ('$secretkey','$username_value','$userid')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
      header("Location:".$newurl, true, 301);
}

}
else{
$nid=$_COOKIE['secretid']; //secret id stored in nid
 $sqlb = "SELECT userid FROM users WHERE secret='$nid'";
$result = $link->query($sqlb);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $newurl=$fdomain.$row['userid'];
        header("Location:".$newurl,true, 301);
    }

} 
else 
{
    header("Location:index.php");
}

} 

?>