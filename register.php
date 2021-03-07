<?php

$n=$_GET['n'];

$m=$_GET['m'];

$p=$_GET['p'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "card";


    // Create connection
    $conn = new mysqli($servername , $username , $password , $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * from details where mobiles='$m'";
     if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      echo "<style onload=\"parent.exist()\"></style>";
 }
  else{
$sql = "INSERT INTO details (names,mobiles,pass)
VALUES ('$n','$m','$p')";

if ($conn->query($sql) === TRUE) {

echo "<style onload=\"parent.suc()\"></style>";
    
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        }
}
else
    echo "Query Failed.";

?>
