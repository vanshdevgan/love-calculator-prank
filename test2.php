<?php 
  include 'db.php';
// PHP function to print a  
// random string of length n 

function RandomStringGenerator($n) 
{ 
    // Variable which store final string 
    $generated_string = ""; 
      
    // Create a string with the help of  
    // small letters, capital letters and 
    // digits. 
    $domain = "abcdefghijklmnopqrstuvwxyz1234567890"; 
      
    // Find the lenght of created string 
    $len = strlen($domain); 
      
    // Loop to create random string 
    for ($i = 0; $i < $n; $i++) 
    { 
        // Generate a random index to pick 
        // characters 
        $index = rand(0, $len - 1); 
          
        // Concatenating the character  
        // in resultant string 
        $generated_string = $generated_string . $domain[$index]; 
    } 
      
    // Return the random generated string 
    return $generated_string; 
} 
  
// Driver code to test above function 
$n=9;
$secretkey=RandomStringGenerator($n); //randomkey
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
// Attempt insert query execution
$sql = "INSERT INTO users (secret,username,userid) VALUES ( 'k0wa7nohj','Fuck8564','k0wa7nohs')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// $sqla = "SELECT message FROM lvqzs WHERE secret='k0wa7nohj'";
// $result = $link->query($sqla);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo$row["message"]."<br>";
//     }
// } else {
//     echo "0 results";
// }
// Close connection
mysqli_close($link);

?>