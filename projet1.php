<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Les chiffres</title>
</head>
<body>
<style>

table{
    text-align:center;
    width:50%;
}
</style>
<h1 class="h1">Vous avez içi un générateur de nombre aléatoire, vous pouvez obtenir des informations dessus, en jouant avec le selecteur !</h1>
<br>
<table class="table table-striped">
<tr>
<td></td>
        <?php
        session_start();
        require "projet1a.php";
      
      if (isset($_SESSION["tab5Chif"] ) || isset($_SESSION["choix"])){             
      for ($i=0; $i < count($_SESSION['tab5Chif']); $i++) { 
        echo"<td>{$_SESSION["tab5Chif"][$i]}</td>";
      }
          }
        ?>
        <td></td>
          </tr>
          </table>

          <form action="projet1.php" method="POST">
          <select name="choix" class="form-select" aria-label="Default select example">
          
          <option  value="" > </option>
        <option  value="1">Plus Grand</option>
        <option  value="2">Plus Petit</option>
        <option value="3">Moyenne</option>
        <option value="4">Somme</option>
        </select>
        <br>
        Cochez pour recharger la session <input type="checkbox" name="reload" value="1">
        <input type="submit">
          </form>
          <a href="projet2.php">Passez aux calendrier. </a>
<?php 
        if (isset($_POST["choix"])&& isset($_SESSION["choix"])){ echo "<h2>La réponse est {$_SESSION["choix"]} </h2>";}
         if (isset($_SESSION) && isset($_POST["reload"]) && $_POST["reload"]==1)
         { session_destroy();
          $_POST["reload"]=null;
          }
         ?>

          
    
</body>
</html>
