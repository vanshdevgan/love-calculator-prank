<?php
session_start();
include 'db.php';
$victimname=$_GET['vname'];
$crushname=$_GET['cname'];
$secret= $_GET['secret'];

 $sqlc = "SELECT userid FROM users WHERE secret='$secret'";
																					$result = $link->query($sqlc);
																					if ($result->num_rows > 0) {
																					    // output data of each row
																					    while($row = $result->fetch_assoc()) {
																					     $uid=$row['userid'];
																					    }
																					    }

$final="final.php?userid=".$uid;	
$sql = "INSERT INTO usersdata (secret,victim,crush) VALUES ('$secret','$victimname','$crushname')";
if(mysqli_query($link, $sql)){
	echo "Inserted Successfully";
      header("Location:".$final, true, 301);
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>

