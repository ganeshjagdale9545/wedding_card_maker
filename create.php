<?php
$myfile = fopen("hindu.html", "w") or die("Unable to open file!");
$txt = "
<html>
<head>
    
</head>
<body style=\"padding: 0%\">
    <div style=\"background-image: url('4.jpg');width: 100%;background-size: 100% 100%;height:1500px; padding: 0%\">

       <center><img src=\"ganpati.png\" width=\"150px\" style=\"margin: 70px 0px 0px 0px;padding: 0%\"><br><img src=\"flower.gif\" width=\"150px\" style=\"margin: -150px 0px 0px 0px;padding: 0%\">
       <br> ||SHRI GANESH||<br><br><br>
    <h1 style=\"margin: 0%; padding: 0px;color: rgb(253, 51, 0);font-family:Algerian;\">Together With Thier Families</h1>
    <h3 style=\"font-size: 50px;padding: 0px;margin: 0%; color: rgb(143, 95, 32);font-family:Edwardian Script ITC;\">Abhimanue<br><img src=\"heart.gif\" width=\"50px\" ><br>Prachi</h3>
      <label style=\"font-family: Algerian;color: rgb(143, 0, 55);\">Request the pleasure of yours company <br>at the celibration of Thier union</label>
      <br><br>
      <label style=\"font-family: Algerian;color: rgb(137, 156, 65);\">-TIME-</label>
      <br>
      <label style=\"font-family: Algerian;color: rgb(238, 41, 41);\">saturday<br>12/3/2019<br>at 12:30 pm</label>
    <br><br>
    <label style=\"font-family: Algerian;color: rgb(137, 156, 65);\">-PLACE-</label>
    <br>
      <label style=\"font-family: Algerian;color: rgb(238, 41, 41);\">at Shantai lawn, New nagar raod<br>sangamner</label>
      
      <h3 style=\"font-size: 50px;padding: 0px;margin: 70px; color: rgb(143, 95, 32);font-family:Edwardian Script ITC;\">Reception To Follow</h3>
    </center> 
    </div>
</body>
</html>";
fwrite($myfile, $txt);
fclose($myfile);
?> 