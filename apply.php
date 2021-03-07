<?php
$m=$_GET['m'];
$t=$_GET['t'];
$bg=$_GET['bg'];
$b=$_GET['b'];
$p=$_GET['p'];
$c=$_GET['c'];
$d=$_GET['d'];
$dt=$_GET['dt'];
$tm=$_GET['tm'];
$id=0;
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

    $sql = "SELECT * FROM cards";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"] ;
        
    }
}

$conn->close();
$id=(int)$id+1;
switch ($t) {
    case "Hindu":
       
    $myfile = fopen("$id.html", "w") or die("Unable to open file!");
$txt = "
<html>
<head>
    
</head>
<body style=\"padding: 0%\">
    <div style=\"background-image: url('1.jpg');width: 100%;background-size: 100% 100%;height:1500px; padding: 0%\">

       <center><img src=\"ganpati.png\" width=\"150px\" style=\"margin: 70px 0px 0px 0px;padding: 0%\"><br><img src=\"flower.gif\" width=\"150px\" style=\"margin: -150px 0px 0px 0px;padding: 0%\">
       <br> ||SHRI GANESH||<br><br><br>
    <h1 style=\"margin: 0%; padding: 0px;color: rgb(253, 51, 0);font-family:Algerian;\">Together With Thier Families</h1>
    <h3 style=\"font-size: 50px;padding: 0px;margin: 0%; color: rgb(143, 95, 32);font-family:Edwardian Script ITC;\">$bg<br><img src=\"heart.gif\" width=\"50px\" ><br>$b</h3>
      <label style=\"font-family: Algerian;color: rgb(143, 0, 55);\">Request the pleasure of yours company <br>at the celibration of Thier union</label>
      <br><br>
      <label style=\"font-family: Algerian;color: rgb(137, 156, 65);\">-TIME-</label>
      <br>
      <label style=\"font-family: Algerian;color: rgb(238, 41, 41);\">$d<br>$dt<br>at $tm</label>
    <br><br>
    <label style=\"font-family: Algerian;color: rgb(137, 156, 65);\">-PLACE-</label>
    <br>
      <label style=\"font-family: Algerian;color: rgb(238, 41, 41);\">at $p<br>$c</label>
      
      <h3 style=\"font-size: 50px;padding: 0px;margin: 70px; color: rgb(143, 95, 32);font-family:Edwardian Script ITC;\">Reception To Follow</h3>
    </center> 
    </div>
</body>
</html>";
fwrite($myfile, $txt);
fclose($myfile);

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

$sql = "INSERT INTO cards
VALUES ('$id','$m')";

if ($conn->query($sql) === TRUE) {

echo "<style onload=\"parent.applied('$m')\"></style>";
    
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

        break;

    case "Islam":
        
    $myfile = fopen("$id.html", "w") or die("Unable to open file!");
    $txt = "
    <html>
    <head>
        
    </head>
    <body style=\"padding: 0%\">
        <div style=\"background-image: url('1.jpg');width: 100%;background-size: 100% 100%;height:1500px; padding: 0%\">
    
           <center><img src=\"muslim.png\" width=\"150px\" style=\"margin: 70px 0px 0px 0px;padding: 0%\"><br>
           <br><br><br><br>
        <h1 style=\"margin: 0%; padding: 0px;color: rgb(253, 51, 0);font-family:Algerian;\">Together With Thier Families</h1>
        <h3 style=\"font-size: 50px;padding: 0px;margin: 0%; color: rgb(143, 95, 32);font-family:Edwardian Script ITC;\">$bg<br><img src=\"heart.gif\" width=\"50px\" ><br>$b</h3>
          <label style=\"font-family: Algerian;color: rgb(143, 0, 55);\">Request the pleasure of yours company <br>at the celibration of Thier union</label>
          <br><br>
          <label style=\"font-family: Algerian;color: rgb(137, 156, 65);\">-TIME-</label>
          <br>
          <label style=\"font-family: Algerian;color: rgb(238, 41, 41);\">$d<br>$dt<br>at $tm</label>
        <br><br>
        <label style=\"font-family: Algerian;color: rgb(137, 156, 65);\">-PLACE-</label>
        <br>
          <label style=\"font-family: Algerian;color: rgb(238, 41, 41);\">at $p<br>$c</label>
          
          <h3 style=\"font-size: 50px;padding: 0px;margin: 70px; color: rgb(143, 95, 32);font-family:Edwardian Script ITC;\">Reception To Follow</h3>
        </center> 
        </div>
    </body>
    </html>";
    fwrite($myfile, $txt);
    fclose($myfile);
    
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
    
    $sql = "INSERT INTO cards
    VALUES ('$id','$m')";
    
    if ($conn->query($sql) === TRUE) {
    
    echo "<style onload=\"parent.applied('$m')\"></style>";
        
    } 
    else
     {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

        break;

    case "Christianity":
        
    $myfile = fopen("$id.html", "w") or die("Unable to open file!");
    $txt = "
    <html>
    <head>
        
    </head>
    <body style=\"padding: 0%\">
        <div style=\"background-image: url('1.jpg');width: 100%;background-size: 100% 100%;height:1500px; padding: 0%\">
    
           <center><img src=\"cross.png\" width=\"150px\" style=\"margin: 70px 0px 0px 0px;padding: 0%\"><br>
           <br><br><br><br>
        <h1 style=\"margin: 0%; padding: 0px;color: rgb(253, 51, 0);font-family:Algerian;\">Together With Thier Families</h1>
        <h3 style=\"font-size: 50px;padding: 0px;margin: 0%; color: rgb(143, 95, 32);font-family:Edwardian Script ITC;\">$bg<br><img src=\"heart.gif\" width=\"50px\" ><br>$b</h3>
          <label style=\"font-family: Algerian;color: rgb(143, 0, 55);\">Request the pleasure of yours company <br>at the celibration of Thier union</label>
          <br><br>
          <label style=\"font-family: Algerian;color: rgb(137, 156, 65);\">-TIME-</label>
          <br>
          <label style=\"font-family: Algerian;color: rgb(238, 41, 41);\">$d<br>$dt<br>at $tm</label>
        <br><br>
        <label style=\"font-family: Algerian;color: rgb(137, 156, 65);\">-PLACE-</label>
        <br>
          <label style=\"font-family: Algerian;color: rgb(238, 41, 41);\">at $p<br>$c</label>
          
          <h3 style=\"font-size: 50px;padding: 0px;margin: 70px; color: rgb(143, 95, 32);font-family:Edwardian Script ITC;\">Reception To Follow</h3>
        </center> 
        </div>
    </body>
    </html>";
    fwrite($myfile, $txt);
    fclose($myfile);
    
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
    
    $sql = "INSERT INTO cards
    VALUES ('$id','$m')";
    
    if ($conn->query($sql) === TRUE) {
    
    echo "<style onload=\"parent.applied('$m')\"></style>";
        
    } 
    else
     {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

        break;
}
?>