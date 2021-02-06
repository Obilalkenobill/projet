<?php 
session_start();
require "projet4a.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<style>
table{
    margin-top:10%;
}
h1{
    text-align:center;
}
.max{
    background-color: #E23D28 ;
}
.min{
    background-color:#039be5;
}
</style>
<h1>Jour du mois de septembre et température du même mois.</h1>
<table class="table table-striped">
<tr>
<?php
for ($i=1; $i <= count($_SESSION["tabTemp"]) ; $i++) { 
   echo "<th>$i</th>";
}?>
</tr>
<tr>
<?php
$class="";
for ($i=0; $i < count( $_SESSION["tabTemp"] ) ; $i++) { 
    if ($_SESSION["tabTemp"][$i]==$_SESSION["tmpMax"])
    
    { $class="class=\"max\"";
      $_SESSION["jourTmpMax"][]=$i;
    }
    else if ($_SESSION["tabTemp"][$i]==$_SESSION["tmpMin"])
    {$class="class=\"min\"";
     $_SESSION["jourTmpMin"][]=$i;
    }
    else {$class="";}

   echo "<td $class>{$_SESSION["tabTemp"][$i]}</td>";
   if ($_SESSION["tabTemp"][$i]==$_SESSION["tmpMax"]){}
}
?>
</tr>
</table>
<br><br>
<?php echo "Il a fait le plus froid le ";
        for ($i=0; $i < count ($_SESSION["jourTmpMin"]) ; $i++) { 
            $j=$_SESSION["jourTmpMin"][$i]+1;
            echo ", $j ";
        }
        echo ", avec une température de {$_SESSION["tmpMin"]}°C <br><br>";


        
        echo "Il a fait le plus chaud le ";
        for ($i=0; $i < count ($_SESSION["jourTmpMax"]) ; $i++) { 
            $j=$_SESSION["jourTmpMax"][$i]+1;
            echo ", $j ";
        }
        echo ", avec une température de {$_SESSION["tmpMax"]}°C<br><br>";

        echo "La température moyenne était de {$_SESSION["tmpMoy"]}°C";
        session_destroy();
?>
<br><br>
<a href="projet1.php">Passez aux tableau de chiffres. </a>
<br>
<a href="projet2-3.php">Passez au calendrier. </a>

</body>
</html>