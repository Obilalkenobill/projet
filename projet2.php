<?php
session_start();
require "projet2a.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Calendrier</title>
</head>
<body>
<style>
.table{
text-align:center;
width:50%;
}
</style>
<form action="projet2.php" method="POST">
<p>Ordre Chronologique </p><input type="radio" name="chro" value="1" ><br>
<p>Ordre Non Chronologique</p><input type="radio" name="chro" value="2"><br>
<input type=submit>
</form>
<table class="table table-striped">
<tr>
<th>
Mois de l'annéee
</th>
</tr>
        <?php
        require "projet2a.php";
      if (isset($_SESSION['boolChro']) && $_SESSION['boolChro'])  {   
        echo "<br><br> <h2>Mois de l'année dans l'ordre chronologique</h2><br><br>";          
      for ($i=1; $i < count($_SESSION['Mois']); $i++) { 
        echo"<tr><td>{$_SESSION["Mois"][$i]} {$_SESSION["Mois"][0][$i]} jours. </td></tr>";
      }
          }
          else   if ( isset($_SESSION['boolChro']) && !$_SESSION['boolChro'] ){   
            echo "<br><br> <h2>Mois de l'année dans l'ordre anti-chronologique</h2><br><br>";          
          for ($i=count($_SESSION['Mois'])-1; $i >=1; $i--) { 
            echo"<tr><td>{$_SESSION["Mois"][$i]}  {$_SESSION["Mois"][0][$i]} jours. </td></tr>";
          }
              }

       session_destroy();
       ?>
        
          </table>
    
</body>
</html>