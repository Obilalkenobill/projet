<?php
session_start();
require "projet2-3a.php";
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
width:100%;
}
.parent {
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div1 {
    border:solid grey 2.5px;
     grid-area: 1 / 1 / 2 / 2; }
.div2 { 
    margin-top:50%;
    border:solid grey 2.5px;
    grid-area: 1 / 2 / 2 / 3; }
    select{
        width:50%;
    }
</style>
<div class="parent">
<div  class="div1">
<form action="projet2-3.php" method="POST">
<p>Ordre Chronologique </p><input type="radio" name="chro" value="1" ><br>
<p>Ordre Non Chronologique</p><input type="radio" name="chro" value="2"><br>
<input type=submit>
</form>
<table class="table table-striped">
<tr>
<th>
Mois de l'annéee
</th>
<th>
Nombre de jour
</th>
</tr>
        <?php
        require "projet2-3a.php";
      if (isset($_SESSION['boolChro']) && $_SESSION['boolChro'])  {   
        echo "<br><br> <h2>Mois de l'année dans l'ordre chronologique</h2><br><br>";          
      for ($i=1; $i < count($_SESSION['Mois']); $i++) { 
        echo"<tr><td>{$_SESSION["Mois"][$i]}</td><td> {$_SESSION["Mois"][0][$i]} jours. </td></tr>";
      }
          }
          else   if ( isset($_SESSION['boolChro']) && !$_SESSION['boolChro'] ){   
            echo "<br><br> <h2>Mois de l'année dans l'ordre anti-chronologique</h2><br><br>";          
          for ($i=count($_SESSION['Mois'])-1; $i >=1; $i--) { 
            echo"<tr><td>{$_SESSION["Mois"][$i]}  </td> <td> {$_SESSION["Mois"][0][$i]} jours. </td></tr>";
          }
              }

       session_destroy();
       ?>
        
          </table>
          </div>
          <border>
<div class="div2">
<form action="projet2-3.php" method="POST">
<label>Découvrez combien il y'a de jour dans le mois de</label>
          <select name="choixMois" class="form-select" aria-label="Default select example">
        
        <?php 
        echo "<option  value=\"\"></option>";
         for ($i=1 ; $i < count($_SESSION['Mois']); $i++) { 
        echo "<option  value=\"{$_SESSION["Mois"][0][$i]}\">{$_SESSION["Mois"][$i]}</option>";
         }
        ?>
        </select>
        <input type="submit">
          </form>
         <?php 
         if (isset($_POST["choixMois"])&& isset($_SESSION["nbreJourMois"])){ echo "<h2>Dans le mois que vous avez choisis il y'a {$_SESSION["nbreJourMois"]} jours </h2>";}
         ?>
</div>
</div>
<a href="projet1.php">Passez aux tableau de chiffres. </a>
<br>
<a href="projet4.php">Passez aux tableau de température d'un mois. </a>

</body>
</html>