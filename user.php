<?php

$m=$_GET['m'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loan";


    // Create connection
    $conn = new mysqli($servername , $username , $password , $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM details where mobiles='$m'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $n=$row["names"] ;
        
        
    }
}
$conn->close();
echo "
<div class=\"row\" >
                        <div class=\"col-sm-6\">
                            <div style=\"background-color: rgba(219, 203, 157, 0.568);min-height: 450px;margin: 35px 10px;border-radius: 5px;\">
                         <center> <img src=\"user.png\" width=\"100px\" style=\"margin:-25px 0px 0px 0px;\"> </center>
<center><h5 style=\"color: rgb(231, 39, 25);text-transform:uppercase;\">$n</h5>
<button onclick=\"loginu('$m')\" style=\"background-color: rgb(72, 10, 241);border-radius:5px;color:white;padding:1px;\">Refresh</button><button onclick=\"logout()\" style=\"background-color: rgb(72, 10, 241);border-radius:5px;color:white;padding:1px;\">Logout</button>
<br>
<br>
<table id=\"table\" style=\"width: 90%;\">
    
    <tr>
            <td><br>Mobile</td>
            <td><br>:</td>
            <td><br>$m</td>
    </tr>
    
</table><br>";

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

    $sql = "SELECT * FROM cards where mobiles='$m'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div><center><table>
    <tr>
    <th>
        <br>
       <center> Links </center>
    </th>
</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"] ;
    
    
echo"<tr>
    <td>
        <br>
      <center><label id=\"$id\" onclick=\"opene($id)\"> http://localhost/wedding_planer/$id.html</label> </center>
    </td>
    
</tr>";
    }
    echo"</table></center></div>";
}

echo "<br>
<button onclick=\"apply()\" style=\"background-color: rgb(72, 10, 241);border-radius:5px;color:white;padding:5px;\">Create Card</button><br><br>
</center>
</div>
</div>
<div class=\"col-sm-6\">
                            <div id=\"apply\" style=\"background-color: rgba(219, 203, 157, 0.568);min-height:450px;margin: 35px 10px;border-radius: 5px;padding: 0% 2px;\">
                               <center> <h1 style=\"background-color: rgb(218, 161, 55);color:white;border-radius: 5px;margin: 0% -2px;\">About</h1></center>
                               <h4>Instant Create Card | Easy Way |</h4>
                               <p>Add a personal touch to your wedding invitation with a custom design in HTML! Choose from our selection of beautiful layouts to create an invitation worthy of the occasion.</p>
                        </div>
                </div>
</div>
";



?>
