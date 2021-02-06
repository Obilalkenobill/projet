<?php

$i=1;
$tabMois=array();
while ($i <= 12) {
    if ($i==1){ $tabMois[$i]="Janvier";}
    if ($i==2){$tabMois[$i]="Février";}
    if ($i==3){$tabMois[$i]="Mars";}
    if ($i==4){$tabMois[$i]="Avril";}
    if ($i==5){$tabMois[$i]="Mai";}
    if ($i==6){$tabMois[$i]="Juin";}
    if ($i==7){$tabMois[$i]="Juillet";}
    if ($i==8){$tabMois[$i]="Aout";}
    if ($i==9){$tabMois[$i]="Septembre";}
    if ($i==10){$tabMois[$i]="octobre";}
    if ($i==11){$tabMois[$i]="Novembre";}
    if ($i==12){$tabMois[$i]="Decembre";}
    $i++;
}



$nbreJourMois=0;
$tabMoisBis=array();

if(isset($_POST["chro"]) && $_POST['chro']==1){
$_SESSION["boolChro"]=true;
}
else if (isset($_POST["chro"]) &&($_POST['chro']==2))
{$_SESSION["boolChro"]=false;}


    for ($i=1; $i <= 12; $i++) { 
        if ($i==2){
            $nbreJourMois=29;
        }
            else if (($i%2==0 && $i<8) || ($i>=8 && $i%2==1) && $i!=2){
            $nbreJourMois=30;
        }
        else  {
            $nbreJourMois=31;
        }
        $tabMois[0][$i]=$nbreJourMois;
    }
    $_SESSION["Mois"]=$tabMois;
 
if  (isset($_POST["choixMois"]) ){
    $_SESSION["nbreJourMois"]=$_POST["choixMois"];
}
